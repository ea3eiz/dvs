<?php 
session_start();
//Pasar a Conexión especial

exec("sudo cp /opt/MMDVM_Bridge/especial.ini /opt/MMDVM_Bridge/MMDVM_Bridge.ini");
exec("sudo cp /opt/Analog_Bridge/especial.ini /opt/Analog_Bridge/Analog_Bridge.ini");

exec("sudo systemctl restart analog_bridge.service");
exec("sudo systemctl restart ircddbgateway.service");
exec("sudo systemctl restart md380-emu.service");
exec("sudo systemctl restart mmdvm_bridge.service");
exec("sudo systemctl restart nxdngateway.service");

header("Location:/dvs/sistema_especial.php");
?>