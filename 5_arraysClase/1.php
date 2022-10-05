<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays map,walk</title>
</head>
<body>
    <p>Array map</p> 
    <?php
    function cosa($n){
        //recorremos el array bidimensional como unidimensional
        for ($i=0; $i < count($n); $i++) { 
            //si en el array 1 por ejemplo encuentra un 1 en alguno de sus parametros 
            //ese array sera ahora "señor" + el primer elemento de ese array
            if($n[$i]==1){
                //devolvemos un valor del nuevo array
                return "senor $n[0]";
            }else if($n[$i]==0){
                //devolvemos un valor del nuevo array
                return "senora $n[0]";
            }
        }
        //retornamos el array de arrays nuevo
        return($n);
    }
    $a = [
        ['Jorge',1],
        ['Bea',0],
        ['Paco',1],
        ['Amparo',0]];
    $b = array_map("cosa", $a);
    echo "<pre>";
    print_r($b);
    echo "<pre>";
    ?>
    
    <!-- ------------------------------------------------------------------------>
    
    <p>Array walk</p>
    <?php
    //es como map pero este devuelve solo un string, no devuelve un array, el map si 
     array_walk($a,function($item){
        echo (($item[1]!=0)?' señor ':' señora ').$item[0];
    });
    ?>

    <!-- ------------------------------------------------------------------------>

    <p>Array reduce</p>
    <?php
          function calorias($arrayAcumulador,$posiciones){ 
            /*necistamos dos variables, una para almacenar la operacion y otra para las posiciones del array*/
              $arrayAcumulador+=$posiciones[1]*$posiciones[2];
              return $arrayAcumulador;
              //o return $arrayAcumulador + ($posiciones[1]*$posiciones[2]);
        }
            
        $comida = [ 
            0 => ["Banana", 3, 56], 
            1 => ["Chuleta", 1, 256],
            2 => ["Pan", 1, 90] ];
        $x = [];
        echo "<pre>";
        var_dump(array_reduce($comida, "calorias")); 
        echo "</pre>";
    ?>
    
    <!-- ------------------------------------------------------------------------>

    <p>Array filter</p>
    <?php
    function sexoH($v){
     return $v[1]==1;
    }
    $hombres=array_filter($a,"sexoH");
    
    echo "<pre>";
    print_r($hombres);
    echo "</pre>";

    function sexoM($v){
        return $v[1]==0;
       }
       $mujeres=array_filter($a,"sexoM");
       
       echo "<pre>";
       print_r($mujeres);
       echo "</pre>";
    ?>
</body>
</html>