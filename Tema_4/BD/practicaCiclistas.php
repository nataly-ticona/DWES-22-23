<?php
try {
    //conectamos-> base de datos(localhost es el servidor IP), usuario, ppsswd
    $nombre = 'mysql:host=localhost;dbname=mibasedatos';
    $usuario = 'nataly';
    $psswd='1234';
    $mbd = new PDO($nombre,$usuario,$psswd);

    // Utilizar la conexión aquí
    $resultado = $mbd->prepare('SELECT * FROM Ciclistas');
    //meto todos los datos en un array y laskeys son el tipo de dato en la BD
    $resultado->setFetchMode(PDO::FETCH_ASSOC); 
    //ejecutamos
    $resultado->execute();
    
    //pintar las tablas de los usuarios
    printarLink($resultado);
    // Ya se ha terminado; se cierra, para liberar la conexion 
    $resultado = null;
    $mbd = null;

} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "\n";
    die();
}

function printarLink($dato){
    ?>
    <table>
    <?php
    foreach ($dato as $clave => $valor){ 
    ?>
        <tr>
            <td><a href="./detalles.php?id=<?=$valor['id']?>"> <?=$valor['nombre'] ?></a></td>
            <td> 
                <?php
                    for ($i=0; $i < $valor['num_trofeos']; $i++) { 
                        ?>
                        <span class="fas fa-bars"></span>
                        <?php
                    }
                ?>
            </td>
        </tr>
    <?php   
    
    }?>
    </table>  
    <?php  
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>Parctica Base de Datos</title>
    <style>
        table,td,tr,th{
            border: 1px solid purple;
            border-collapse: collapse;
            padding: 2px;
            text-align: center;
        }
        th{
            padding: 4px;
            font-family: Arial;
            font-style: normal;
        }

        
    </style>
</head>
<body>
</body>