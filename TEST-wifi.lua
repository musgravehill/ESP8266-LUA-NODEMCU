
wifi.setmode(wifi.STATION)
station_cfg={}
station_cfg.ssid="error"
station_cfg.pwd="13021987"
wifi.sta.config(station_cfg) 
wifi.sta.connect()




wifi.eventmon.register(wifi.eventmon.STA_DISCONNECTED, function(T) 
 print("\n\tSTA - DISCONNECTED".."\n\tSSID: "..T.SSID.."\n\tBSSID: "..
 T.BSSID.."\n\treason: "..T.reason.."\n")
end)
 
tmr.alarm(1, 1000, 1, function()
    if wifi.sta.getip() == nil then
        print("IP unavaiable, Waiting...")
    else
        tmr.stop(1)
        print("ESP8266 mode is: " .. wifi.getmode())
        print("The module MAC address is: " .. wifi.ap.getmac())
        print("Config done, IP is "..wifi.sta.getip())
        dofile ("domoticz.lua")
    end
end)
node.flashsize()
