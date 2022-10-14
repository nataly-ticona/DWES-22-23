<?php
/*Crea una función que sume todos los números entre dos parámetros dados: 
inicio y fin. PRUEBAS: Escribe una web que llame a la función 10 veces con 
números aleatorios entre 0 y 20. */

function suma($inicio,$final){
    $suma=0;
    for ($i=$inicio; $i <$final ; $i++) { 
        $suma+=$i;
    }
    echo $suma;
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>
<body>
    <p><?=suma(2,8)?></p>
</body>
</html>