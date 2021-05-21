<?php
$actualizacion = exec("sed -n '1p'  /var/www/html/Revisiones_VPS/actualizar_SI_NO");
?>
<!doctype html>
<html>
<head>
     <meta charset="UTF-8"> 
     <meta http-equiv="content-type" content="text/html">
     <meta name="author" content="EA3EIZ">
     <link rel="shortcut icon" href="imagenes/favicon.png" type="image/x-icon" />
    <title>actualizando</title>
     <meta http-equiv="refresh" content="4; url=panel_configuracion.php" />
     <link rel="stylesheet"href="css/bootstrap.css" >
     <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <style>
    body{
        background:#333;
        }
.texto_centrado_verde{
    color:#0C0;
    font-size:30px;
    }
    </style>
</head>

<body>
 <div class="container"> 
 <br><br>
<div class="row"> 
                    <div class="col-lg-12 text-center thumbnail">
                    <img src="img/AMBE_DESACTIVADO.png" alt=""/></img>
                    </div>
                    
</div><!--row-->
</div><!--container-->
    <!-- JavaScript================================================== -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>