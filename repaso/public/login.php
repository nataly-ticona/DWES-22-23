<!-- Publica: /login -->
<?php 
require("../src/init.php");
//require("private_area.php");
//recoger losd datos del post

$title="login";
$pageHeader="Iniciar sesion";
$pageId="login";


ob_start(); //todo lo que escriba ahora no se escribira, mandamos todo esto al template

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
        }

        if (isset($_GET['redirect'])) {
            header("Location: " . $_GET['redirect']);
            die();
        }else{
            header("Location: listado.php");
            die();
        }

    }else{
        //mostramos el error que salga !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
        echo "no va :')";
        echo print_r($user);
    }

    if (isset($_GET['redirect'])) {
        header("Location: " . $_GET['redirect']);
        die();
    }else{
        header("Location: listado.php");
        die();
    }
    
}

?>
<style>
    main{
        
        padding-top: 5px;
        border-radius: 10px;
    }
    form{
        padding-bottom: 30px;
    }
    form > label > input{
        background-color: gray;
    }
</style>
<form action="login.php" method="post">
    <label for="nombre" class="input-form">User name:
    <input type="text" name="nombre" size="10" value="<?=$nombre?>">
    </label><br>
    <label for="passwd" class="input-form">Password:
    <input type="password" name="passwd" size="10" value="<?=$passwd?>">
    </label><br>
    <label for="recuerdame" class="input-form">recuerdame
    <input type="checkbox" name="recuerdame">
    </label> <br>
    <input type="submit" name="enviar" value="enviar">
</form>
<?php 

$content=ob_get_clean(); 

require('./template.php'); 
?>