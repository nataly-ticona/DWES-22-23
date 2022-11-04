<?php
$data = file_get_contents("tema.csv");
$lines = explode("\n", $data); //separador
print_r($lines);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>listado</title>
    <style>
        table, thead, tbody,tr,th,td{
            border: 1px solid black;
            border-collapse: collapse;
        }

    </style>

</head>
<body>
    <table>
        <thead>
            <tr>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </thead>
       <tbody>
        <?php
        foreach ($lines as $line) {
            echo "<tr>";
            $fields=explode(";",$line );
            echo "<td> $fields[0]<td>";
            echo "<td> $fields[1]<td>";
            echo "<td> $fields[2]<td>";
            echo "</tr>";
        }
        ?>
       </tbody>
    </table>
</body>
</html>