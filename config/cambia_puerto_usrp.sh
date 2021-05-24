#!/bin/bash

# primero lo guarda en /home/pi/.local/datos_dvswitch en la linea 40 para seguidamente recuperar en la variable valor
valor=$(awk "NR==3" panel_configuracion.php) 


valor=`expr substr $valor 2 5`


# Escribe el puerto que entramos desde el panel de configuración del dvswitch en /opt/Analog_Bridge/analog_bridge.sh
sed -i "21c mode=\`cat \/tmp\/ABInfo_$valor.json \| python -c \'import json,sys;obj=json.load(sys.stdin); print obj\[\"tlv\"\]\[\"ambe_mode\"\];\'\`" /opt/Analog_Bridge/analog_bridge.sh
