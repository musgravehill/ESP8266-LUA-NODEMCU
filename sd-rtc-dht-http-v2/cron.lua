
local function CRON_logToSD()
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

local function CRON_sendToServer()
    http.get("http://httpbin.org/ip?GDATA_DHT_t="..GDATA_DHT_t..'&GDATA_DHT_h='..GDATA_DHT_h, nil, function(code, data)
        if (code < 0) then
            print("CRON HTTP request failed")
        else
            print("CRON HTTP request ok") 
            print(code, data)
        end
    end) 
    collectgarbage()
end

local function CRON_getDataDHT()
    local DHT_pin=4 --  data pin, GPIO2 
    local status, DHT_t, DHT_h, _, _ = dht.read(DHT_pin) 
    if status == dht.OK then     
        GDATA_DHT_t= DHT_t
        GDATA_DHT_h= DHT_h    
        print('CRON DHT '..GDATA_DHT_t..' C  '..GDATA_DHT_h..'%')                                    
    elseif status == dht.ERROR_CHECKSUM then
        print( "CRON DHT Checksum error" )
    elseif status == dht.ERROR_TIMEOUT then
        print( "CRON DHT timed out" ) 
    end    
    status=nil
    DHT_pin=nil
    collectgarbage()  
end

cron.schedule("* * * * *", 
function(e) -- */2 
     CRON_getDataDHT() 
     CRON_logToSD()
     CRON_sendToServer()
     collectgarbage() 
end
)

collectgarbage()