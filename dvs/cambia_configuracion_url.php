<?php 
session_start();
$url=($_POST["url"]);

exec("sudo sed -i '16c URL=$url' /opt/MMDVM_Bridge/MMDVM_Bridge_BM.ini");
exec("sudo sed -i '16c URL=$url' /opt/MMDVM_Bridge/MMDVM_Bridge_PLUS.ini");
exec("sudo sed -i '16c URL=$url' /opt/MMDVM_Bridge/MMDVM_Bridge_ESPECIAL.ini");

header("Location:/dvs/panel_configuracion.php");	

?>