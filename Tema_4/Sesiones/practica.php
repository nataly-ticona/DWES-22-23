<?php
session_name("porque");
session_start();
print_r( $_SESSION);
//si esta la sesion iniciada te quita uno del ultimo, sino deja el 3. Solo gurada la sesion.
$intentos=isset($_SESSION["intentos"])?$_SESSION["intentos"]:4;
$intentos--;
$_SESSION["intentos"]=$intentos;
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
    <h1>Te quedan <?=$intentos?></h1>
</body>
</html>