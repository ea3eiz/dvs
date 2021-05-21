<?php 
session_start();
//Pasar a FCS |

$sala_fcs=strtoupper($_POST["sala_fcs"]);

exec("sudo sed -i '40c txTg = $sala_fcs' /opt/Analog_Bridge/FCS.ini");
exec("sudo sed -i '42c Startup=$sala_fcs' /opt/YSFClients/YSFGateway/YSFGateway.ini");


header("Location:/dvs/panel_configuracion.php");	
?>