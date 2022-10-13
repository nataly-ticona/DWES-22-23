<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <div id="walk">
        <p>Enunciado 1</p>
        <?php
       $usuarios = [
        "jorge" => "1234",
        "amparo" => "admin",
        "mary" => ""];
       array_walk($usuarios,function($u, $k){
        echo "$k:$u ";
       });
        ?>
    </div>
    <div>
        <p>Enunciado 2</p>
        <?php
        function mapeo($k){
            return hash('ripemd160',$k) ;
        }
        //enviamos las keys del array y luego los elementos del array
        $e2=array_map('mapeo',$usuarios);
        echo "<pre>";
        print_r($e2);
        echo "</pre>";
        ?>
    </div>
    <div>
        <p>Enunciado 3</p>
        <?php
        function mapeo2($k){
            if($k==""){
                $k="tmp2022";
            }
            return hash('ripemd160',$k);
        }
        //enviamos las keys del array y luego los elementos del array
        $e3=array_map('mapeo2',$usuarios);
        echo "<pre>";
        print_r($e3);
        echo "</pre>";
        ?>
    </div>
    <div>
        <p>Enunciado 4</p> <!--revisar-->
        <?php
        $nuevos=[
            2 => "si"
        ];
        
        $e4=array_replace($usuarios,$nuevos);
        print_r($e4);
        ?>
    </div>
</body>
</html>
