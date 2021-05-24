<?php 
session_start();
$latitude=($_POST["latitude"]);

exec("sudo sed -i '11c Latitude=$latitude' /opt/MMDVM_Bridge/MMDVM_Bridge_BM.ini");
exec("sudo sed -i '11c Latitude=$latitude' /opt/MMDVM_Bridge/MMDVM_Bridge_PLUS.ini");
exec("sudo sed -i '11c Latitude=$latitude' /opt/MMDVM_Bridge/MMDVM_Bridge_ESPECIAL.ini");

header("Location:/dvs/editor_general.php");		


?>