local package_loaded_name = ... 
local MODULE_wifi = {}

wifi.setmode(wifi.STATION)
station_cfg={}
station_cfg.ssid="error"
station_cfg.pwd="13021987"
wifi.sta.config(station_cfg)      
station_cfg=nil  

function MODULE_wifi.init(onConnectOk_callback)   --not local, cause use it outer  
    local function localFunc_onConnect()
        if onConnectOk_callback then onConnectOk_callback() end
        package.loaded[package_loaded_name] = nil           
    end

    local ip = wifi.sta.getip()

    if not ip then
        tmr.create():alarm(5000, 1, function(t)            
            ip = wifi.sta.getip()                     
            if ip then                
                tmr.stop(t)                
                tmr.unregister(t)                
                t = nil
                localFunc_onConnect() 
            end
        end)        
        wifi.sta.connect()
    else
        localFunc_onConnect()
    end    
end

function MODULE_wifi.reconnect(onReConnectOk_callback)   --not local, cause use it outer  
    local function localFunc_onReConnect()
        if onReConnectOk_callback then onReConnectOk_callback() end
        package.loaded[package_loaded_name] = nil           
    end    
    wifi.sta.connect() 
    localFunc_onReConnect()    
end

return MODULE_wifi
