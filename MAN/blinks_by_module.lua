do
pinsintervals = {
    {4, 1000},
    {4, 1330}
}
my_MODULE_blink = require('MODULE_blink')
my_MODULE_blink.make(pinsintervals) 
my_MODULE_blink= nil --free 600 bits RAM 
pinsintervals=nil --free 600 bits RAM
end




-- nil =>RAM free
-- 1. очисти конфиг-переменную pinsintervals
--2. очисти переменную my_MODULE_blink, в которую сохранил модуль
--3 очисти package.loaded["MODULE_blink"]=nil - я это сделал в самом МОДУЛЕ
