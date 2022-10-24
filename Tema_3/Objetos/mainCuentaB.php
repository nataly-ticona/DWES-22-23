<?php
    require './CuentaBancario.php';
    /*para llamar un metodo estatico  
     se instancia asi Objeto::funcionEstatica()*/

    $persona1=new CuentaBancaria();
    echo $persona1;
    //toString()
    $persona3=new CuentaBancaria("Anton",2000);
    echo $persona3;

    echo $persona1;

    //transferir
    echo "TRANSFERENCIA \n";
    //pasamos al objeto la cantidad
    echo $persona3->transferir($persona1,100);
    echo $persona1; 

    //unimos
    echo "UNION \n";
    $persona1->unir($persona3);
    echo $persona1;

    echo "BANCARROTA \n";
    $persona1->bancarrota();
    echo $persona1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio cuenta bancaria</title>
</head>
<body>
    
</body>
</html>