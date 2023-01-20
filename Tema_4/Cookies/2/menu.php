<?php

$nombre='anonimo';
    if (isset($_COOKIE['texto'])) {
        $nombre=$_COOKIE['texto'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <header>
        <ul>
            <li><a href="./pag1.php">Pagina 1</a></li>
            <li><a href="./pag2.php">Pagina 2</a></li>
            <li><a href="./config.php">Config</a></li>
            <li ><?=$nombre?></li>
        </ul>
    </header>
</body>
</html>