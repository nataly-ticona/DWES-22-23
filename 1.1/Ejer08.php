<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Ejercicio8.css">
    <title>Ejercicio 8</title>
</head>
<body>
    <center>
        <span>
        <?php
        for($y=1;$y<=$num;$y++){
            for($x=1;$x<=$y;$x++){
                echo "* ";
            }
            echo "<br>";
        }
        ?>
        </span>
    </center>
</body>
</html>