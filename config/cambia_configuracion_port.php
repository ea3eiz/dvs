<?php 
session_start();
$port=($_POST["port"]);
$_SESSION["port"]=$port;

exec("sudo sed -i '57c txPort = $port' /opt/Analog_Bridge/FCS.ini");
exec("sudo sed -i '57c txPort = $port' /opt/Analog_Bridge/Analog_Bridge.ini");
exec("sudo sed -i '57c txPort = $port' /opt/Analog_Bridge/dmr.ini");
exec("sudo sed -i '57c txPort = $port' /opt/Analog_Bridge/dstar.ini");
exec("sudo sed -i '57c txPort = $port' /opt/Analog_Bridge/especial.ini");
exec("sudo sed -i '57c txPort = $port' /opt/Analog_Bridge/nxdn.ini");
exec("sudo sed -i '57c txPort = $port' /opt/Analog_Bridge/ysf.ini");
exec("sudo sed -i '58c rxPort = $port' /opt/Analog_Bridge/FCS.ini");
exec("sudo sed -i '58c rxPort = $port' /opt/Analog_Bridge/Analog_Bridge.ini");
exec("sudo sed -i '58c rxPort = $port' /opt/Analog_Bridge/dmr.ini");
exec("sudo sed -i '58c rxPort = $port' /opt/Analog_Bridge/dstar.ini");
exec("sudo sed -i '58c rxPort = $port' /opt/Analog_Bridge/especial.ini");
exec("sudo sed -i '58c rxPort = $port' /opt/Analog_Bridge/nxdn.ini");
exec("sudo sed -i '58c rxPort = $port' /opt/Analog_Bridge/ysf.ini");


$port="#".$port;
// guardamos el valor para luego recuperarlo llamando al script cambia_puerto_usrp.sh
exec("sudo sed -i '3c $port' panel_configuracion.php");
exec("sudo sh cambia_puerto_usrp.sh");


header("Location:/dvs/panel_configuracion.php");	
//esto es el cambio
?>