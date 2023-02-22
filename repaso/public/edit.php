<!-- Privada: /perfil -->
<?php 
require ("../src/init.php");
//si la sesion no esta iniciada te manda al login
if (!isset($_SESSION["nombre"]) || $_SESSION["nombre"]=="") {
    //despues de enviarlo guardo el redirect a donde estabas
    header("Location: login.php?redirect=edit.php");
    die();
}
if (isset($_POST['actualizar'])) {
    //update de la informacion de solo la textarea
    $DB->ejecuta(
        "UPDATE usuarios SET descripcion = ? WHERE id = ?", $_POST['descripcion'], $_SESSION['id']
    );

    //esto tendria que estar en config, es el proceso de la imagen
    if(isset($_FILES['imagen'])) {
        $nombreTmp = $_FILES['imagen']['tmp_name'];
        $nombre = $_FILES['imagen']['name'];
        $tipo = $_FILES['imagen']['type'];
        if($tipo == "image/png" || $tipo == "image/jpeg") {
            if($_FILES['imagen']['error'] == 0){
                // Mover el fichero a su posición final
                move_uploaded_file($nombreTmp, "upload/perfiles/".$_SESSION['id'].".png");
                // Actualizar la base de datos
                $DB->ejecuta(
                    "UPDATE usuarios SET img = ? WHERE id = ?",
                    "upload/perfiles/".$_SESSION['id'].".png",
                    $_SESSION['id']
                );
            }
        } else {
            echo 'error de subir el archivo';
        }
    }
    //validar que sea una imagen
}

$DB->ejecuta(
    "SELECT *
    FROM usuarios
    WHERE id = ?",
    $_SESSION['id']
);

$usuario = $DB->obtenElDato();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/edit.css">
    <title>Document</title>
</head>
<body>
    <h1>Aqui va el formulario para editar tu perfil</h1>
    <h3>Esta es tu info</h3>
    <h4><?=$usuario['nombre']?></h4>
    <form action="" method="post" enctype="multipart/form-data">
        <?php if($usuario['img'] != "") { ?>
            <img src="<?=$usuario['img']?>" /><br>
        <?php } ?>
        Imagen : <input type="file" accept="image/png,image/jpeg, image.jpg" name="imagen"><br>
        <textarea name="descripcion" id="descripcion" cols="30" rows="10"><?=$usuario['descripcion']?>
        </textarea>
        <br>
        <input type="submit" name='actualizar' value="Actualizar">
    </form>
</body>
</html>