<?php 
session_start();
//Pasar a NXDN

exec("sudo cp /opt/Analog_Bridge/nxdn.ini /opt/Analog_Bridge/Analog_Bridge.ini");

# Pone Enable=0 en [DMR]
exec("sudo sed -i '44c Enable=0' /opt/MMDVM_Bridge/MMDVM_Bridge.ini");

# Pone Enable=0 en [D-STAR]
exec("sudo sed -i '40c Enable=0' /opt/MMDVM_Bridge/MMDVM_Bridge.ini");

# Pone Enable=0 en [System Fusion]
exec("sudo sed -i '50c Enable=0' /opt/MMDVM_Bridge/MMDVM_Bridge.ini");

# Pone Enable=1 en [NXDN]
exec("sudo sed -i '57c Enable=1' /opt/MMDVM_Bridge/MMDVM_Bridge.ini");

exec("sudo systemctl restart analog_bridge.service");
exec("sudo systemctl restart ircddbgateway.service");
exec("sudo systemctl restart md380-emu.service");
exec("sudo systemctl restart mmdvm_bridge.service");
exec("sudo systemctl restart nxdngateway.service");

header("Location:/dvs/sistema_nxdn.php");
?>