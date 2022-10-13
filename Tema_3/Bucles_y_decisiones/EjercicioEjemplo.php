<?php
$numeros=[mt_rand(0,20),mt_rand(0,20),mt_rand(0,20)];
$mayor=$numeros[0] ; 
$menor=$numeros[0];
$mediano=$numeros[0];
for ($i=0; $i < sizeof($numeros) ; $i++) { 
    if($mayor<=$numeros[$i]){
        $mayor=$numeros[$i];
    }elseif($menor>=$numeros[$i]){
        $menor=$numeros[$i];
    }else{
    $mediano=$numeros[$i];
    }
}

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
    <h1><?=$mayor?></h1>
    <h2><?=$mediano?></h2>
    <h3><?=$menor?></h3>
</body>
</html>