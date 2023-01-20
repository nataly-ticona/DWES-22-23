<!-- Publica: /registro -->
<?php 
    require '../src/init.php';
    
    if(isset($_POST['registrar'])){
        $DB->ejecuta(
            "INSERT INTO usuarios(nombre, passwd, correo) VALUES (?,?,?)", 
            $_POST['nombre'],
            password_hash($_POST['passwd'], PASSWORD_DEFAULT),
            $_POST['correo']
        );
    }
    //devuelve si se ha hecho la ejecucion
    $insertado = $DB->getExecuted();

    if ($insertado) {
        //metodo estatico (correo,usuario y texto)
        Mailer::sendEmail(
            $_POST['correo'],
            "nuevo usuario",
            <<<EOL
                Bienvenido {$_POST["nombre"]},
                has hecho bien en registrarte

            EOL
        );
    }

    //protocolos de correo -> SMTP (correo saliente, para enviar correos), POP (de consulta), IMAP (de consulta, mas avanzada)
    //
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
    <!-- como se modifican datos usamos el post -->
    <?php 
    if ($insertado) {?>
        <p>Usuario registrado</p>
    
    <form action="registro.php" method="post">
        <label for="nombre">Nombre </label>
        <input type="text" name="nombre" id="nombre">
        <br><br>
        <label for="passwd">Contraseña </label>
        <input type="password" name="passwd" id="passwd">
        <br><br>
        <label for="correo">Correo </label>
        <input type="email" name="correo" id="">
        <input type="submit" name="registrar" value="Registrar">
    </form>
    <?php
    }
    ?>
</body>
</html>