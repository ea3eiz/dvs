<?php 
session_start();
$id2=($_POST["id2"]);
$_SESSION["id2"]=$id2;

exec("sudo sed -i '3c Id=$id2' /opt/MMDVM_Bridge/MMDVM_Bridge.ini");
exec("sudo sed -i '3c Id=$id2' /opt/MMDVM_Bridge/brandmeister_esp.ini");
exec("sudo sed -i '3c Id=$id2' /opt/MMDVM_Bridge/dmrplus.ini");
exec("sudo sed -i '3c Id=$id2' /opt/MMDVM_Bridge/especial.ini");

exec("sudo sed -i '39c repeaterID = $id2' /opt/Analog_Bridge/Analog_Bridge.ini");
exec("sudo sed -i '39c repeaterID = $id2' /opt/Analog_Bridge/dmr.ini");
exec("sudo sed -i '39c repeaterID = $id2' /opt/Analog_Bridge/dstar.ini");
exec("sudo sed -i '39c repeaterID = $id2' /opt/Analog_Bridge/especial.ini");
exec("sudo sed -i '39c repeaterID = $id2' /opt/Analog_Bridge/nxdn.ini");
exec("sudo sed -i '39c repeaterID = $id2' /opt/Analog_Bridge/ysf.ini");

exec("sudo sed -i '3c Id=$id2' /opt/MMDVM_Bridge/MMDVM_Bridge_FCS.ini");
exec("sudo sed -i '39c repeaterID = $id2' /opt/Analog_Bridge/FCS.ini");

header("Location:/dvs/panel_configuracion.php");	

?>