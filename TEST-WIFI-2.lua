


 
wifi.setmode(wifi.STATION)
wifi.sta.config("Stelz", "13021987") 

wifi.eventmon.register(wifi.eventmon.STA_DISCONNECTED, function(T) 
 print("\n\tSTA - DISCONNECTED".."\n\tSSID: "..T.SSID.."\n\tBSSID: "..
 T.BSSID.."\n\treason: "..T.reason.."\n")
 end)
 

cont=1
tmr.alarm(1, 2000, 1, function()
   if wifi.sta.getip()==nil then
      print("Wait for IP "..cont.."--> "..wifi.sta.status())
      cont=cont+1
      if cont>20 then tmr.stop(1) end
   else
      print("New IP address is "..wifi.sta.getip())
      tmr.stop(1)
   end
end)