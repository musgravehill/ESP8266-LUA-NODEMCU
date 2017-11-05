do

function func_callback(somedata)
    print('Data in callback: '.. somedata)
end

function func_some(param_data,param_callback)
    local data = param_data + 100
    if param_callback then param_callback(data) end
end

func_some(23, func_callback)



end