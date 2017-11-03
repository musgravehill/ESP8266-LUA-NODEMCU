cron.schedule("* * * * *", function(e) -- */2

    --DHT22
    DHT_pin=4 --  data pin, GPIO2
    status, DHT_t, DHT_h, DHT_t_dec, DHT_h_dec = dht.read(DHT_pin)
    if status == dht.OK then        
        print(string.format("CRON DHT Temperature:%d.%03d;Humidity:%d.%03d\r\n",
            math.floor(DHT_t),
            DHT_t_dec,
            math.floor(DHT_h), 
            DHT_h_dec 
        ))                                
    elseif status == dht.ERROR_CHECKSUM then
        print( "CRON DHT Checksum error." )
    elseif status == dht.ERROR_TIMEOUT then
        print( "CRON DHT timed out." )
    end    
    collectgarbage()    
            
    --HTTP, httpS doesnot work
    http.get("http://httpbin.org/ip", nil, function(code, data)
        if (code < 0) then
            print("CRON HTTP request failed")
        else
            print(code, data)
        end
    end) 
    collectgarbage()           
            
    --SD card    
    if SD_isAvailable  then 
        if file.open("/SD0/log.txt", "a+") then --open/ and create it
            tm = rtctime.epoch2cal(rtctime.get())          
            file.write(string.format("%04d-%02d-%02d %02d:%02d:%02d", tm["year"], tm["mon"], tm["day"], (tm["hour"]+3), tm["min"], tm["sec"]))
            file.write("HEAP FREE "..(node.heap()/1024).." KB\r\n") 
            file.close()     
            print("CRON log to SD")
        end
    end
    collectgarbage()

end) --cron
collectgarbage()
