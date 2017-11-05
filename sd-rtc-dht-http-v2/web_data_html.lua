local buf = "HTTP/1.0 200 OK\r\n"  
buf = buf.."Server: nodemcu-net\r\n"  
buf = buf..'Content-Type: text/html\r\n'
buf = buf..'\r\n'  --body start

buf = buf..'<!DOCTYPE html><html><head>\r\n' 
buf = buf..'<title>ESP8266 server</title>\r\n' 
buf = buf..'<link rel="icon" href="https://cdn3.iconfinder.com/data/icons/black-easy/256/538407-wifi_256x256.png">\r\n') 
buf = buf..'</head><body>\r\n'

buf = buf..'<h1>ESP8266 server '         
local tm = rtctime.epoch2cal(rtctime.get())         
buf = buf..string.format('%04d-%02d-%02d %02d:%02d:%02d', tm['year'], tm['mon'], tm['day'], (tm['hour']+3), tm['min'], tm['sec']))
buf = buf..'</h1>\r\n'   

buf = buf..'<div style="background-color: #ffd2c9; padding: 4px;">' 
buf = buf..'<h2>Показания</h2>'
buf = buf..''..GDATA_DHT_t..' C<br>  '..GDATA_DHT_h..'%'         
buf = buf..'</div>'

buf = buf..'<div style="background-color: #f8c9ff; padding: 4px;">'
buf = buf..'<h2>node.bootreason '
local _, reset_reason = node.bootreason() --raw, extented. Use extented only, Raw deprecated
buf = buf..reset_reason
buf = buf..'</h2>\r\n'         
buf = buf..'0, power-on<br>\r\n'  
buf = buf..'1, hardware watchdog reset<br>\r\n' 
buf = buf..'2, exception reset<br>\r\n' 
buf = buf..'3, software watchdog reset<br>\r\n' 
buf = buf..'4, software restart<br>\r\n' 
buf = buf..'5, wake from deep sleep<br>\r\n' 
buf = buf..'6, external reset <br>\r\n' 
buf = buf..'</div>'

buf = buf..'<div style="background-color: #c9d0ff; padding: 4px;">'      
if(file.chdir('/SD0') then             
	local remaining, used, total=file.fsinfo()
	buf = buf..'<h2>SD</h2>'  
	buf = buf..'<b>Total</b> '..(total / 1024)..' MB<br>'
	buf = buf..'<b>Used</b> '..(used / 1024)..' MB<br>'
	buf = buf..'<b>Remain</b> '..(remaining / 1024)..' MB<br><br>'          
	local l = file.list()
	for k,v in pairs(l) do
		buf = buf..'name:'..k..'  '..(v)..' KB<br>\r\n' 
	end    
else
	buf = buf..'<h2>SD mount FAIL</h2>'                 
end         
buf = buf..'</div>'

buf = buf..'<div style="background-color: #c9ffdc; padding: 4px;">'     
if(file.chdir('/FLASH') then              
	local remaining, used, total=file.fsinfo()    
	buf = buf..'<h2>FLASH</h2>'          
	buf = buf..'<b>Total</b> '..(total / 1024)..' KB<br>'
	buf = buf..'<b>Used</b> '..(used / 1024)..' KB<br>'
	buf = buf..'<b>Remain</b> '..(remaining / 1024)..' KB<br><br>'          
	local l = file.list()
	for k,v in pairs(l) do
	buf = buf..'name:'..k..'  '..(v / 1024)..' KB<br>\r\n' 
	end    
else
	buf = buf..'<h2>FLASH mount FAIL</h2>'                 
end         
buf = buf..'</div>')     

buf = buf..'<div style="background-color: #fffec9; padding: 4px;">'     
buf = buf..'<h2>HEAP FREE ' 
buf = buf..(node.heap()/1024)
buf = buf..' KB</h2>\r\n' 
buf = buf..'</div>'        


buf = buf..'<img src="https://acrobotic.com/media/wysiwyg/products/esp8266_devkit_horizontal-01.png">\r\n'    
buf = buf..'</body></html>\r\n'  

return buf
