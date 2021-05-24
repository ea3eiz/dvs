<?php 
session_start();
$id=($_POST["id"]);

exec("sudo sed -i '3c Id=$id' /opt/MMDVM_Bridge/MMDVM_Bridge_PLUS.ini");

header("Location:/dvs/sistema_plus.php");	

?>