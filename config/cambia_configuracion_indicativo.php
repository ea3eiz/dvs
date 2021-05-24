<?php 
session_start();
$indicativo=strtoupper($_POST["indicativo"]);
$_SESSION["indicativo"]=$indicativo;

exec("sudo sed -i '2c Callsign=$indicativo' /opt/MMDVM_Bridge/MMDVM_Bridge_BM.ini");
exec("sudo sed -i '2c Callsign=$indicativo' /opt/MMDVM_Bridge/MMDVM_Bridge_PLUS.ini");
exec("sudo sed -i '2c Callsign=$indicativo' /opt/MMDVM_Bridge/MMDVM_Bridge_ESPECIAL.ini");

header("Location:/dvs/config/editor_general.php");	


?>