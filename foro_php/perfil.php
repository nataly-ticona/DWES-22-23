<?php 
//para hacer un comentario necesitamos iniciar sesion primero
require ('private_area.php');
require("./database.php");

if ($_COOKIE['user_name']) {
    $nombre =$_COOKIE['user_name'];
}else{
    header('Location: ./login.php');
    die();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/733/733635.png" type="image/x-icon">
    <title><?=$nombre?></title>
</head>
<body>
    <header>
        <?php include './menu.php';?>
    </header>
    <main>
    <?php
        $baseDatos = $mbd->prepare("SELECT * FROM publicacion WHERE name = :name");
        $baseDatos->setFetchMode(PDO::FETCH_ASSOC); 
        $baseDatos->execute([':name' => $_SESSION['name_user']]);

        $contador=0; 
            foreach ($baseDatos as $valor) {?>
            <div class="publicacion">
            <?php
            foreach ($valor as $value) {?>
            <p class="cont<?=$contador?>"><?=$value?></p>
            <?php 
            $contador++;
            }
            ?>
            </div>
        <?php   
            $contador=0; 
        }
    ?>
    </main>
</body>
</html>