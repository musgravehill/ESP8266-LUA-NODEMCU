local function net_connect(current_connect, data)   
    current_connect:on ("receive", function (conn, req_data)  
        --print(req_data) 
        local _, _, method, path, vars = string.find(req_data, "([A-Z]+) (.+)?(.+) HTTP");
        if(method == nil)then
            _, _, method, path = string.find(req_data, "([A-Z]+) (.+) HTTP");
        end
        --[[
        local _GET = {}
        if (vars ~= nil)then
            for k, v in string.gmatch(vars, "(%w+)=(%w+)&*") do
                _GET[k] = v
            end
        end
        local _, _, fn, fext = string.find(path, "/(.*)[.](.*)")  -- log-ymd2917.txt => log-ymd2917 txt
        
        ]]----print('method, path, params =\r\n')
        --print(method)
        --print(path)
        --print(vars)

        local tm = rtctime.epoch2cal(rtctime.get())     
        if file.open('/SD0/websrvr-'..tm['day']..'-'..tm['mon']..'-'..tm['year']..'.txt', 'a+') then --open/ and create it                  
            file.write(string.format('%04d-%02d-%02d %02d:%02d:%02d', tm["year"], tm["mon"], tm["day"], (tm["hour"]+3), tm["min"], tm["sec"])..'\r\n')
            file.write(req_data..'/r/n'..'/r/n') 
            file.close()                                
        end      
        tm = nil  
        collectgarbage()          

        if(path == '/data.html') then 
           local answer = require('web_data_html')  
           conn:send(answer)
           package.loaded['web_data_html'] = nil  
           answer=nil
        elseif(path == '/data.json') then   
            local answer = require('web_data_json')  
            conn:send(answer)  
            package.loaded['web_data_json'] = nil  
            answer=nil                                       
        else 
            conn:close()  
        end               
        
        current_connect:on("sent", function(conn) 
            conn:close()        
            collectgarbage()      
        end)        
        collectgarbage()  
              
    end)   --inner      
end --function net_connect 

local my_server = net.createServer(net.TCP, 10) -- 30s timeout 
if my_server then     
    my_server:listen(80, net_connect)    
    collectgarbage()               
end    
