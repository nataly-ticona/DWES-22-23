<?php
    function select($valor,$clave){
        echo "<option value='$valor'>$clave</option>";
    }
    
    $opciones = [
        "Madrid" => 28,
        "Sevilla" => 17,
        "Cáceres" => 56
    ];
    echo "<select name='poblacion'>";
    print_r(array_walk($opciones,"select"));
    echo "</select>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 13</title>
</head>
<body>

</body>
</html>