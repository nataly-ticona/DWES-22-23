<?php
//array merge
$personas1=["Marc","Giro",9876,"m@gmail.com"];
$personas2=["Paco","Mercelo",7654,"p@gmail.com"];
$personas3=["Fulgencia","Mos",2634,"f@gmail.com"];
$personas4=["Hej","Hash",8790,"h@gmail.com"];
$personas=array_merge($personas1,$personas2,$personas3,$personas4);

//array_replace_recursive
$edades=[ "25","22 ","24","29","26","23","20","19","26","19","20","23"];
$colores=["25","morado","24","29","26","23","azul","rosa","26","rojo","verde","23"];
$mayor=["25","morado","24","29",["mayor",26],"23","azul","rosa",["mayor",26],"rojo","verde","23"];
$todo=array_replace_recursive($edades,$mayor,$colores);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
</head>
<body>
    <table>
        <?php
            $count=1;
            echo "<pre> ". print_r($personas) ."</pre>";
            for ($j=0; $j < sizeof($personas) ; $j++) {
                if($count==0){
                    echo "<tr>";
                } 
                echo "<td> $personas[$j] </td>";
                if($count==4){
                    echo "</tr>";
                    $count=0;
                } 
                $count++;
            }
        ?>
    </table>
    <div>
        <?php
        echo "<pre>";
        print_r($todo);

        echo "</pre>";?>
    </div>
</body>
</html>