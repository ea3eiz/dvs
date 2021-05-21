<?php 
session_start();
//Borra todos los logs

exec("sudo rm /var/log/*.log");
exec("sudo rm /opt/NXDNClients/NXDNGateway/*.log");

exec("sudo systemctl restart analog_bridge.service");
exec("sudo systemctl restart ircddbgateway.service");
exec("sudo systemctl restart md380-emu.service");
exec("sudo systemctl restart mmdvm_bridge.service");
exec("sudo systemctl restart nxdngateway.service");

header("Location:/dvs/panel_configuracion.php");
?>