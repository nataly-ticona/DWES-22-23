<?php 
try {
    $nombre = 'mysql:host=localhost;dbname=bdExamen';
    $usuario = 'natalyExamen';
    $psswd='1234';
    $mbd = new PDO($nombre,$usuario,$psswd);

    $baseDatos = $mbd->prepare('SELECT * FROM Logs');
    $baseDatos->setFetchMode(PDO::FETCH_ASSOC); 
    $baseDatos->execute();
    ?>
    <table>
        <tr><b>Datos</b></tr>
    <?php
    foreach ($baseDatos as $valor) {?>
        <tr>
            <td><?=$valor['navegador']?></td>
            <td><?=$valor['timestamp']?></td>
        </tr>
    <?php    
    }
    ?>
    </table>
    <br>
    <?php

    if($insert->execute(array(':navegador'=>$navegador, ':tiempo'=>$t))) {
        echo "Se ha creado el nuevo registro!";
    }
    $baseDatos = null;
    $mbd = null;

} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "\n";
    die();
}




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Base de datos</title>
</head>
<body>
    
</body>
</html>