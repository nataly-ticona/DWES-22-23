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
    label{
        margin-left: 10px;
        font-weight: bold;
    }
    input, select {
        margin-bottom: 10px;
        text-align: center;
        border-radius: 5px;
    }
    select{
        background-color: white;
    }
    input[type=text], input[type=number] ,input[type=tel], input[type=email]{
        color: green;
    }
    input[type=number]{
        width: 55px;
    }

    .error{
        font-size: 13px;
        padding: 0px;
        color: red;
    }
    input[type=submit]{
        background-color: white;
        border: 0px;
        border-radius: 4px ;
        padding: 4px;
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
                    $f= new Formulario();
                    $f->pintarFormulario();
                    
                    if(isset($_POST['enviar'])){
                        $p->validar();
                        $p->esValido();
                    }
                    /*
                    $p->pintarInputGeneral('text','nombre', $_POST['nombre']);
                    $p->pintarInputGeneral('text','apellido', $_POST['apellido']);
                    $p->pintarInputGeneral('email','correo',$_POST['correo']);
                    $p->pintarInputGeneral('password','psswd');
                    $p->pintarInputGeneral('tel','telefono', $_POST['telefono']);
                    $p->pintarInputRadio('genero','mujer','hombre');
                    $p->pintarInputGeneral('number','dia');
                    $p->pintarInputSelect('mes','enero','febrero','marzo','abril','mayo','junio','julio','agosto','septiembre','octubre','noviembre','diciembre');
                    $p->pintarInputGeneral('number','anio');
                    */
                ?>

            <input type="submit" value="enviar" name='enviar'>
            
        </form>
    </fieldset>
    </div>
</body>
</html>