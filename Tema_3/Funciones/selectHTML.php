<?php
function generarArray(array $opciones, int $selected=-1){
    ?>
    <!-- abrimos el select-->
    <select name='ciudad' >
    <option value=''></option>
    <?php
        array_walk($opciones,function ($valor,$clave,$selected){
            $sel= ($valor==$selected)?'selected':'';
            echo "<option value='$valor' $sel>$clave</option>";
        },$selected);
    ?><!-- cerramos el select-->
        </select>
    <?php
}
   
    $opciones=[
        "Madrid" => 28,
        "Sevilla" => 17,
        "Cáceres" => 56
    ];
    generarArray($opciones,28);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 13</title>
</head>
<body>

</body>
</html>