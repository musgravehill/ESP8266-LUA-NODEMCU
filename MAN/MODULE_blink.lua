do//nado li? bez etogo rabotaet

-- локальная переменная package_loaded_name таким образом ловит свое собственное название
-- название модуля для дальнейшей выгрузки
local package_loaded_name = ... 

local MODULE_blink = {}
MODULE_blink.pinsintervals = {}

function MODULE_blink.makeblinkandtimer(pin, interval)
    gpio.mode(pin, gpio.OUTPUT)
    local ligth = 1
    
    local function blink()
        gpio.write(pin, ligth)
        --print("Writе  to "..pin.." "..ligth)
        ligth = (ligth == 0) and 1 or 0
    end
    
    local function maketimer()
        tmr.create():alarm(interval, tmr.ALARM_AUTO, blink)
    end
    
    return maketimer()
end

function MODULE_blink.make(t)
    MODULE_blink.pinsintervals = t
    t = nil --free 500 bits RAM
    for _, v in pairs(MODULE_blink.pinsintervals) do
        MODULE_blink.makeblinkandtimer(v[1], v[2])
    end
    package.loaded[package_loaded_name]=nil --free 600 bits RAM 
end

return MODULE_blink 

end//nado li? bez etogo rabotaet
