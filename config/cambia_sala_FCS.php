<?php 
session_start();
//Pasar a FCS |

$fcs=strtoupper($_POST["fcs"]);
//$TG="9;";
//$fcs=$TG.$fcs;
exec("sudo sed -i '5c 9;$fcs' /opt/MMDVM_CM/DMR2YSF/TG-YSFList.txt");

header("Location:/dvs/config/editor_general.php");	
?>