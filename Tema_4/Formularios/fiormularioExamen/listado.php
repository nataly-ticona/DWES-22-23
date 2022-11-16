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
        table,td{
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
            echo "<td> $fields[0]<td>";
            echo "<td> $fields[1]<td>";
            echo "<td> $fields[2]<td>";
            echo "<td> $fields[3]<td>";
            echo "<td> $fields[4]<td>";
            echo "<td> $fields[5]<td>";
            echo "<td> $fields[6]<td>";
            echo "<td> $fields[7]<td>";
            echo "<td> $fields[8]<td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>