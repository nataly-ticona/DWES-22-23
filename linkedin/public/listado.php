<!-- Publica: /listado/nombre-->
<?php 
require("../src/init.php");
$DB->ejecuta("SELECT * FROM usuarios");
$usuarios= $DB->obtenDatos();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$CONFIG['title']?></title>
</head>
<body>
    <h1>Hola mundo</h1>
    <?php 
        //mostramos solo los datos que queremos, con 2 foreach salen todos los datos
        foreach ($usuarios as $usuario) {
            ?>
            <pre>
            <?php
            print_r($usuario); ?>
            </pre>
             <?php
        }
    ?>
</body>
</html>