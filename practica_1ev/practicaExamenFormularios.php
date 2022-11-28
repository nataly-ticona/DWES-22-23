<?php

/*
Debes definir una estructura adecuada para este problema
*/
$tablero = [];
$errores = [];
$x=$_POST['posx'];
$y=$_POST['posy'];;

if ($_POST['submit']) {
    if(!isset($_POST['posx']) || $_POST['posx'] = ""){
        $errores['x']='no puedes estar vacio X';
    }elseif ($_POST['posx'] <1 || $_POST['posx'] >3){
        $errores['x']='Los numeros tienen que estar entre 1 y 3';
    }else{
        $x=$_POST['posx'];
    }
    
    if(!isset($_POST['posy']) || $_POST['posy'] = ""){
        $errores['y']='no puedes estar vacio Y';
    }elseif ($_POST['posy'] <1 || $_POST['posy'] >3){
        $errores['y']='Los numeros tienen que estar entre 1 y 3';
    }else{
        $y=$_POST['posy'];
    }
}

?>

<html>
<head>
  <link rel="stylesheet" type="text/css" media="all" href="css/estilo.css">
  <title>3 en Raya</title>
</head>
<body>

    <?php
    if (count($tablero)<4) {
        ?>
        <table>
            <?php
                for ($i=0; $i < 3; $i++) {
                    ?>
                    <tr>
                    <?php 
                    for ($j=0; $j <3 ; $j++) { 
                        if ($x-1==$i && $y-1==$j) {
                            $tablero[$i][$j]=$_POST['turno'];

                            echo '<td>'.$tablero[$i][$j].'</td>';
                        }else{
                            $tablero[$i][$j]=' ';
                            echo '<td> __ </td>';
                        }
                    }
                    ?>
                    </tr>
                    <?php
                }
            ?>
        </table>
        <pre>
        <?=print_r($tablero)?>
        <p> <?=print_r($errores)?></p>
        </pre>
        <?php
    }elseif(count($errores)==0){
        // //guardado
        // file_put_contents("puntuacion.csv","$tema;$hora;$min\n",FILE_APPEND);
        // //redirect, el header no puede escribir nada antesd e la cabecera (como las cookies)
        // header("Location: practicaExamenFormularios.php");
        // exit();
        // ?>
        <div class="victoria">
        Jugador AAA ha ganado
        <a href="">Juego nuevo</a>
        </div>
        <?php
    }
    ?>

  <form action="./practicaExamenFormularios.php" method="post">
      turno:
      <select name="turno">
        <option value="X">X</option>
        <option value="O">O</option>
      </select>
      <br>
      x: <input type="text" name="posx" value=<?=$x?>><br>
      y: <input type="text" name="posy" value=<?=$y?>><br>
      <button type="submit" name="submit">Jugar</button>
  </form>
</body>
</html>