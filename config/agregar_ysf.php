<?php 
session_start();
$nombre_sala="ES-ADER";
$sala="aderdigital.ddns.net";


# guardamos el valor para luego recuperarlo llamando al script agrgar_ysf.sh
exec("sudo sed -i '1c $nombre_sala' /home/pi/.local/datos_dvswitch");
exec("sudo sed -i '2c $sala' /home/pi/.local/datos_dvswitch");
exec("cd /var/www/html/dvs; sudo sh agregar_ysf.sh");



/* exec("sudo sed '13a\{ "disp": "$nombre_sala" , "tg": "$sala :42000"},' /opt/Analog_Reflector/arRoot/modes/YSF_node_list.json > YSF_node_list.json");
 */?>