-- 74HC595.lua 
-- Written by John Longworth July 2016
-- ESP8266 connected to a 74HC595 by SPI


--Connect Nodemcu D7 (GPIO13) to 74HC595 Data (pin 14)
--Connect Nodemcu D5 (GPIO14) to 74HC595 Clock (pin 11)
--Connect Nodemcu D8 (GPIO15) to 74HC595 Latch (pin 12)

spi.setup(1, spi.MASTER, spi.CPOL_HIGH, spi.CPHA_LOW, 16, 1) --set divide to 1 or 4 (before is 0, I fount that 2, 8 will error led display)
local latch = 8
gpio.mode(latch, gpio.OUTPUT) 

function sendData(bytes2)          
    gpio.write(latch, gpio.LOW)      
    spi.send(1,bytes2)     
    gpio.write(latch, gpio.HIGH)      
end

tmr.alarm(0,100,1,function()    
   sendData(math.random(0,65535));          
end) 

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
