<?php
    function cambiar(mixed ...$variables){
        $n=1;
        foreach ($variable as $valor) {
            switch ($valor) {
                case is_integer($valor):
                    $fvalor=pow($valor,$n);
                    $n++;

                case is_double($valor):
                    if ($valor>0) {
                        $valor="-".$valor;
                    }else{
                        $valor=abs($valor);
                    }
                case is_string($valor):
                    /*compara a nivel de bit si es mayuscula / minuscula y lo invierte teniendo en cuenta el valor origial mediante una puerta XOR*/
                    $valor = strtolower($valor) ^ strtoupper($valor) ^ $valor;
                default:
                    break;
            }
        }
        return $variable;
       
    };

    $arrayVariables=cambiar(3,"h",'hola',[1,2,3],[1],"h");
    print_r($arrayVariables);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 11</title>
</head>
<body>
    
</body>
</html>