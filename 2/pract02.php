<?php
$cad="";
$nV=0;
$nC=0;
$palindromo="";
$error=false;
if (isset($_GET['cadenaT'])){
    $cad=$_GET['cadenaT'];
    if ($cad==""){
         $error=true;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="pract02.css">
    <title>Ejercicio 2</title>
</head>
<body>
    <div id="caja">
        <div id="d1">
                <?php if ($error) { ?>
                    <p id="alerta">No has escrito texto, vuelve a intentarlo</p>
                <?php } ?> 
                <form action="pract02.php" method="get">
                    ANALISIS DE CADENA <input type="text" name="cadenaT" id="" value="<?=$cad?>" placeholder="Introduzca algo de texto"><br>
                    <input type="submit" value="enviar">
                </form>
        </div>
        <div id="d2">
            <?php
            //es < y no <= porque el len ocupa 0,1 y suma uno mas porque ocupa uno mas 
            //mb es para contar caracteres que son con tilde o asi     
                for ($i=0;$i<mb_strlen($cad);$i++){
                    if (preg_match('/[aeiouAEIOU]/',$cad[$i]) ){
                        $nV++;
                        //preg_match pregunta si en cad[i] exixte el patrondado
                    }else if (preg_match('/[a-zA-Z]/',$cad[$i])){
                        $nC++;
                    }
                    if(strrev($cad)==$cad){
                        $palindromo="si";
                    }else{
                        $palindromo="no";
                    }
                }
                echo 
                "<ul> 
                <li>vocales: $nV</li>
                <li>consonantes: $nC</li>
                <li>palindromo: $palindromo</li>";
                $palindromo="";
                $nV=0;
                $nC=0;
            ?>
        </div>
    </div>
</body>
</html>