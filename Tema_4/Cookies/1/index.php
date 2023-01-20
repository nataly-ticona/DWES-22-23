<?php
$mensajeCookie=true;
    if (isset($_GET['accion']) && $_GET['accion']=='acepta') {
        setcookie("verificado", 1);
        $mensajeCookie=false;
    }

    if(isset($_COOKIE['verificado']) && $_COOKIE['verificado']==1){
        $mensajeCookie=false;
    }
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bienvenido</h1>
    <!--en enlace se redirecciona a una que añade-->
    <?php if($mensajeCookie){
        ?>
        <a href="?accion=acepta">Aceptar</a>
        <a href="?accion=rechaza">Rechazar</a> 
        <?php
        }
    ?>
</body>
</html>