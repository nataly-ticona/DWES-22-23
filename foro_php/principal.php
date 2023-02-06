<?php 
require ('database.php');

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/principal.css">
    <title>Pagina principal</title>
</head>
<body>
    <header>
        <?php include ('./menu.php'); ?>
    </header>
    <main>
        <!-- tweet de cada uno con esta estructura de texto -->
        <h1>Feed</h1>
        <hr>
            <?php
             $baseDatos = $mbd->prepare('SELECT * FROM publicacion');
             $baseDatos->setFetchMode(PDO::FETCH_ASSOC); 
             $baseDatos->execute();
             ?>
            <!--MOSTRAR LAS PUBLICACIONES DE LA BASE DE DATOS-->
            <?php
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
             <br>
    </main>
</body>
</html>