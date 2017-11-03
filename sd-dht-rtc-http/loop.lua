
-- If you want your code to be more efficient then use "local" to declare variables when possible 
--and call node.compile("yourfile.lua"). Compiled lua code uses less memory.


--True if the function had to change the mode, false if the mode was already configured. 
--On a true return the ESP needs to be restarted for the change to take effect.
if adc.force_init_mode(adc.INIT_VDD33)then
  node.restart()
  return -- don't bother continuing, the restart is scheduled
end



spi.setup(1, spi.MASTER, spi.CPOL_LOW, spi.CPHA_LOW, 8, 8)
                    -- initialize other spi slaves
                    -- then mount the sd
                    -- note: the card initialization process during `file.mount()` will set spi divider temporarily to 200 (400 kHz)
                    -- it's reverted back to the current user setting before `file.mount()` finishes
vol = file.mount("/SD0", 8)   -- 2nd parameter is optional for non-standard SS/CS pin
if not vol then
    print("retry mounting")
    vol = file.mount("/SD0", 8)
    if not vol then
        error("mount failed")
    end
end
                    
if file.open("/SD0/readme.txt", "r") then 
        print("OK open readme.txt")
        print(file.read())
        file.close()
else
    print("cannot open readme.txt")
end  
                    


wifi.setmode(wifi.STATION)
station_cfg={}
station_cfg.ssid="error"
station_cfg.pwd="13021987"
wifi.sta.config(station_cfg) 
wifi.sta.connect()




function my_connect(current_connect, data)   
   current_connect:on ("receive", function (conn, req_data)  
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

         conn:send("<h2>node.bootreason ")
         _, reset_reason = node.bootreason() --raw, extented. Use extented only, Raw deprecated
         conn:send(reset_reason)  
         conn:send("</h2>\r\n") 
         
             conn:send("0, power-on<br>\r\n")  
             conn:send("1, hardware watchdog reset<br>\r\n") 
             conn:send("2, exception reset<br>\r\n") 
             conn:send("3, software watchdog reset<br>\r\n") 
             conn:send("4, software restart<br>\r\n") 
             conn:send("5, wake from deep sleep<br>\r\n") 
             conn:send("6, external reset <br>\r\n") 

        conn:send("<h2>\r\n") 
             remaining, used, total=file.fsinfo()
             conn:send("File system info:<br>")
             conn:send("Total : "..(total / 1024).." kBytes<br>")
             conn:send("Used : "..(used / 1024).." kBytes<br>")
             conn:send("Remain: "..(remaining / 1024).." kBytes<br><br>")  

             l = file.list();
                for k,v in pairs(l) do
                  conn:send("name:"..k.."  "..(v / 1024).." kBytes<br>\r\n")
                end
        
        conn:send("</h2>\r\n") 


         

         conn:send("<h2>HEAP ") 
         conn:send(node.heap()/1024)
         conn:send(" KBYTES</h2>\r\n") 

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
    end)   --inner      
end --function my_connect 


tmr.alarm(2, 1000, 1, function()
    if wifi.sta.getip() == nil then
        print("IP unavaiable, Waiting...")
    else
        tmr.stop(2)
        print("ESP8266 mode is: " .. wifi.getmode())
        print("The module MAC address is: " .. wifi.ap.getmac())
        print("Config done, IP is "..wifi.sta.getip())  
     end
end)      

        
        
my_server = net.createServer(net.TCP, 30) -- 30s timeout 
if my_server then
    my_server:listen(80, my_connect)                 
end        


-- Use the nodemcu specific pool servers
sntp.sync(nil, 
    function(sec, usec, server, info)
        print('SNTP sync', sec, usec, server)
        tm = rtctime.epoch2cal(rtctime.get())
        print(string.format("%04d/%02d/%02d %02d:%02d:%02d", tm["year"], tm["mon"], tm["day"], tm["hour"], tm["min"], tm["sec"])) 
    end,
    function()
        print('SNTP failed!')
    end
)

--CRON
cron.schedule("* * * * *", function(e) -- */2

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
                        
            
    --ADC
    print("System voltage (mV):", adc.readvdd33(0))
            
    --HTTP, httpS doesnot work
    http.get("http://httpbin.org/ip", nil, function(code, data)
        if (code < 0) then
            print("HTTP request failed")
        else
            print(code, data)
        end
    end)
            
            
    --SD card
    if file.open("/SD0/log.txt", "a+") then --open/ and create it
        tm = rtctime.epoch2cal(rtctime.get())          
        file.write(string.format("%04d-%02d-%02d %02d:%02d:%02d", tm["year"], tm["mon"], tm["day"], (tm["hour"]+3), tm["min"], tm["sec"]))
        file.write(';somelog;\r\n') 
        file.close()     
        print("log to SD")
    end

end) --cron





