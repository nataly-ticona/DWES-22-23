<?php
    $ej10=[];
    for ($i=0; $i < 20; $i++) { 
        $ej10[$i]=rand(0,15);
    }

    $impares=array_filter($ej10,function($n){
        return $n & 1;
    });
    $par=array_filter($ej10,function($n){
        return !($n & 1);
    });
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 10</title>
</head>
<body>
    <pre>
    <?php
    print_r($impares);
    echo("Pares");
    print_r($par);
    ?>
    </pre>
</body>
</html>