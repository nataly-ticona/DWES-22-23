<?php
require './singleton.php';
//singleton : acceso a objetos, es como un objeto estatico
$user1 = Unico::singleton(); 
$user2 = Unico::singleton();
$user3 = Unico::singleton();
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