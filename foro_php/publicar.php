<?php 
//para hacer un comentario necesitamos iniciar sesion primero
require ('private_area.php');
require("./database.php");

// foreach ($_POST as $key => $value) {
//     echo $key . ' -> '.$value .'  ';
// }

function clean_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$titulo = "";
$contenido = "";
$name = $_COOKIE['user_name'];
$fecha;
$errorList = [];

if(isset($_POST["submit"])) {
    //limpiamos el titulo
    if(isset($_POST["tituo"])){
        $titulo = clean_input($_POST["titulo"]);
    }else{
        $errorList[] = "Titulo invalido";
    }

    //limpiamos el contenido
    if(isset($_POST["contenido"])){
        $contenido = clean_input($_POST["contenido"]);
    }else{
        $errorList[] = "Contenido invalido";
    }
    

    if( isset($titulo) && isset($contenido)  ){
        //insertamos los datos en la base de datos
        $insert = $mbd->prepare("INSERT INTO publicacion (name, titulo, contenido, fecha) VALUES (:name, :titulo, :contenido, :fecha)");

        $fecha=date_create()->format('Y-m-d H:i');
        echo $name;
        if($insert->execute(array(':name'=>$name, ':titulo'=>$titulo, ':contenido'=>$contenido, ':fecha'=>$fecha))){
            //redireccionamos al usuario a principal para que vea la publicacion
            header('principal.php');
            die();    
        }


        
    }else{
        $errorList[] = "Faltan datos o datos erroneos";
    }

}


if(isset($_GET["error"])){
    $errorList[] = $_GET["error"];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/publicar.css">
    <title>Crear publicacion</title>
</head>
<body>
    <header>
        <?php include ('./menu.php');?>
    </header>
    <main>
        <div id="contenedor">
            <form action="publicar.php" id="formulario" method="post">
                <input type="text" name="titulo" id="titulo" placeholder="Titulo" value="<?=$titulo?>">
                <br><br>
                <textarea name="contenido" id="contenido" value="<?=$contenido?>" cols="30" rows="10" placeholder="Escribe aqui tu publicacion"></textarea>
                <br><br>
                <!--Errores de datos-->
                <?php if (count($errorList)>0) { ?>
                    <p>
                        <?php foreach($errorList as $error) { ?>
                            <div class="error"><?= $error ?></div>
                        <?php } ?>
                    </p>
                <?php 
                  }?>
                <button type="submit" name='submit' value="publicar"> Publicar
            </form>
        </div>
    </main>
</body>
</html>

