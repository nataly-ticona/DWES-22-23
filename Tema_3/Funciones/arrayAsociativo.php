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
        echo $cS. $cN.$cA;
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
</body>
</html>