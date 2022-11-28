<?php
    /* Crea una función que genere un array asociativo que contenga
    información de los parámetros. La función irá descubriendo los tipos*/
    function valores(...$valores){
        $cN=0;
        $cS=0;
        $cA=0;
        for ($i=0; $i < sizeof($valores) ; $i++) { 
            if (is_string($valores[$i])) {
                $cS++;
            }elseif(is_int($valores[$i])){
                $cN++;
            }else{
                $cA++;
            }
        }
        $total=[
            "String" => $cS,
            "int" => $cN,
            "arrays"=> $cA
        ];
        print_r($total);
    }
    //MEJOR ESTE QUE EL PRIMERO, ESTE TE DEVUELVE CUANTOS DE CADA TIPO HAY
    function analizParametros(...$varios) {
        $array = [];
        foreach($varios as $key => $value) {
            if(array_key_exists(gettype($value), $varios)) {
                $array[gettype($value)] = 1;
            } else {
                $array[gettype($value)]++;
            }
        }

        return $array;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
</head>
<body>
    <p><?=valores(3, "h", 'hola', [1,2,3], [1], "h")?></p>
    <pre>
    <p><?=print_r(analizParametros(3, "h", 'hola', [1,2,3], [1], "h"))?></p>
    </pre>
</body>
</html>