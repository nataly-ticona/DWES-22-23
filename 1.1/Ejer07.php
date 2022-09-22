<?php
$num=7;
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
    <center>
    <?php
        for($y=1;$y<=$num;$y++){
            for($x=1;$x<=$y;$x++){
                echo "*";
            }
            echo "<br>";
        }
    ?>
    </center>
    </body>
</html>