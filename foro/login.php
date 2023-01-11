<?php
//conexion BDs
require("./database.php");

//sesiones siempre de las primeras cosas
session_start();

//si la sesion['name_user'] ya esta se redirige directamente a la pagina principal
if (isset($_SESSION['user'])) {
    header("Location: principal.php");
    die();
}

function clean_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$name='';
$email = "";
$pass = "";
$url = "";
$errorList = [];

if (isset($_GET['url'])) {
    $url = $_GET['url'];
}else if (isset($_POST['url'])) {
    $url = $_POST['url'];
}



if(isset($_POST["submit"])) {
    //limpiamos el email
    if(isset($_POST["email"])){
        $email = clean_input($_POST["email"]);
    }
    //validamos el email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errorList[] = "Usuario inválido";
    }

    //limpiamos el pass
    if(isset($_POST["password"])){
        $password = clean_input($_POST["password"]);
    }
    //validamos el pass
    $consulta = $mbd->prepare("SELECT * FROM usuarios WHERE email = :email LIMIT 1");
    $consulta->execute([':email' => $email]);
    $user = $consulta->setFetchMode(PDO::FETCH_ASSOC); 
    $_SESSION['user']=$user;
    

    //si esta todo validado le enviaremos a la pagina que el queria o sino a la principal
    if( isset($user) && password_verify($password, $user['pass']) ){
        $_SESSION["email"] = $email;
        if ($url != "") {
            header('Location: .'.$url);
        }else{
            header('Location: principal.php');
        }
        exit;
    }else{
        $errorList[] = "Clave errónea";
    }

    //obtenemos el nombre de usuario
    $consulta2 = $mbd->prepare("SELECT name FROM usuarios WHERE email = :email");
    $consulta2->execute([':email' => $email]);
    

    if($_COOKIE['user_name']) {
        $nombre =$_COOKIE['user_name'];
    }else{
        header('Location: login.php');
    }
}


if(isset($_GET["error"])){
    $errorList[] = $_GET["error"];
}

?>
<html>
<head>
    <link rel="stylesheet" type="text/css" media="all" href="./css/login.css">
    <title>Inicio de sesion</title>
</head>

<body>
    <div id="login">
        <form action="login.php" method="post" class="login">
            <p>
                <label for="email">Email:</label>
                <input type="text" name="email" id="email" value="<?=$email?>">
                <input type="hidden" name="url" id="url" value="<?=$url?>">
            </p>

            <p>
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" value="">
            </p>

            <?php if (count($errorList)>0) { ?>
            <p>
                <?php foreach($errorList as $error) { ?>
            <div class="error"><?= $error ?></div>
            <?php } ?>
            </p>
            <?php }?>

            <p class="login-submit">
                <label for="submit"></label>
                <button type="submit" name="submit" class="login-button">Login</button>
            </p>
        </form>
        <p>¿No tiene cuenta? <a href="./registro.php">Registrate</a></p>
    </div>
    
</body>

</html>