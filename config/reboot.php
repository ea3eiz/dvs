<?php 
session_start();
//Borra todos los logs

exec("sudo reboot");


header("Location:/dvs/panel_configuracion.php");
?>