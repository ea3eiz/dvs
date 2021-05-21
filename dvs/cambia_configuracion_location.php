<?php 
session_start();
$location=($_POST["location"]);
$_SESSION["location"]=$location;

exec("sudo sed -i '14c Location=$location' /opt/MMDVM_Bridge/MMDVM_Bridge.ini");
exec("sudo sed -i '14c Location=$location' /opt/MMDVM_Bridge/brandmeister_esp.ini");
exec("sudo sed -i '14c Location=$location' /opt/MMDVM_Bridge/dmrplus.ini");
exec("sudo sed -i '14c Location=$location' /opt/MMDVM_Bridge/especial.ini");
exec("sudo sed -i '17c Name=$location' /opt/NXDNGateway.ini");

header("Location:/dvs/panel_configuracion.php");	

?>