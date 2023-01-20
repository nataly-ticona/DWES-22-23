<?php 
    

    function pintaCabecera(...$array){
        //no se muestra bien porque no tiene el table, pero se guarda como archivo html 
        $cadena="<tr>";
        foreach ($array as $value) {
            $cadena.="<th>$value</th>";
        }
        $cadena.="</tr>";
        return $cadena;
    }

    //pintaCabecera('hora', 'lunes', 'martes', 'miercoles', 'jueves', 'viernes');

    function pintaContenido($filas, $columnas){
        $cadena='';
        
        for ($i=0 ; $i < $filas; $i++) { 
            $cadena.="<tr>";
                for ($j=0; $j < $columnas; $j++){ 
                    $cadena.="<td></td>";
                }
            $cadena.="</tr>";
        }
        return $cadena;
    }
    //echo '<table>' . pintaContenido(2,5) . '</table>';

    function pintaHorarioVacio($cabecera, $contenido){
        $array=[$cabecera, $contenido];
        $horario= array_walk($array, function($op, $key){
            ?><?=$op?><?php
        });
        echo '<table>'.$horario.'</table>';
    }
    $cabecera=pintaCabecera();
    $contenido=pintaContenido(13,6);
    pintaHorarioVacio($cabecera, $contenido);
?>