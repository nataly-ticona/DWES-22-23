<?php
    function imprimeTabulado($array, $tab = 0) {
        for($i = 0; $i < $tab; $i++) { //tab es el valor que se manda en la recursiva
            $aux .= '_';
        }

        foreach ($array as $key => $value) {
            if (is_array($value)) { //si es un array se imprime el array
                echo $aux.gettype($value)."<br>"; //imprimimos el typo de aux 
                imprimeTabulado($value, ($tab + 4)); //el 4 es el tamaño del tabulado, es una recursiva que manda el valor y la tabulacion de 4 y si hay otro array dentro de ese array mandamos ese mismo
            } else {
                echo  $aux.$value."<br>";
            }
        }
    }
    $cosas = [
        3,
        "frutas"  => ["a" => "naranja", "b" => [1, 2], "c" => "manzana"],
        "números" => [1, 2, 3, 4, 5, 6],
        "hoyos"   => ["primero", 5 => "segundo", "tercero"],
        "asd"
    ];

    imprimeTabulado($cosas);

    function invertirCadena($cadena, $index = 0) {
        if (!empty($cadena[$index])) { //si esta lleno mandamos a la recursividad. Es un array y lo pilla char a char e index=index+1
            invertirCadena($cadena, $index + 1);
        }
        echo $cadena[$index];
    }
    invertirCadena('Nataly');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 14</title>
</head>
<body>
    
</body>
</html>