local buf = "HTTP/1.0 200 OK\r\n"  
buf = buf.."Server: nodemcu-net\r\n"  
buf = buf..'Content-Type: application/json\r\n' 
buf = buf..'\r\n'  --body start 


local _, reset_reason = node.bootreason()

local datas = {
    ['time'] = rtctime.get(), 
    ['reset_reason']=reset_reason,
    ['heapKB']=(node.heap()/1024)
}
datas['SD']= {}
datas['FLASH']= {}

if(file.chdir('/SD0')) then      
    datas['SD']['is_ok'] =1                 
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
   datas['SD']['is_ok'] =0               
end  
     
local ok, json = pcall(sjson.encode, datas) --pcall for big table
if ok then
   buf = buf..json
else
   buf = buf..'{"error":1}' 
end
      
       
 

    
if(file.chdir('/FLASH')) then              
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
 

        
   

return buf
