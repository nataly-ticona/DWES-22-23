<?php

    $cosas = [
        3,
        "frutas"  => ["a" => "naranja", "b" => [1, 2], "c" => "manzana"],
        "números" => [1, 2, 3, 4, 5, 6],
        "hoyos"   => ["primero", 5 => "segundo", "tercero"],
        "asd"
    ];

    function imprimeTabulado($cosas, $tab = 0) {
        $aux = '';
        for($i = 0; $i < $tab; $i++) $aux .= '_';

        foreach ($cosas as $key => $value) {
            if (is_array($value)) {
                echo $aux . $key."<br>";

                imprimeTabulado($value, ($tab + 2));
            } else {
                echo  $aux.$value."<br>";
            }
        }
    }
    
    function invertirCadena($cadena, $index = 0) {
        if (!empty($cadena[$index])) { //si esta lleno mandamos a la recursividad. Es un array y lo pilla char a char e index=index+1
            invertirCadena($cadena, $index + 1);
        }
        echo $cadena[$index];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 14</title>
    <style>
        #tabulacion{
            width: fit-content;
            background-color: yellow;
        }
        #alreves{
            width: fit-content;
            background-color: pink;
        }
    </style>
</head>
<body>
    <div id="tabulacion">
        <h2>Tabulacion</h2>
        <?=imprimeTabulado($cosas)?>
    </div>
    <br>
    <div id="alreves">
        <h2>Nombre al reves</h2>
        <?= invertirCadena('Nataly')?>
    </div>
</body>
</html>