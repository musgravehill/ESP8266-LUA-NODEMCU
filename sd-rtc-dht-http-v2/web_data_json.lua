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
if(file.chdir('/SD0')) then      
    datas['SD']['is_ok'] =1                 
    local remaining, used, total=file.fsinfo()    
    datas['SD']['Total,MB'] =  total / 1024 
    datas['SD']['Used,MB'] =   used / 1024 
    datas['SD']['Remain,MB'] = remaining / 1024 
    local l = file.list()
    datas['SD']['files']={} 
    for k,v in pairs(l) do        
        table.insert(datas['SD']['files'], { ['name']=k, ['size,KB']=(v/1024) })
    end    
else
   datas['SD']['is_ok'] =0               
end   

datas['FLASH']= {}    
if(file.chdir('/FLASH')) then              
	datas['FLASH']['is_ok'] =1                 
    local remaining, used, total=file.fsinfo()    
    datas['FLASH']['Total,KB'] =  total / 1024 
    datas['FLASH']['Used,KB'] =   used / 1024 
    datas['FLASH']['Remain,KB'] = remaining / 1024 
    local l = file.list()
    datas['FLASH']['files']={} 
    for k,v in pairs(l) do        
        table.insert(datas['FLASH']['files'], { ['name']=k, ['size,KB']=(v/1024) })
    end      
else
	datas['FLASH']['is_ok'] =0                 
end    

local ok, json = pcall(sjson.encode, datas) --pcall for big table
if ok then
   buf = buf..json
else
   buf = buf..'{"error":1}' 
end        
   

return buf
