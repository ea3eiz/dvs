<?php 
session_start();
$frecuencia=($_POST["frecuencia"]);

exec("sudo sed -i '8c RXFrequency=$frecuencia' /opt/MMDVM_Bridge/MMDVM_Bridge_BM.ini");
exec("sudo sed -i '8c RXFrequency=$frecuencia' /opt/MMDVM_Bridge/MMDVM_Bridge_PLUS.ini");
exec("sudo sed -i '8c RXFrequency=$frecuencia' /opt/MMDVM_Bridge/MMDVM_Bridge_ESPECIAL.ini");

exec("sudo sed -i '9c TXFrequency=$frecuencia' /opt/MMDVM_Bridge/MMDVM_Bridge_BM.ini");
exec("sudo sed -i '9c TXFrequency=$frecuencia' /opt/MMDVM_Bridge/MMDVM_Bridge_PLUS.ini");
exec("sudo sed -i '9c TXFrequency=$frecuencia' /opt/MMDVM_Bridge/MMDVM_Bridge_ESPECIAL.ini");

header("Location:/dvs/editor_general.php");	

?>