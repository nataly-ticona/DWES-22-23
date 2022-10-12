<?php
$com;
    for ($i=0; $i <=20 ; $i++) { 
        $com[$i]=rand(0,20);
    }
    echo "Generar array: <br>";
        print_r($com);

$com=sort($com);
    echo "Ordenado: ";
    foreach ($com as $key => $val) {
        echo  $key . " = " . $val . "\n";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>
<body>
    <pre>
    <?php
    

   
    ?>
    </pre>
</body>
</html>