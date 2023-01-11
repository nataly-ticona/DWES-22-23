<?php 

require("./database.php");
session_start();

echo $_SESSION["user"];
if (isset($_SESSION['user'])) {
    header("Location: principal.php");
    die();
}

$nombre = "";
$email = "";
$pass = "";
$errorList = [];

$nombreValido = false;
$emailValido = false;

function clean_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }


if(isset($_POST["submit"])) {
    //limpiamos el nombre
    if(isset($_POST["nombre"])){
        $nombre = clean_input($_POST["nombre"]);
    }else{
        $errorList[] = "Nombre de usuario es un campo obligatorio";
    }

    //validamos el nombre
    $consulta = $mbd->prepare("SELECT * FROM usuarios WHERE name = :name LIMIT 1");
    $consulta->execute([':name' => $nombre]);
    $valido1 = $consulta->fetchColumn(); 

    
    if($valido1 >0){ //si devuelve un 1 es que es true y sale los errores sino se hace un insert
        $errorList[] = "Nombre de usuario ya existente $valido1";
    }else{
        setcookie("user_name", $nombre);
        $nombreValido = true;
    }

//-------------------------------------------------
    //limpiamos el email
    if(isset($_POST["email"])){
        $email = clean_input($_POST["email"]);
    }

    //validamos el email
    $consulta2 = $mbd->prepare("SELECT email FROM usuarios WHERE email = :email LIMIT 1");
    $consulta2->execute([':email' => $email]);
    $valido2 = $consulta->fetchColumn(); 

    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errorList[] = "Email mal escrito";
    }else if($valido2 >0){
        $errorList[] = "Email ya existente";
    }else{
        $emailValido = true;
    }
//---------------------------------------------
    //limpiamos el pass
    if(isset($_POST["password"])){
        $password = clean_input($_POST["password"]);
    }else{
        $errorList[] = "Contraseña es un campo obligatorio";
    }
    
//------------------------------------------
    if ($nombreValido && $emailValido) {
        $insert = $mbd->prepare("INSERT INTO usuarios (name, email, password) VALUES (:name, :email, :pass)");

        if($insert->execute(array(':name'=>$name, ':email'=>$email, ':pass'=>$pass))){
            //redireccionamos al usuario a principal para que vea la publicacion
            header('Location: principal.php');
            exit;
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de usuario</title>
</head>
<body>
    <header>
        <?php include ('./menu.php'); ?>
    </header>
    <main>
        <div id="registro">
            <form action="./registro.php" method="post" id="formulario">
                <p>
                    <label for="name_user">Nombre de usuario</label><br>
                    <input type="text" name="nombre" id="nombre" value="<?=$nombre?>">
                </p>
                <p>
                    <label for="email">Email</label><br>
                    <input type="email" name="email" id="email" value="<?=$email?>">
                </p>
                <p>
                    <label for="pass">Contraseña</label><br>
                    <input type="password" name="pass" id="pass" value="<?=$pass?>">
                </p>
                <?php 
                    if (count($errorList)>0) {
                         foreach ($errorList as $key => $value) {
                             ?>
                             <p> <?=$value?></p>
                             <?php
                         }
                     }
                ?>
                <p class="registro-submit">
                    <label for="submit"></label>
                    <button type="submit" name="submit" class="registro-button">Registrarse</button>
                </p>
            </form>
        </div>
    </main>
</body>
</html>