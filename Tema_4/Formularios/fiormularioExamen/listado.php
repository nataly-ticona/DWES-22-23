<?php
$data = file_get_contents("usuarios.csv");
$lines = explode("\n", $data); //separador

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>listado</title>
    <style>
        table{
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>

</head>
<body>
    <table>
        
        <?php
        foreach ($lines as $line) {
            echo "<tr>";
            $fields=explode(";",$line );
            for ($i=0; $i < count($fields); $i++) { 
                echo "<td> $fields[$i]<td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>