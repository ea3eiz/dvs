<?php 
session_start();
$location=($_POST["location"]);

exec("sudo sed -i '14c Location=$location' /opt/MMDVM_Bridge/MMDVM_Bridge_BM.ini");
exec("sudo sed -i '14c Location=$location' /opt/MMDVM_Bridge/MMDVM_Bridge_PLUS.ini");
exec("sudo sed -i '14c Location=$location' /opt/MMDVM_Bridge/MMDVM_Bridge_ESPECIAL.ini");

header("Location:/dvs/panel_configuracion.php");	

?>