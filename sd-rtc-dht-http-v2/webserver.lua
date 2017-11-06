local function net_connect(current_connect, data)   
    current_connect:on ("receive", function (conn, req_data)  
        print(req_data) 
        local _, _, method, path, vars = string.find(req_data, "([A-Z]+) (.+)?(.+) HTTP");
        if(method == nil)then
            _, _, method, path = string.find(req_data, "([A-Z]+) (.+) HTTP");
        end
        local _GET = {}
        if (vars ~= nil)then
            for k, v in string.gmatch(vars, "(%w+)=(%w+)&*") do
                _GET[k] = v
            end
        end
        print('method, path, params =\r\n')
        print(method)
        print(path)
        print(vars)

        --SD.log request and IP

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
        end)         
              
    end)   --inner      
end --function net_connect 

local my_server = net.createServer(net.TCP, 10) -- 30s timeout 
if my_server then     
    my_server:listen(80, net_connect)                  
end    
