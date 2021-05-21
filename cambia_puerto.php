<?php 
//Cambiar puerto
$puerto =($_POST['puerto']);

$usuario = strip_tags($_POST['user']);
exec("sudo sed -i '55c txPort = $puerto' /opt/Analog_Bridge/Analog_Bridge.ini");
exec("sudo sed -i '56c rxPort = $puerto' /opt/Analog_Bridge/Analog_Bridge.ini");

//RESTAURAR LOS SERVICIOS
exec("sudo systemctl restart analog_bridge.service");
exec("sudo systemctl restart md380-emu.service");
exec("sudo systemctl restart mmdvm_bridge.service");
exec("sudo systemctl restart nxdngateway.service");


header("Location: index.php");
?>
