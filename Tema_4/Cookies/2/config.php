<?php 

$bgcolor='#FFFFFF';
$fcolor='#000000';
$nombre='anonimo';

$bgcolor = (isset($_COOKIE['colorFondo']))?$_COOKIE['colorFondo']:'#FFFFFF';

$fcolor = (isset($_COOKIE['colorTexto']))?$_COOKIE['colorTexto']:'#000000'; 

$nombre = (isset($_COOKIE['texto']))?$_COOKIE['texto']:'anonimo';


if (isset($_POST['enviar'])) {
    if(isset($_POST['fondo'])){
        $bgcolor = $_POST['fondo'];
        setcookie("colorFondo", $bgcolor);
    }

    if(isset($_POST['texto'])){
        $fcolor = $_POST['texto'];
        setcookie("colorTexto", $fcolor);
    }

    if(isset($_POST['otro'])){
        $nombre = $_POST['otro'];
        setcookie("texto", $nombre);
    }
}

    ?>
        <style>
            body{
                background-color: <?=$bgcolor?>;
                color : <?=$fcolor?>;
            }
        </style>
    <?php
    
?>    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina 2</title>
</head>
<body>
    <?php 
    include './menu.php';
    ?>
    <form action="" method="post">
        Color de fondo: <input type="color" name="fondo" id="fondo" value="<?=$bgcolor?>">
        <br><br>
        Color texto: <input type="color" name="texto" id="texto" value="<?=$fcolor?>">
        <br><br>
        Nombre <input type="text" name="otro" value="<?=$nombre?>"> 
        <br><br>
        <input type="submit" value="enviar" name="enviar">
    </form>
</body>
</html>