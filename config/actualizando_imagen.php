<?php
$actualizacion = exec("sed -n 3p  /var/www/html/comprueba_actualizacion.php");
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
    .texto_centrado_blanco{
    padding-top: 60px;
    color: #FFFFFF;
    font-size: 30px;
    text-align: center;
    }
    .config_especial{
    height: 200px;
    background:#8000FF;
    border-radius: 8px 8px 8px 8px;
    }    
</style>

</head>
<body>
 <div class="container"> 
 <br><br>
        <div class="row">
               <div class="col-md-6 col-md-offset-2 config_especial">
    
                <h1 class="texto_centrado_blanco"><?php echo $actualizacion;?></h1>
                        
                </div>
</div><!--container-->
    <!-- JavaScript================================================== -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>