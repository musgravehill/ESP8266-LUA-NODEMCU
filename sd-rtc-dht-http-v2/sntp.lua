sntp.sync(nil, 
    function(sec, usec, server, info)
        print('SNTP sync', sec, usec, server)
        local tm = rtctime.epoch2cal(rtctime.get())
        print(string.format("%04d/%02d/%02d %02d:%02d:%02d", tm["year"], tm["mon"], tm["day"], tm["hour"], tm["min"], tm["sec"])) 
    end,
    function()
        print('SNTP failed!')
    end
)
collectgarbage()