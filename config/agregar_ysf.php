<?php 
session_start();
$nombre_sala="ES-ADER";
$sala="aderdigital.ddns.net";
exec("sudo sed '13a\{ "disp": "$nombre_sala" , "tg": "$sala :42000"},' /opt/Analog_Reflector/arRoot/modes/YSF_node_list.json > YSF_node_list.json");
?>