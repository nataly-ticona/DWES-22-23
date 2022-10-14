<?php
//Crea una función que escriba lo parámetros recibidos por la URL en una tabla.
//Hacerlo con un for each
// probar con http://localhost:8080/Tema_3/Funciones/tablaURL.php?valor=ankjad&valor2=asdsa
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>
    <table>
        <tr>
            <th>key</th>
            <th>valor</th>
        </tr>
        <?php
            foreach($_GET as $key =>$valor){
                echo "<tr>";
                echo "<td> $key </td>";
                echo "<td> $valor </td>";
                echo "</tr>"; 

            }
        ?>
    </table>
</body>
</html>