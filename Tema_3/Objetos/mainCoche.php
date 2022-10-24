<?php
require './Coche.php';
require './CocheRemolque.php'; 
require './CocheGrua.php'; 
//hereda los metodos del padre asi que no hace falta añadir nada a la heredada

$coche1=new Coche("coche normal","marca c",23);
$coche2=new CocheRemolque("coche remolque","marca R",23,123);
$coche3= new CocheGrua("grua 1","marca G",13);
$coche4=new Coche("coche normal 2","marca c",14);
$coches=[$coche1,$coches3,$coche4];
//metodo carga
// echo '<br>' . $coche3->pintarInfo();
// $coche3->cargar($coche1);
// echo '<br>' . $coche3->pintarInfo();
// $coche3->cargar($coche2);
// echo '<br>' . $coche2->pintarInfo();
// echo '<br>' ;

//ocurre polimorfismo porque aqui se muestran todas las clases, al cargar el coche en la grua 
echo array_walk($coches, function($value , $key){
    echo  $key .  'valor:' . $value . '<br>';
});
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio Coche</title>
</head>
<body>
    
</body>
</html>