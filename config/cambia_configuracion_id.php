<?php 
session_start();
$id=($_POST["id"]);//id 9 cifras

$id7cifras = substr("$id", 0, 7);

exec("sudo sed -i '3c Id=$id' /opt/MMDVM_Bridge/MMDVM_Bridge_BM.ini");
exec("sudo sed -i '3c Id=$id' /opt/MMDVM_Bridge/MMDVM_Bridge_PLUS.ini");
exec("sudo sed -i '3c Id=$id' /opt/MMDVM_Bridge/MMDVM_Bridge_ESPECIAL.ini");
exec("sudo sed -i '39c gatewayDmrId = $id7cifras' /opt/Analog_Bridge/Analog_Bridge.ini");
exec("sudo sed -i '40c repeaterID = $id' /opt/Analog_Bridge/Analog_Bridge.ini");

header("Location:/dvs/config/editor_general.php");	

?>