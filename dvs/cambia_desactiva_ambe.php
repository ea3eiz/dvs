<?php 

exec("sudo sed -i '23c decoderFallBack = true' /opt/Analog_Bridge/Analog_Bridge.ini");
exec("sudo sed -i '23c decoderFallBack = true' /opt/Analog_Bridge/dmr.ini");
exec("sudo sed -i '23c decoderFallBack = true' /opt/Analog_Bridge/dstar.ini");
exec("sudo sed -i '23c decoderFallBack = true' /opt/Analog_Bridge/especial.ini");
exec("sudo sed -i '23c decoderFallBack = true' /opt/Analog_Bridge/nxdn.ini");
exec("sudo sed -i '23c decoderFallBack = true' /opt/Analog_Bridge/ysf.ini");
exec("sudo sed -i '23c decoderFallBack = true' /opt/Analog_Bridge/FCS.ini");

exec("sudo systemctl restart ysfgateway.service");
exec("sudo systemctl restart dmr2ysf.service");

exec("sudo systemctl restart analog_bridge.service");
exec("sudo systemctl restart ircddbgateway.service");
exec("sudo systemctl restart md380-emu.service");
exec("sudo systemctl restart mmdvm_bridge.service");
exec("sudo systemctl restart nxdngateway.service");

header("Location:/dvs/ambe_desactivado.php");

	
