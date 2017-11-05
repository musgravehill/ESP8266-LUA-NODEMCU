

module_wifi = require('module_wifi')
local function wifi_onConnectOk_callback()
    print("ip now", wifi.sta.getip())
    module_wifi= nil     
end
module_wifi.init(wifi_onConnectOk_callback)    

