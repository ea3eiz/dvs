<?php 
session_start();
$nombre_sala="ES-ADER";
$sala="aderdigital.ddns.net:42000";

# guardamos el valor para luego recuperarlo llamando al script agrgar_ysf.sh
exec("sudo sed -i '1c $nombre_sala' /home/pi/.local/datos_dvswitch");
exec("sudo sed -i '2c $sala' /home/pi/.local/datos_dvswitch");
exec("sudo sed '13a\ { \"disp\": $nombre_sala, \"tg\": $sala },' /home/pi/info.ini > /home/pi/info1.ini");

 ?>