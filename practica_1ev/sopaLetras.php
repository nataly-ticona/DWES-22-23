<?php

$tab1 = array();

function inicializaSopaLetras(&$tablero,$m,$s) {

    for ($i=0;$i<$s;$i++) {
        for ($j=0;$j<$m;$j++) {
            $tablero[$i][$j] = chr(random_int(97, 122));
        }
    }
}


function pintaTablero($tablero){

    echo "<table>";
    foreach ($tablero as $fila) {
        echo "<tr>";
        foreach ($fila as $valor) {
            echo "<td>$valor</td>";
        }
        echo "</tr>";
    }

    echo "</table>";

}

function colocaPalabraHorizontal(&$tablero,$palabra) {
    $longPalabra = strlen($palabra);

    $maxX = count($tablero) - $longPalabra;
    $maxY = count($tablero[0]);

    $inicialX = random_int(0,$maxX);
    $inicialY = random_int(0,$maxY-1);

    for ($i=0; $i<$longPalabra; $i++) {
        $tablero[$inicialY][$inicialX + $i] = substr($palabra,$i,1);
    }
}

function colocaPalabraVertical(&$tablero,$palabra) {

    $longPalabra = strlen($palabra);

    $maxX = count($tablero) - $longPalabra;
    $maxY = count($tablero[0]);

    $inicialX = random_int(0,$maxX);
    $inicialY = random_int(0,$maxY-1);

    for ($i=0; $i<$longPalabra; $i++) {
        $tablero[$inicialX + $i][$inicialY] = substr($palabra,$i,1);
    }
}

function colocaPalabraHorizontalAlReves(&$tablero, $palabra) {

    $longPalabra = strlen($palabra);

    $maxX = count($tablero) - $longPalabra;
    $maxY = count($tablero[0]);

    $inicialX = random_int(0,$maxX);
    $inicialY = random_int(0,$maxY-1);

    for ($i=0; $i<$longPalabra; $i++) {
        $tablero[$inicialY][$inicialX + $i] = substr($palabra,$longPalabra-$i-1,1);
    }

}

function colocaPalabraVerticalAlReves(&$tablero, $palabra) {

    $longPalabra = strlen($palabra);

    $maxX = count($tablero) - $longPalabra;
    $maxY = count($tablero[0]);

    $inicialX = random_int(0,$maxX);
    $inicialY = random_int(0,$maxY-1);

    for ($i=0; $i<$longPalabra; $i++) {
        $tablero[$inicialX + $i][$inicialY] = substr($palabra,$longPalabra-$i-1,1);
    }

}

function colocaPalabra(&$tablero,$palabra) {

    $aleatorio = random_int(0,3);
    switch ($aleatorio) {
        case 0:
            colocaPalabraHorizontal($tablero,$palabra);
            break;
        case 1:
            colocaPalabraVertical($tablero,$palabra);
            break;
        case 2:
            colocaPalabraHorizontalAlReves($tablero,$palabra);
            break;
        case 3:
            colocaPalabraVerticalAlReves($tablero,$palabra);
            break;
        default:
            break;
    }

}

inicializaSopaLetras($tab1,6,6);

colocaPalabra($tab1,"cabeza");

pintaTablero($tab1);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="deverdad.css">
    <title>Document</title>
</head>
<body>
    
</body>
</html>