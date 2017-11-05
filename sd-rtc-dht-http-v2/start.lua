
if adc.force_init_mode(adc.INIT_VDD33) then
  node.restart()
  return 
end 

spi.setup(1, spi.MASTER, spi.CPOL_LOW, spi.CPHA_LOW, 8, 8) 
local vol = file.mount("/SD0", 8)   
if not vol then    
    vol = file.mount("/SD0", 8)
    if not vol then
        print("SD mount failed")--error("mount failed")
    end     
end                      
collectgarbage()

GDATA_DHT_t = 1
GDATA_DHT_h = 1 

module_wifi = require('module_wifi')
local function wifi_onConnectOk_callback()
    print("ip now", wifi.sta.getip())
    module_wifi= nil    
    
    dofile('sntp.lua')
end
module_wifi.init(wifi_onConnectOk_callback)    


dofile('cron.lua')
dofile('webserver.lua')

