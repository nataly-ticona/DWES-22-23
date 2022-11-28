<?php
//DECISIONES
$numeros=[rand(0,20),rand(0,20),rand(0,20)];
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
//-------------------------------
//BUCLES
//1.Crea una página web que recorra una variable de tipo cadena accediendo a cada letra y escriba cada una en un h4. Usa for
    $cadena1="Casa";
//2. Crea una web similar a la anterior pero que pare al finalizar la cadena o al encontrar el carácter 'a', tanto minúscula como mayúscula. Usa While
    $cadena2="Nataly";
//3. Crea una página web que escriba span con números aleatorios entre 0 y 100, el proceso parará cuando el número acabe en 17 o sea primo.

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
    <p>Decisiones</p>
    <h2>Mayor <?=$mayor?></h2>
    <h2>Mediano <?=$mediano?></h2>
    <h2>Menor <?=$menor?></h2>

    <p>Bucles</p>
    <p>1. Mostrar cada caracter</p>
    <?php
        for ($i=0; $i < strlen($cadena1); $i++) {
            //el substr pilla $i mas 1 de la cadena cada vez 
            echo "<h4>" . $cadena1[$i] . "</h4>";
        }
    ?>
    <p>2. Parar la cadena si hay 'a'</p>
    <?php
        $cadena2="otra";
        $i=0;
        while($cadena2[$i]!='a' && $cadena2[$i]!='A'){
            echo "<h4>" . $cadena2[$i] . "</h4>";
            $i++;
        }
            
        
    ?>
    <p>3. Parar en 17 o primo</p>
    <?php
        do{
            $n=rand(0,100);
            echo "<span>". $n . "<span> ";
        }while($n!=17 && $n/$n==0);

    ?>
</body>
</html>