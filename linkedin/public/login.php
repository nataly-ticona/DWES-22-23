<!-- Publica: /login -->
<?php 
require("../src/init.php");
//require("private_area.php");
//recoger losd datos del post



//creamos otra pagina para almacenar el token 
if (isset($_POST["enviar"])) {
    $nombre = $_POST["nombre"];
    $passwd = $_POST["passwd"];
    $recuerdame = $_POST["recuerdame"];

    //consulta a base de datos por el usuario
    $DB->ejecuta("SELECT id, nombre, passwd FROM usuarios WHERE nombre = ?", $_POST["nombre"]);

    $user = $DB->obtenElDato();

    //verificar la contraseña, es user[0]['passwd'] porque user es un array que contiene un array que son los datos del usuario 
    
    if(password_verify($_POST["passwd"], $user['passwd'])){
        //la sesion almacenara el id y el nombre del usuario
        $_SESSION['id'] = $user['id'];
        $_SESSION['nombre'] = $user['nombre'];
        print_r($_SESSION );
        // si ha pedido recuerdame: 
        if(isset($_POST['recuerdame']) && $_POST['recuerdame'] == 'on'){
            // - generamos token 
            $token = bin2hex(openssl_random_pseudo_bytes(LONG_TOKEN));

            // - guardamos el token 
            $DB->ejecuta("INSERT INTO tokens (id_usuario,valor) VALUES (?, ?)", $_SESSION['id'], $token);
            //hay que hacer un update de expiracion si la persona vuelve a logearse

            // - creamos una cookie con el valor del token
            //"secure"  => true,
            setcookie(
                "recuerdame", 
                $token, 
                ["expires" => (time() + (7 * 24 * 60 * 60)), "httponly" => true 
                ]
            );
                // header("Location: listado.php");
                // exit();
        }

        // header("Location: listado.php");
        //     exit();
    }else{
        //mostramos el error que salga !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
        echo "no va :')";
        echo "<pre>" . print_r($user) . "</pre>";
    }

    if (isset($_GET['redirect'])) {
        header("Location: " . $_GET['redirect']);
        die();
    }
    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesion</title>
</head>
<body>
    <form action="login.php" method="post">
        <label for="nombre">User:</label>
        <input type="text" name="nombre" id="" value="<?=$nombre?>">
        <input type="password" name="passwd" id="" value="<?=$passwd?>">
        <input type="checkbox" name="recuerdame" id="" > recuerdame
        <input type="submit" name="enviar" value="enviar">
    </form>
</body>
</html>