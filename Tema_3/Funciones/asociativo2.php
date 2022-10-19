<?php
    function tipos(mixed ...$variables){
        $arrayFinal=[];
        foreach ($variables as $valor) {
            if (!isset($arrayFinal[gettype($valor)])) {
                $arrayFinal[gettype($valor)]=1;
            }else{
                $arrayFinal[gettype($valor)]++;
            }
        }    
        return $arrayFinal;
    };

    $arrayFinal=tipos(3,"h",'hola',[1,2,3],[1],"h");
    print_r($arrayFinal);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
</head>
<body>
</body>
</html>