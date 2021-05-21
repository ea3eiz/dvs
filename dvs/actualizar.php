<?php 
session_start();
//Actualizar revision
exec("sudo rm -r Revisiones_VPS");
exec("git clone http://github.com/ea3eiz/Revisiones_VPS");
exec("sudo chmod 777 -R Revisiones_VPS");
exec("sudo chmod 777 -R /var/www/html");
exec("sudo sh /var/www/html/Revisiones_VPS/actualizar.sh");
header("Location:/dvs/actualizando_imagen.php");
?>