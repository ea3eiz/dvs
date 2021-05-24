<?php 
session_start();
//Pasar a FCS

exec("sudo cp /opt/Analog_Bridge/FCS.ini /opt/Analog_Bridge/Analog_Bridge.ini");
exec("sudo cp /opt/MMDVM_Bridge/MMDVM_Bridge_FCS.ini /opt/MMDVM_Bridge/MMDVM_Bridge.ini");

exec("sudo systemctl restart ysfgateway.service");
exec("sudo systemctl restart dmr2ysf.service");
exec("sudo systemctl restart analog_bridge.service");
exec("sudo systemctl restart md380-emu.service");
exec("sudo systemctl restart mmdvm_bridge.service");

header("Location:/dvs/sistema_FCS.php");

?>