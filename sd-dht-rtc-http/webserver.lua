
function net_connect(current_connect, data)   
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
        collectgarbage() 
        
        local tm = rtctime.epoch2cal(rtctime.get())
        conn:send("<h2>")
        conn:send(string.format("%04d-%02d-%02d %02d:%02d:%02d", tm["year"], tm["mon"], tm["day"], (tm["hour"]+3), tm["min"], tm["sec"]))
        conn:send("</h2>\r\n") 
        collectgarbage() 
        
        conn:send("<h2>node.bootreason ")
        _, reset_reason = node.bootreason() --raw, extented. Use extented only, Raw deprecated
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
        local remaining, used, total=file.fsinfo()
        conn:send("File system info:<br>")
        conn:send("Total : "..(total / 1024).." kBytes<br>")
        conn:send("Used : "..(used / 1024).." kBytes<br>")
        conn:send("Remain: "..(remaining / 1024).." kBytes<br><br>")          
        local l = file.list();
        for k,v in pairs(l) do
            conn:send("name:"..k.."  "..(v / 1024).." kBytes<br>\r\n")
        end        
        conn:send("</h2>\r\n")    
        collectgarbage()      
        
        conn:send("<h2>HEAP ") 
        conn:send(node.heap()/1024)
        conn:send(" KBYTES</h2>\r\n") 
        
        conn:send("<h2>")
        conn:send(string.format("DHT Temperature:%d.%03d;Humidity:%d.%03d\r\n",
            math.floor(DHT_t),
            DHT_t_dec,
            math.floor(DHT_h), 
            DHT_h_dec
            )
        )
        conn:send("</h2>\r\n")    
        collectgarbage()          
        
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
  


