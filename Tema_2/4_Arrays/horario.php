<?php
$dwec="DWEC";
$dwes="DWES";
$ingl="INGLES";
$empr="EIE";
$diw="DIW";
$daw="DAW";


$dias=["lunes","martes","miercoles","jueves","viernes" ];
$horario=[
    [$dwec,$ingl,$diw,$empr,$dwes],
    [$dwec,$daw,$diw,$daw,$dwes],
    [$dwec,$daw,$diw,$daw,$dwes],
    ["L","I","B","R","E"],
    [$empr,$diw,$dwes,$dwes,$dwec],
    [$empr,$diw,$dwes,$dwes,$dwec],
    [$ingl,$diw,$dwes,$dwes,$dwec]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="horario.css">
    <title>Horario</title>
</head>
<body>
    <table>
        <tr>
            <?php
                for($x=0;$x<count($dias);$x++){
                    echo "<td class='dias'>" . $dias[$x] . "</td>";
                }
            ?>
        </tr>
        <?php
            //Creamos los tr
            for ($i=0; $i < count($horario);$i++) { 
                echo "<tr>";
                    //creamos los td
                    for ($j=0; $j < count($horario[$i]); $j++) { 
                        $n=1;
                        $i_aux=$i;
                        //bucle para ver cuantas veces se repite una asignatura en el siguiente tr
                        while($horario[$i_aux][$j]==$horario[$i_aux+1][$j]) {
                            $n++;
                            $i_aux++;
                        }
                        //colocar una etiqueta de estilo  
                        if($horario[$i][$j]==$dwec){
                            $estilo=$dwec;
                        }else  if($horario[$i][$j]==$ingl){
                            $estilo=$ingl;
                        }else if($horario[$i][$j]==$dwes){
                            $estilo=$dwes;  
                        }else  if($horario[$i][$j]==$empr){
                            $estilo=$empr;
                        }else if($horario[$i][$j]==$diw){
                            $estilo=$diw;
                        }else if($horario[$i][$j]==$daw){
                            $estilo=$daw;
                        }else{
                            $estilo="otro";
                        }
                        if($horario[$i-1][$j]!=$horario[$i][$j] && $horario[$i][$j]!=null){  
                            echo "<td class='$estilo' rowspan='$n'>". $horario[$i][$j] ."</td>";
                        }
                    } 
                echo "</tr>";
                
            }
        ?>  
    </table>
</body>
</html>
