<?php 

exec("cd /opt/MMDVM_CM/DMR2YSF;curl --fail -o FCSRooms.txt http://www.pistar.uk/downloads/FCS_Hosts.txt");
exec("sudo systemctl restart analog_bridge.service");
exec("sudo systemctl restart ircddbgatewayd.service");
exec("sudo systemctl restart md380-emu.service");
exec("sudo systemctl restart mmdvm_bridge.service");
exec("sudo systemctl restart nxdngatewayd.service");
exec("sudo systemctl restart dmr2ysf.service");
header("Location:/dvs/config/editor_general.php");	

?>