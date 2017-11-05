do

table_blink_led_period = {     
   {4, 333}
}

table.insert(table_blink_led_period, {4,55})



function LED_blink(pin, period) 
    gpio.mode(pin, gpio.OUTPUT)
    local LED_isOn = 1
    function inner_blink()
        gpio.write(pin, LED_isOn)
        --print("Writе  to "..pin.." "..LED_isOn)
        LED_isOn = (LED_isOn == 0) and 1 or 0
    end
    function inner_makeTmr()
        tmr.create():alarm(period,tmr.ALARM_AUTO,inner_blink)
    end
    return inner_makeTmr()        
end

for _, v in pairs(table_blink_led_period) do
    LED_blink(v[1], v[2])
end




end