<?php
// //no se puede poner el header despues del html o otro tipo de contenido
// header("Location: redireccion.php");
// die();

//el primero es el nombre, lo segundo es el valor 
//la primera vez que visitas  la pagina 
$claro = isset($_COOKIE['claro'])?$_COOKIE['claro']:0;
setcookie("galleta", "navegador");
setcookie("claro",$claro+1);
print_r($_COOKIE);


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
    
</body>
</html>