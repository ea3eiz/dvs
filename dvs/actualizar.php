<?php 
session_start();
//Actualizar//

 
exec("cd /var/www/html/;sudo git pull");

header("../index_dvswitch_buster.php");

?>