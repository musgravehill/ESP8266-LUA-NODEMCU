do
wifi.setmode(wifi.STATION)
station_cfg={}
station_cfg.ssid="error"
station_cfg.pwd="13021987"
wifi.sta.config(station_cfg) 
wifi.sta.connect()
station_cfg=nil 



end