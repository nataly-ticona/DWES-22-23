<?php
    $tablero=iniciarSopaLetras($tablero, 6, 4);
    pintarTablero($tablero);
    colocarPalabraHorizontal($tablero, 'cabeza');
    // colocarPalabraVertical();


    function iniciarSopaLetras($tablero, $f, $c){
        $tablero=[];
        for ($i=0; $i < $f; $i++) {
            for ($j=0; $j < $c; $j++) { 
                $tablero[$i][$j]=chr(rand(69,79));             
            }
        }
        return $tablero;
    }

    function pintarTablero($tablero){
        ?>
        <table><?php
        foreach ($tablero as $fila) {
            ?><tr><?php
            foreach ($fila as $valor) {
                ?><td><?=$valor?></td><?php
            }
            ?></tr><?php
        }        
        ?>
        </table>
        <br>
        <?php
    }

    function colocarPalabraHorizontal($tablero,$palabra){
        $posicion=rand(0,count($tablero)-1);
        $contador=0;
        for ($i=0; $i < count($tablero); $i++) { 
            for ($j=0; $j < count($tablero[$i]); $j++) { 
                if ($posicion==$j){
                    $tablero[$i][$j]=$palabra[$contador];    
                $contador++;
                }

            }
        }
        pintarTablero($tablero);
    }

?>  
<style>
    table, tr, td{
        border: 1px solid blue;
        border-collapse: collapse;
    }
</style>