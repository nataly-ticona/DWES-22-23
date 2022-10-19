<?php
    function cambiar(mixed ...$variables){
        $final=[];
        $n=1;
        for ($i=0; $i < sizeof($variables); $i++) { 
            if (is_integer($variables[$i])) {
                $final[$i]=pow($variables[$i],$n);
                $n++;
            }else if (is_double($variables[$i])) {
                if ($variables[$i]>0) {
                    $final[$i]=-$variables[$i];
                }else{
                    $final[$i]=abs($variables[$i]);
                }
            }else if (is_string($variables[$i])){
                if (ctype_upper($variables[$i])) {
                    $final[$i]=$variables[$i];
                }else{
                    $final[$i]=$variables[$i];
                }
            }else{
                $final[$i]=$variables[$i];
            }
        }
        return $final;
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