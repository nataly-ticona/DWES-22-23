<?php 
//se usa required para objeto, para llamarlo
require "./Circulo.php";
    //instanciamos un nuevo objeto
    $a=new Circulo();
    //mostramos un dato
    echo $a->getRadio();
    //ponemos un valor al objeto $a y luego lo mostramos
    $a->setRadio(5);
    echo " segundo valor:".$a->getRadio();
    //mostramos la constante PI y te lo redondea con 2 cifras
    echo "\n".round($a->getPI(),2);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>