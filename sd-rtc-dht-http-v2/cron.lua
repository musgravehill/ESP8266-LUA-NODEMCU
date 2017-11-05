
function CRON_logToSD()
   tm = rtctime.epoch2cal(rtctime.get())   
   if file.open("/SD0/log-"..tm["mon"]..".txt", "a+") then --open/ and create it
            tm = rtctime.epoch2cal(rtctime.get())          
            file.write(string.format("%04d-%02d-%02d %02d:%02d:%02d", tm["year"], tm["mon"], tm["day"], (tm["hour"]+3), tm["min"], tm["sec"]))
            file.write("HEAP FREE "..(node.heap()/1024).." KB\r\n") 
            file.close()     
            print("CRON log to SD")            
    else
        print("CRON NOT log to SD")        
    end
    tm=nil
    collectgarbage() 
end

function CRON_sendToServer()
    http.get("http://httpbin.org/ip?GDATA_DHT_t="..GDATA_DHT_t..'&GDATA_DHT_h='..GDATA_DHT_h, nil, function(code, data)
        if (code < 0) then
            print("CRON HTTP request failed")
        else
            print(code, data)
        end
    end) 
    collectgarbage()
end

cron.schedule("* * * * *", 
function(e) -- */2 
     CRON_logToSD()
     CRON_sendToServer()
end
)

collectgarbage()