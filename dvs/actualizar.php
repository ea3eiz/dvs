<?php 
session_start();
//Actualizar//

 
exec("cd /var/www/html/;git pull");

header("../index_dvswitch_buster.php");

?>