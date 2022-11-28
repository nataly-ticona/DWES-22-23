<?php
/* Crea una función que concatene todas las cadenas pasadas como 
parámetro utilizando el primer parámetro como seprador. 
PRUEBAS: Escribe una web que llame a la función 10 veces con números 
aleatorios entre 0 y 20.

echo concatena(" ", "Hola", "mundo", "!"); echo concatena(".", "Esto", "son", "puntos");
*/

function concatena(string $separador, string ...$cadena ):string { //que devuelva un string con todas las cadenas
    $salida="" ;
    foreach($cadena as $k => $cadena ){
        $salida .= (($k==0)?"":$separador).$cadena; //va concatenando todo el rato, es 0 por el key
    } 
    return $salida;
};

function concatena2(string $separador, string ...$cadena):string{
    $salida="" ;
    $primero=true;
    foreach($cadena as $cadena ){
        if ($primero) {
            $primero=false;
            $salida=$cadena;
        }else{
            $salida .= $separador.$cadena; //va concatenando todo el rato
        }
    } 
    return $salida;
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