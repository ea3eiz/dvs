<?php 
session_start();
$reflector_dstar=strtoupper($_POST["reflector_dstar"]);
$_SESSION["reflector_dstar"]=$reflector_dstar;

exec("sudo sed -i '18c reflector1=$reflector_dstar' /etc/ircddbgateway");

header("Location:/dvs/panel_configuracion.php");	

?>