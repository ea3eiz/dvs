<?php 
session_start();
$longitude=($_POST["longitude"]);

exec("sudo sed -i '12c Longitude=$longitude' /opt/MMDVM_Bridge/MMDVM_Bridge_BM.ini");
exec("sudo sed -i '12c Longitude=$longitude' /opt/MMDVM_Bridge/MMDVM_Bridge_PLUS.ini");
exec("sudo sed -i '12c Longitude=$longitude' /opt/MMDVM_Bridge/MMDVM_Bridge_ESPECIAL.ini");

header("Location:/dvs/editor_general.php");	

?>