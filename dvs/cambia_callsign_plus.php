<?php 
session_start();

$callsign=strtoupper($_POST["callsign"]);
exec("sudo sed -i '2c Callsign=$callsign' /opt/MMDVM_Bridge/MMDVM_Bridge_PLUS.ini");

header("Location:/dvs/sistema_plus.php");	

?>