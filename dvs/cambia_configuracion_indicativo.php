<?php 
session_start();
$indicativo=strtoupper($_POST["indicativo"]);
$_SESSION["indicativo"]=$indicativo;

exec("sudo sed -i '2c Callsign=$indicativo' /opt/MMDVM_Bridge/MMDVM_Bridge.ini");
exec("sudo sed -i '2c Callsign=$indicativo' /opt/MMDVM_Bridge/brandmeister_esp.ini");
exec("sudo sed -i '2c Callsign=$indicativo' /opt/MMDVM_Bridge/dmrplus.ini");
exec("sudo sed -i '2c Callsign=$indicativo' /opt/MMDVM_Bridge/especial.ini");
exec("sudo sed -i '2c Callsign=$indicativo' /opt/NXDNGateway.ini");
exec("sudo sed -i '2c gatewayCallsign=$indicativo' /etc/ircddbgateway");
exec("sudo sed -i '95c ircddbUsername=$indicativo' /etc/ircddbgateway");
exec("sudo sed -i '117c dplusLogin=$indicativo' /etc/ircddbgateway");

exec("sudo sed -i '2c Callsign=$indicativo' /opt/YSFClients/YSFGateway/YSFGateway.ini");
exec("sudo sed -i '2c Callsign=$indicativo' /opt/MMDVM_CM/DMR2YSF/DMR2YSF.ini");
exec("sudo sed -i '2c Callsign=$indicativo' /opt/MMDVM_Bridge/MMDVM_Bridge_FCS.ini");

header("Location:/dvs/panel_configuracion.php");	

?>