<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal</title>
</head>
<body>
    <fieldset>
        <legend>Datos personales</legend>
        <form action="" method="post">
            <label for="telefono"> Telefono: </label>
            <input type="tel" name="telefono" id="telefono" size="9" pattern="[0-9]{9}" placeholder="ej: 012345678">
            <br>
            <label for="genero"> Genero: </label>
            <input type="radio" name="genero" id="generoM">Mujer
            <input type="radio" name="genero" id="generoH">Hombre
            <input type="radio" name="genero" id="generoO">Otro
            <br>
            <label for="fechaN"> Fecha de nacimiento: </label>
            <input type="number" name="dia" id="dia" min="1" max="31" size="1" placeholder="dia">
            <select name="mes" id="mes">
            <?php //imprimimos los meses del año con un array_walk
            $meses=['enero','febrero','marzo','abril','mayo','junio','julio','agosto','septiembre','octubre','noviembre','diciembre' ];
            array_walk($meses,function($op,$k,$data){ //la k es solo para que funcione data, data es lo que ha puesto el usuario
                $sel = ($op==$data)?"selected":"";
                echo "<option value='$op' $sel>$op</option>";
            },$_POST['mes']); //el valor guardardo es el ultimo seleccionado, por eso se manda como parametro
            ?>
            </select>
            <input type="number" name="anio" id="anio" min="1900" max="2004" size="2" placeholder="año">
            <br>
            <input type="submit" value="enviar">
        </form>
    </fieldset>
</body>
</html>