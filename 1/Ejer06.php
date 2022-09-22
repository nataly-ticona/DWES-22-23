<?php
    $num1=2;
    $num2=3;
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
    <?php
    //print_r  muestra información sobre una variable 
    //en una forma que es legible por humanos
        //guardar en una variable el numero y en otra el array 
    //get_defined_vars
    print_r(get_defined_vars($num1+$num2,$num1-$num2,$num1*$num2));
    ?>
    
</body>
</html>