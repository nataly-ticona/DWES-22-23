<?php
try {
    //conectamos-> base de datos(localhost es el servidor IP), usuario, ppsswd
    $nombre = 'mysql:host=localhost;dbname=mibasedatos';
    $usuario = 'nataly';
    $psswd='1234';
    $mbd = new PDO($nombre,$usuario,$psswd);

    //OBTENEMOS LOS DATOS DE LA PERSONA CON ESE ID
    $id=$_GET['id'];
    
    $resultado = $mbd->prepare("SELECT * FROM Ciclistas WHERE id='$id'");
    $resultado->setFetchMode(PDO::FETCH_ASSOC); 
    $resultado->execute();

    
    
    mostrarDatos($resultado);
    if ($id=='' || !$id) {
        echo 'Error 404';
    }else if (!$resultado->fetch()) {
        echo "no existe en la base de datos";
    }
    // Ya se ha terminado; se cierra, para liberar la conexion 
    $resultado = null;
    $mbd = null;
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "\n";
    die();
}

function mostrarDatos($datos){
    foreach ($datos as $value) {
        ?>
        <p>Id: <?=$value['id']?></p>
        <p>Nombre: <?=$value['nombre']?></p>
        <p>Trofeos: <?php
                    for ($i=0; $i < $value['num_trofeos']; $i++) { 
                        ?>
                        <span class="fas fa-bars"></span>
                        <?php
                    }
                ?>
                </p>
        <?php
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>Lista del usuario <?=$id?></title>
</head>
<body>
    
</body>
</html>