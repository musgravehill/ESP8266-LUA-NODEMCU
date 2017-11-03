

--True if the function had to change the mode, false if the mode was already configured. 
--On a true return the ESP needs to be restarted for the change to take effect.
if adc.force_init_mode(adc.INIT_VDD33)
then
  node.restart()
  return -- don't bother continuing, the restart is scheduled
end


wifi.setmode(wifi.STATION)
station_cfg={}
station_cfg.ssid="error"
station_cfg.pwd="13021987"
wifi.sta.config(station_cfg) 
wifi.sta.connect()

function my_connect(current_connect, data)   
   current_connect:on ("receive",
      function (conn, req_data) 
         conn:send("HTTP/1.0 200 OK\r\n")
         conn:send("Server: nodemcu-net\r\n")
         conn:send("Content-Type: text/html\r\n")
         conn:send("\r\n")  --body start

         conn:send("<!DOCTYPE html><html><head>\r\n") 
         conn:send("<title>ESP8266 server</title>\r\n") 
         conn:send('<link rel="icon" href="http://www.rozek.de/Lua/Lua-Logo_128x128.png">\r\n') 
         conn:send("</head><body>\r\n")
         conn:send("<h1>ESP8266 server</h1>\r\n")

         tm = rtctime.epoch2cal(rtctime.get())
         conn:send("<h2>")
         conn:send(string.format("%04d-%02d-%02d %02d:%02d:%02d", tm["year"], tm["mon"], tm["day"], (tm["hour"]+3), tm["min"], tm["sec"]))
         conn:send("</h2>\r\n") 

         conn:send("<h2>")
         conn:send(string.format("DHT Temperature:%d.%03d;Humidity:%d.%03d\r\n",
                          math.floor(temp),
                          temp_dec,
                          math.floor(humi),
                          humi_dec
                    ))
         conn:send("</h2>\r\n")             
         
         conn:send('<img src="https://acrobotic.com/media/wysiwyg/products/esp8266_devkit_horizontal-01.png">\r\n')     
         conn:send("</body></html>\r\n")          
         
         current_connect:on("sent",function(conn) conn:close() end)             
         print(req_data)          
      end) 

        
end

tmr.alarm(2, 1000, 1, function()
    if wifi.sta.getip() == nil then
        print("IP unavaiable, Waiting...")
    else
        tmr.stop(2)
        print("ESP8266 mode is: " .. wifi.getmode())
        print("The module MAC address is: " .. wifi.ap.getmac())
        print("Config done, IP is "..wifi.sta.getip())  
        
        my_server = net.createServer(net.TCP, 30) -- 30s timeout 
        if my_server then
           my_server:listen(80, my_connect)            
        end        


        -- Use the nodemcu specific pool servers
            sntp.sync(nil,
              function(sec, usec, server, info)
                print('sync', sec, usec, server)
                tm = rtctime.epoch2cal(rtctime.get())
                print(string.format("%04d/%02d/%02d %02d:%02d:%02d", tm["year"], tm["mon"], tm["day"], tm["hour"], tm["min"], tm["sec"])) 
              end,
              function()
               print('failed!')
              end
            )

            --CRON
            cron.schedule("* * * * *", function(e) -- */2
              print("System voltage (mV):", adc.readvdd33(0))

            --DHT22
            DHT_pin=4 --  data pin, GPIO2
            status, temp, humi, temp_dec, humi_dec = dht.read(DHT_pin)
            if status == dht.OK then
                    -- Integer firmware using this example
                    print(string.format("DHT Temperature:%d.%03d;Humidity:%d.%03d\r\n",
                          math.floor(temp),
                          temp_dec,
                          math.floor(humi),
                          humi_dec
                    ))                   
                
                elseif status == dht.ERROR_CHECKSUM then
                    print( "DHT Checksum error." )
                elseif status == dht.ERROR_TIMEOUT then
                    print( "DHT timed out." )
                end



              
            end)


            --HTTP, httpS doesnot work
            http.get("http://httpbin.org/ip", nil, function(code, data)
                if (code < 0) then
                  print("HTTP request failed")
                else
                  print(code, data)
                end
              end)

         


             
    end
end)




