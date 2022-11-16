<?php
//para archivos en una misma carpeta
 spl_autoload_register(function ($class) {
     $classPath = "./";
     require("$classPath${class}.php");
 });
$p=new Personal($_POST);

?>

<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal</title>
<style>
    body{
        background-color: #B0DDF3;
    }
    header{
        font-size: 10px;
        text-align: center;
    }
    #contenedor{
        width: 50%;
        margin: 0 auto;
    }
    .input{
        margin-left: 10px;
        
    }
    input, select {
        margin-left: 5px;
        text-align: center;
    }
    input[type=text], input[type=number] ,input[type=tel], input[type=email]{
        color: green;
    }
    .error{
        padding: 0px;
        color: red;
        border: 1px solid white;
    }
    
</style>
</head>
<body>
    <header>
        <h1>Registrate para encontrar tu pelicula</h1>
    </header>
    <div id="contenedor">
    <fieldset>
        <legend>Datos personales</legend>
        <form action="" method="post">
                <?php
                    $p->pintarInputGeneral('text','nombre', $_POST['nombre']);
                    $p->pintarInputGeneral('text','apellido', $_POST['apellido']);
                    $p->pintarInputGeneral('email','correo',$_POST['correo']);
                    $p->pintarInputGeneral('password','psswd', $_POST['pswwd']);
                    $p->pintarInputGeneral('tel','telefono', $_POST['telefono']);
                    $p->pintarInputRadio('genero','mujer','hombre');
                ?>
            <div id="fechaN">
                <?php
                 $p->pintarInputGeneral('number','dia');
                 $p->pintarInputSelect('mes','enero','febrero','marzo','abril','mayo','junio','julio','agosto','septiembre','octubre','noviembre','diciembre');
                 $p->pintarInputGeneral('number','anio');
               $p->validar();
               $p->esValido();
               
                ?>
            </div>
            <input type="submit" value="enviar">
            
        </form>
    </fieldset>
    </div>
</body>
</html>