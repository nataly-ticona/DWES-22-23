<?php
    $tareas = [
        'Pelar mandarinas',
        'Comer comida',
        'Beber bebida',
        'Recoger título',
        'Cobrar salario',
        'Barrer casa',
        'Fregar casa'
    ];
  
    $minions = [
        'Oto',
        'Gah',
        'Bru'
    ];

    
    $tareas2=array_rand($tareas,7);
    $minions2=array_rand($minions,3);
    $minions3=array_rand($minions,3);
    $minionsT=[[$tareas2],[$minions2,$minions3]];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 7</title>
</head>
<body>
    <p>Array rand</p>
    <pre>
        <?php
        print_r($minionsT);
        ?>
    <pre>
</body>
</html>