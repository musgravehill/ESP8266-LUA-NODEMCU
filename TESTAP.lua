print("ESP8266 Server")

wifi.setmode(wifi.STATIONAP);

wifi.ap.config({ssid="test",pwd="password"});

print("Server IP Address:",wifi.ap.getip())

 