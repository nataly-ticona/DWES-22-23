<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
    <fieldset>
        <legend>Formulario</legend>
        <form action="Usuario.php" method="post">
            <label for="nombre">Nombre: </label>
            
            <input type="text" name="nombre" id="nombre" placeholder="Introduce tu nombre"><br>
            <label for="apellido">apellido</label>

            <input type="text" name="apellido" id="apellido" placeholder="Introduce tu apellido"><br>
            <label for="correo">Correo: </label>
            
            <input type="email" name="correo" id="correo" placeholder="Introduce tu correo electrónico"><br>
            <label for="contrasenia">Contraseña: </label>
            
            <input type="password" name="contrasenia" id="contrasenia" placeholder="Introduce tu contraseña"><br>
            <input type="submit" value="Siguiente">

        </form>
    </fieldset>
   
</body>
</html>