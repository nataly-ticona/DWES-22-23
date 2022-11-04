<?php
$tema="";
$hora=date('h');
$min=date("i");

$opcionesMinuto= [0,15,30,45];

$mayores=array_filter($opcionesMinuto,function($m){
    //lo devuelve si m es mayor que min
    global $min;
    return $m > $min; 
});

if(empty($mayores)){
    $min=0;
    $hora++;
}else{
    //saca el primero
    $min=array_shift($mayores);
}


//ver si el usuario ha enviado la info, con los name
$errores=[];

if(isset($_POST['enviar'])){
    //verificar errores, falta que la hora no sea menor de la actual
    if(isset($_POST['tema']) && $_POST['tema'] != ""){
        $tema=$_POST['tema'];
    }else{
        $errores['tema']='no puedes estar vacio';
    }

    if(isset($_POST['hora']) && $_POST['hora'] != ""){
        $hora=$_POST['hora'];
    }else{
        $errores['hora']='no puedes estar vacio';
    }

    if(isset($_POST['min']) && $_POST['min'] != ""){
        $min=$_POST['min'];
    }else{
        $errores['min']='no puedes estar vacio';
    }


    if(count($errores)==0){
        //guardado
        file_put_contents("tema.csv","$tema;$hora;$min\n",FILE_APPEND);
        
        //redirect, el header no puede escribir nada antesd e la cabecera (como las cookies)
        header("Location: listado.php");
        exit();
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Musica</title>
    <style>
        .error{
            color: red;
            font-size: 0.7em;
        }
    </style>
</head>
<body>
    <h1>never ending party</h1>
    <form action="" method="post">
        <label for="cancion">Tema</label>
        <input type="text" name="tema" size="10" id="tema" value="<?=$tema?>" placeholder="tema musica"><br>      
        <!--imprimir el error-->
        <?php 
        if(isset($errores['tema'])){
            echo '<div class="error">';
            echo '<p>' . $errores['tema'] . '</p>';
            echo '</div>';
        }
        ?>
        

        <label for="hora">Hora</label>
        <input type="number" name="hora" id="hora" value="<?=$hora?>" size="2" max="23" min="0" placeholder="10">
        <?php 
        if(isset($errores['hora'])){
            echo '<div class="error">';
            echo '<p>' . $errores['hora'] . '</p>';
            echo '</div>';
        }
        ?>

        
        <label for="min">Minuto</label>
        <select name="min" id="min" >
            <?php 
            array_walk($opcionesMinuto,function($op,$k,$data){ //la k es solo para que funcione data, data es lo que ha puesto el usuario
                $sel = ($op==$data)?"selected":"";
                echo "<option value='$op' $sel>$op</option>";
            },$min);
            ?>
            
        </select>
        <?php 
        if(isset($errores['min'])){
            echo '<div class="error">';
            echo '<p>' . $errores['min'] . '</p>';
            echo '</div>';
        }
        ?>

        <input type="submit" value="enviar" name="enviar">
    </form>
</body>
</html>