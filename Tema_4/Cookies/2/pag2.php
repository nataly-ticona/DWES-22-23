<?php
if (isset($_POST['enviar'])) {
    setcookie("colorFondo", $_POST['fondo']);  
    setcookie("colorTexto", $_POST['texto']);   
    setcookie("texto", $_POST['otro']);    
    
    $_COOKIE['colorFondo']=$_POST['fondo'];
    $_COOKIE['colorTexto']=$_POST['texto'];
    $_COOKIE['texto']=$_POST['otro'];

    $bgcolor=isset($_COOKIE['colorFondo'])?$_COOKIE['colorFondo']:'#FFFFFF';
    $fcolor=isset($_COOKIE['colorTexto'])?$_COOKIE['colorTexto']:'#000000';
    $nombre=isset($_COOKIE['texto'])?$_COOKIE['texto']:'anonimo';

    
    //print_r($_COOKIE);
}

if (isset($_COOKIE['colorFondo'] ) && isset($_COOKIE['colorTexto'] )) {
    ?>
    <style>
        body{
            background-color: <?=$_COOKIE['colorFondo']?>;
            color: <?=$_COOKIE['colorTexto']?>;
        }
    </style>
    <?php
}
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
    <main>
        <h1>Esta es la pagina 2</h1>
    </main>
</body>
</html>