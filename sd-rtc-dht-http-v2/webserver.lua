local function net_connect(current_connect, data)   
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
        
        local tm = rtctime.epoch2cal(rtctime.get())
        conn:send("<h2>")
        conn:send(string.format("%04d-%02d-%02d %02d:%02d:%02d", tm["year"], tm["mon"], tm["day"], (tm["hour"]+3), tm["min"], tm["sec"]))
        conn:send("</h2>\r\n") 
        collectgarbage() 
        
        conn:send("<h2>node.bootreason ")
        local _, reset_reason = node.bootreason() --raw, extented. Use extented only, Raw deprecated
        conn:send(reset_reason)  
        conn:send("</h2>\r\n") 
        collectgarbage() 
        
        conn:send("0, power-on<br>\r\n")  
        conn:send("1, hardware watchdog reset<br>\r\n") 
        conn:send("2, exception reset<br>\r\n") 
        conn:send("3, software watchdog reset<br>\r\n") 
        conn:send("4, software restart<br>\r\n") 
        conn:send("5, wake from deep sleep<br>\r\n") 
        conn:send("6, external reset <br>\r\n") 

        conn:send("<h2>\r\n") 
        if(file.chdir("/SD0")) then             
            local remaining, used, total=file.fsinfo()
            conn:send("<b>SD:</b><br>")
            conn:send("Total : "..(total / 1024).." MB<br>")
            conn:send("Used : "..(used / 1024).." MB<br>")
            conn:send("Remain: "..(remaining / 1024).." MB<br><br>")          
            local l = file.list()
            for k,v in pairs(l) do
                conn:send("name:"..k.."  "..(v).." KB<br>\r\n")
            end    
        else
            conn:send("<b>SD mount FAIL</b><br>")                 
        end 
        conn:send("</h2>\r\n") 
         
        file.chdir("/FLASH")
        conn:send("<h2>\r\n") 
        local remaining, used, total=file.fsinfo()
        conn:send("File system info:<br>")
        conn:send("Total : "..(total / 1024).." KB<br>")
        conn:send("Used : "..(used / 1024).." KB<br>")
        conn:send("Remain: "..(remaining / 1024).." KB<br><br>")          
        local l = file.list()
        for k,v in pairs(l) do
            conn:send("name:"..k.."  "..(v / 1024).."KB<br>\r\n")
        end        
        conn:send("</h2>\r\n")    
        collectgarbage()      
        
        conn:send("<h2>HEAP FREE ") 
        conn:send(node.heap()/1024)
        conn:send(" KB</h2>\r\n") 
        
        conn:send("<h2>")
        conn:send('CRON DHT '..GDATA_DHT_t..' C  '..GDATA_DHT_h..'%') 
        conn:send("</h2>\r\n")    
         
        
        conn:send('<img src="https://acrobotic.com/media/wysiwyg/products/esp8266_devkit_horizontal-01.png">\r\n')     
        conn:send("</body></html>\r\n")          
        
        current_connect:on("sent", function(conn) 
            conn:close()    
            collectgarbage()  
        end)         
                    
        print(req_data)  
        collectgarbage()         
    end)   --inner      
end --function net_connect 

local my_server = net.createServer(net.TCP, 30) -- 30s timeout 
if my_server then     
    my_server:listen(80, net_connect)                  
end   
collectgarbage() 
