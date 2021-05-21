<?php 
session_start();
$Latitude=($_POST["Latitude"]);
$_SESSION["Latitude"]=$Latitude;

exec("sudo sed -i '11c Latitude=$Latitude' /opt/MMDVM_Bridge/MMDVM_Bridge.ini");
exec("sudo sed -i '11c Latitude=$Latitude' /opt/MMDVM_Bridge/brandmeister_esp.ini");
exec("sudo sed -i '11c Latitude=$Latitude' /opt/MMDVM_Bridge/dmrplus.ini");
exec("sudo sed -i '11c Latitude=$Latitude' /opt/MMDVM_Bridge/especial.ini");

header("Location:/dvs/panel_configuracion.php");	

?>