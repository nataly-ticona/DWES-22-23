<?php

    function formulario($valor,$clave){
        $tipo=(is_int($value))?'number':'text'; //es un if que pregunta si es numero
        echo "$clave <input name='$clave'  value='$valor' type='$tipo'> <br>";    
    }
    
    $yo = [
        "nombre" => "Jorge Dueñas Lerín",
        "dirección" => "Calle falsa número 1234",
        "teléfono" => "91 123 45 67",
        "población" => "Madrid",
        "edad" => 23
    ];
    echo "<form id='datosP' action='post'><pre>";
    print_r(array_walk($yo,"formulario"));
    echo "</pre></form>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 12</title>
</head>
<body>
    
</body>
</html>