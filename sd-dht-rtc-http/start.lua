 
if adc.force_init_mode(adc.INIT_VDD33) then
  node.restart()
  return 
end

spi.setup(1, spi.MASTER, spi.CPOL_LOW, spi.CPHA_LOW, 8, 8)
vol = file.mount("/SD0", 8)   
if not vol then    
    vol = file.mount("/SD0", 8)
    if not vol then
        print("SD mount failed")--error("mount failed")
    end
end                      
collectgarbage()

wifi.setmode(wifi.STATION)
station_cfg={}
station_cfg.ssid="error"
station_cfg.pwd="13021987"
wifi.sta.config(station_cfg) 
wifi.sta.connect()
collectgarbage()

tmr.alarm(1, 1000, 1, function()
    if wifi.sta.getip() == nil then 
        print("WIFI connecting...")
    else
        tmr.stop(1)
        print("ESP8266 wifi.getmode=" .. wifi.getmode())
        print("MAC " .. wifi.ap.getmac())
        print("IP "..wifi.sta.getip())  
     end
end)   
collectgarbage()   
       
my_server = net.createServer(net.TCP, 30) -- 30s timeout 
if my_server then 
    dofile("webserver.lua") --webserver.lc
    my_server:listen(80, net_connect)                 
end        
collectgarbage()
 
sntp.sync(nil, 
    function(sec, usec, server, info)
        print('SNTP sync', sec, usec, server)
        tm = rtctime.epoch2cal(rtctime.get())
        print(string.format("%04d/%02d/%02d %02d:%02d:%02d", tm["year"], tm["mon"], tm["day"], tm["hour"], tm["min"], tm["sec"])) 
    end,
    function()
        print('SNTP failed!')
    end
)
collectgarbage()

dofile("cron.lua") -- cron.lc
collectgarbage()

