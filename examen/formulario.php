<?php
$extras=['Caja madera', 'Tarjeta regalo', 'Envio urgente', 'Panecillos'];
$texto='Gracias por su pedido';
$datos;
if(isset($_POST['enviar'])){
    if(isset($_POST['nombre']) && !empty($_POST['nombre'])){
        $datos['nombre']=$_POST['nombre'];
    }else{$errores['nombre']='El campo de nombre esta vacio';}
    
    if(isset($_POST['direccion']) && !empty($_POST['direccion'])){
        $datos['direccion']=$_POST['direccion'];
    }else{$errores['direccion']='El campo de edad esta vacio';}
    
    
    if(isset($_POST['extras']) && !empty($_POST['extras'])){
        $datos['extras']=$_POST['extras'];
    }else{$errores['extras']='El campo de checkbox esta vacio';}   
    
    // if ($errores==0) {
    //  echo  'realizado con exito!';   
    // }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quesos</title>
</head>
<body>
    <form action="" method="post">
        Nombre queso: <input type="text" name="nombre" id="nombre" value="<?=$datos['nombre']?>"> 
        <br>
        <?php 
        if(isset($errores['nombre'])){?> <p><?=$errores['nombre']?></p><?php } 
        ?>
        Direccion <input type="text" name="direccion" id="direccion" value="<?=$datos['direccion']?>">
        <?php 
        if(isset($errores['direccion'])){?> <p><?=$errores['direccion']?></p><?php } 
        ?>
        <br>
        Un checkbox:
        <br>
        <?php 
        foreach ($extras as $value) { 
            if (!empty($datos['extras'])) {
                //si el valor esta en el array del post se pone como seleccionada
                (in_array($value, $datos['extras']))? $selected = "checked": $selected = "";
            }?>
        <input type="checkbox" name="extras[]" id="<?=$value?>" <?=$selected ?> value="<?=$value?>"> <?=$value?> <br>
        <?php }
        if(isset($errores['extras'])){?> <p><?=$errores['extras']?></p><?php } 
        ?>
        <br>
        <input type="submit" name="enviar" value="enviar">

    </form>
</body>
</html>