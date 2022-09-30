<?php
$dwec="DWEC";
$dwes="DWES";
$ingl="INGLES";
$empr="EIE";
$diw="DIW";
$daw="DAW";

$color=[
    "DWEC" => "c1",
    "DWES" => "c2",
    "DIW" => "c3",
    "INGLES" => "c4",
    "EIE" => "c5",
    "DAW" => "c6"
];
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
        $i_aux=0;
            for ($i=0; $i < count($horario);$i++) { 
                echo "<tr>";
                    for ($j=0; $j < count($horario[$i]); $j++) { 
                        $n=1;
                        $i_aux=$i;
                        while($horario[$i_aux][$j]==$horario[$i_aux+1][$j]){
                            $n++;
                            $i_aux++;
                        }
                        // if($horario[$i][$j]==$dwec){
                        //     $estilo=$dwec;
                        // }else  if($horario[$i][$j]==$ingl){
                        //     $estilo=$ingl;
                        // }else if($horario[$i][$j]==$dwes){
                        //     $estilo=$dwes;  
                        // }else  if($horario[$i][$j]==$empr){
                        //     $estilo=$empr;
                        // }else if($horario[$i][$j]==$diw){
                        //     $estilo=$diw;
                        // }else if($horario[$i][$j]==$daw){
                        //     $estilo=$daw;
                        // }else{
                        //     $estilo="otro";
                        // }
                        if($horario[$i-1][$j]!=$horario[$i][$j] && $horario[$i][$j]!=null){   
                            echo "<td class='$estilo' rowspan='$n'>". $horario[$i][$j] ."</td>";
                        }
                    } 
                echo "</tr>";
                
            }
        ?>  
    </table>
    <?php?>
</body>
</html>
