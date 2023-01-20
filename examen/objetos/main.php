<?php 
spl_autoload_register(function ($class) {
    $classPath = "./";
    require("$classPath${class}.php");
});

$examenFacil = new ExamenFacil();
$examenFacil->intentar('Nataly');

$examenChungo = new ExamenChungo();
$examenChungo->intentar('Filberto');

$examenHP = new ExamenHP();
$examenHP->intentar('Misa');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Objetos</title>
</head>
<body>
    <p>Nota del examen facil: <?=$examenFacil->obtenerNota()?></p>
    <p>Nota del examen chungo: <?=$examenChungo->obtenerNota()?></p>
    <p>Nota del examen hp: <?=$examenHP->obtenerNota()?></p>
</body>
</html>