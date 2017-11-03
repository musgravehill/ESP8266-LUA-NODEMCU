cron.schedule("* * * * *", function(e) -- */2

    --DHT22
    DHT_pin=4 --  data pin, GPIO2
    status, DHT_t, DHT_h, DHT_t_dec, DHT_h_dec = dht.read(DHT_pin)
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
collectgarbage()