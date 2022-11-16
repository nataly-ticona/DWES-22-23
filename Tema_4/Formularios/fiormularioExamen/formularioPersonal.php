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
    header{
        font-size: 10px;
        text-align: center;
    }
    #contenedor{
        width: 90%;
        margin: 0 auto;
    }
    input, select {
        margin: 2px;
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
                
                    $p->pintarInputGeneral('text','nombre');
                    $p->pintarInputGeneral('text','apellido');
                    $p->pintarInputGeneral('email','correo');
                    $p->pintarInputGeneral('password','psswd');
                    $p->pintarInputGeneral('tel','telefono');
                    $p->pintarInputRadio('genero','mujer','hombre');
                ?>
            <div id="fechaN">
                <?php
                 $p->pintarInputGeneral('number','dia');
                 $p->pintarInputSelect('meses','enero','febrero','marzo','abril','mayo','junio','julio','agosto','septiembre','octubre','noviembre','diciembre');
                 $p->pintarInputGeneral('number','anio');
               $p->validar();
               $p->esValido();
               $p->getNombre();
                ?>
            </div>
            <input type="submit" value="enviar">
            
        </form>
    </fieldset>
    </div>
</body>
</html>