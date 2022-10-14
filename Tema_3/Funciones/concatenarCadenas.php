<?php
/* Crea una función que concatene todas las cadenas pasadas como 
parámetro utilizando el primer parámetro como seprador. 
PRUEBAS: Escribe una web que llame a la función 10 veces con números 
aleatorios entre 0 y 20.

echo concatena(" ", "Hola", "mundo", "!"); echo concatena(".", "Esto", "son", "puntos");
*/

function concatena($separador,$cad1,$cad2,$cad3){
    echo $cad1 . $separador . $cad2 . $separador . $cad3 ; 
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
</head>
<body>
    <p><?=concatena(" ","si","no","como")?></p>
</body>
</html>