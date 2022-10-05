<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <h3> array_intersect</h3>
    <?php
    $n1=[2,4,7,1,2];
    $n2=[6,3,5,1,7];
    $conjunto=array_intersect($n1,$n2); //cambia dependiendo del orden 
    echo "<pre>";//formatea el codigo para que quede bonito
    echo  print_r($conjunto);
    echo "</pre>";
    ?>
    <h3>array_diff_key</h3>
    <p>Para los que son diferentes</p>
    <?php
    $diferentes=array_diff_key($nn1,$conjunto);
    ?>
    <h3> array_search y array_replace</h3>
    <?php
    $ultimo=array_replace($n1,$n2,$conjunto);
    echo "<pre>";//formatea el codigo para que quede bonito
    echo  print_r($ultimo);
    echo "</pre>";
    ?>
    <h3>array search</h3>
    <?php
        //arraysearch busca la posicion 
    
        $numero=array_search('7',$ultimo);
        echo $numero;
    ?>
</body>
</html>