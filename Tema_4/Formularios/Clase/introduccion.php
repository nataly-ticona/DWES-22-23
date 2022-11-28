<?php
 echo '<pre>';
print_r($_SERVER);
 echo '</pre>';

echo 'IP: '. $ip=$_SERVER['REMOTE_ADDR']. '<br>';
echo 'SISTEMA OPERATIVO: ' . $sistemaOP=$_SERVER['HTTP_USER_AGENT'];
echo '<hr>';
$_SERVER['HTTP_ACCEPT_LANGUAGE']='zh';
switch (substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,2)) {
    case 'es':
        echo 'hola';
        break;
    case 'en':
        echo 'hello';
        break;
    case 'zh':
        echo '';
            break;
    
        default:
        break;
}

//echo '<hr>';
//print_r($_GET);
//echo '<hr>';
//print_r($_GET);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>si</title>
</head>
<body>
    <!--para guardar los datos de la persona y obetener un post solo se pone el localhost:8000, si se quiere un get poner en el action todo menos /index.php-->
    <form action="http://localhost:8000/formularios.php" method=""> <!--ejecutamos en el terminal nc -l 8000 -->
        Nombre <input type="text" name="nombre" id="nombre">
        <br>
        Sexo:   
            <!--para que puedas elegir solo una opcion entre las tres, hay que poner name a todos-->
            hombre<input type="radio" name="sexo" id="mujer">
            mujer<input type="radio" name="sexo" id="hombre">
            otros<input type="radio" name="sexo" id="hombre">
            <br>
            color favorito: <input type="color" name="color" id="color">
            <br>
            <textarea name="texto" id="texto" cols="30" rows="10"></textarea>
            <br>
        <input type="submit" value="enviar">
    </form>
</body>
</html>