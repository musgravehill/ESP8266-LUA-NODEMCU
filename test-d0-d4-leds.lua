lighton=0
 
gpio.mode(0,gpio.OUTPUT)
gpio.mode(4,gpio.OUTPUT)
tmr.alarm(1,200,1,function()
if lighton==0 then
lighton=1
gpio.write(0,gpio.HIGH)
gpio.write(4,gpio.LOW)
else
lighton=0
gpio.write(0,gpio.LOW)
gpio.write(4,gpio.HIGH)
end
end)
