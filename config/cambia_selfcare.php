<?php 
session_start();







$selfcare=($_POST["selfcare"]);







exec("sudo sed -i '74c Password=$selfcare' /opt/MMDVM_Bridge/MMDVM_Bridge.ini");
exec("sudo sed -i '74c Password=$selfcare' /opt/MMDVM_Bridge/brandmeister_esp.ini");

header("Location:/dvs/panel_configuracion.php");	


?>