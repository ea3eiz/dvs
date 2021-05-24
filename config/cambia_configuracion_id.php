<?php 
session_start();
$id=($_POST["id"]);

exec("sudo sed -i '3c Id=$id' /opt/MMDVM_Bridge/MMDVM_Bridge_BM.ini");
exec("sudo sed -i '3c Id=$id' /opt/MMDVM_Bridge/MMDVM_Bridge_PLUS.ini");
exec("sudo sed -i '3c Id=$id' /opt/MMDVM_Bridge/MMDVM_Bridge_ESPECIAL.ini");

header("Location:/dvs/config/editor_general.php");	

?>