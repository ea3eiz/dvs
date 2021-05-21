<?php 
session_start();
$Longitude=($_POST["Longitude"]);
$_SESSION["Longitude"]=$Longitude;

exec("sudo sed -i '12c Longitude=$Longitude' /opt/MMDVM_Bridge/MMDVM_Bridge.ini");
exec("sudo sed -i '12c Longitude=$Longitude' /opt/MMDVM_Bridge/brandmeister_esp.ini");
exec("sudo sed -i '12c Longitude=$Longitude' /opt/MMDVM_Bridge/dmrplus.ini");
exec("sudo sed -i '12c Longitude=$Longitude' /opt/MMDVM_Bridge/especial.ini");

header("Location:/dvs/panel_configuracion.php");	

?>