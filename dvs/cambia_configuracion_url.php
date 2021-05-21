<?php 
session_start();
$url=($_POST["url"]);
$_SESSION["url"]=$url;

exec("sudo sed -i '16c URL=$url' /opt/MMDVM_Bridge/MMDVM_Bridge.ini");
exec("sudo sed -i '16c URL=$url' /opt/MMDVM_Bridge/brandmeister_esp.ini");
exec("sudo sed -i '16c URL=$url' /opt/MMDVM_Bridge/dmrplus.ini");
exec("sudo sed -i '16c URL=$url' /opt/MMDVM_Bridge/especial.ini");

header("Location:/dvs/panel_configuracion.php");	

?>