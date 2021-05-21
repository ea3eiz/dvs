<?php 
session_start();
$id=($_POST["id"]);
$_SESSION["id"]=$id;

$id_nxdn = substr("$id", 2, 5);

exec("sudo sed -i '59c Id = $id_nxdn' /opt/MMDVM_Bridge/MMDVM_Bridge.ini");
exec("sudo sed -i '59c Id = $id_nxdn' /opt/MMDVM_Bridge/brandmeister_esp.ini");
exec("sudo sed -i '59c Id = $id_nxdn' /opt/MMDVM_Bridge/dmrplus.ini");
exec("sudo sed -i '59c Id = $id_nxdn' /opt/MMDVM_Bridge/especial.ini");

exec("sudo sed -i '41c NXDNFallbackID  = $id_nxdn' /opt/MMDVM_Bridge/DVSwitch.ini");

exec("sudo sed -i '30c FallbackID = $id' /opt/MMDVM_Bridge/DVSwitch.ini");
exec("sudo sed -i '40c FallbackID = $id' /opt/MMDVM_Bridge/DVSwitch.ini");
exec("sudo sed -i '38c gatewayDmrId = $id' /opt/Analog_Bridge/Analog_Bridge.ini");
exec("sudo sed -i '38c gatewayDmrId = $id' /opt/Analog_Bridge/dmr.ini");
exec("sudo sed -i '38c gatewayDmrId = $id' /opt/Analog_Bridge/dstar.ini");
exec("sudo sed -i '38c gatewayDmrId = $id' /opt/Analog_Bridge/especial.ini");
exec("sudo sed -i '38c gatewayDmrId = $id' /opt/Analog_Bridge/nxdn.ini");
exec("sudo sed -i '38c gatewayDmrId = $id' /opt/Analog_Bridge/ysf.ini");
exec("sudo sed -i '43c ;; FallbackID = $id' /opt/Analog_Bridge/ysf.ini");

exec("sudo sed -i '5c Id=$id' /opt/YSFClients/YSFGateway/YSFGateway.ini");
exec("sudo sed -i '12c Id=$id' /opt/MMDVM_CM/DMR2YSF/DMR2YSF.ini");
exec("sudo sed -i '38c gatewayDmrId = $id' /opt/Analog_Bridge/FCS.ini");

header("Location:/dvs/panel_configuracion.php");	

?>