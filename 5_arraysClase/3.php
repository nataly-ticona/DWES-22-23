<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <div id="walk">
        <p>Array_walk</p>
        <?php
        
        ?>
    </div>
    <div>
        <p></p>
    <?php
    //para crear contraseñas
    echo password_hash("1234",PASSWORD_DEFAULT);
    //Verifica una contraseña. Te devuelve un 1 si es true 
    echo password_verify("1234",'$2y$10$41e1Ydelrg89ytlfp069wOsM9mUNBbTaYWR439u/jxifxjs5Lt7IW');
    ?>
    </div>
    
</body>
</html>