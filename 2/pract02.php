<?php
$cad="";
$nV=0;
$error=false;
if (isset($_GET['cadenaT'])){
    $cad=$_GET['cadenaT'];
}else{
    $cad="";
    $error=true;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    <div>
            <?php if ($error) { ?>
                <p>No has escrito texto, vuelve a intentarlo</p>
            <?php } ?>
            <form action="pract02.php" method="get">
                Introduce texto: <input type="text" name="cadenaT" id="" value="<?=$cad?>"><br>
                <input type="submit" value="enviar">
            </form>
    </div>
    <div>
        <?php
            for ($i=0;$i<=strlen($cad);$i++){
                if (in_array($cad[$i],["a","e","i","o","u"]) ){
                    $nV++;
                }
            }
            echo "<p> vocales: $nV "
        ?>
    </div>
</body>
</html>