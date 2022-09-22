<?php
$i=4;
$j=0x0000FF;
$p=255;
$cc=1.234e10;
$bb=0b010101010101;
//get_defined_vars
/*sirve para almacenar todos los datos 
antes puestos en una nueva variable que se
guardara en defined_vars como un array

ejemplo
$p=255;
$cc=1.234e10;
$bb=0b010101010101;
$mis_variables = get_defined_vars();
 */
echo "<h1>print_r(get_defined_vars());</h1>";
print_r(get_defined_vars());
echo "<br>";
echo "te has tragado el binario";
echo "<br>";
echo gettype($bb);
echo "<br>";
echo $bb;
echo "<br><h2>VAR_DUMP</h2>";

//var_dump
//te muestra la estructura de los valores
//da igual el tipo de variable
$i=3;
var_dump($i);
$i="10 cadena";
var_dump($i);
$i=(int)$i;
var_dump($i);
$i=(boolean)$i;
var_dump($i);
//si i es un boolean imprime lo primero, sino lo segundo
echo (is_bool($i))?'si':'no';
//ISSET
//para saber si algo esta definido, si uno de ellos no lo esta devuelve un false 
echo isset($i,$jjo);


//CADENAS
/*con comillas dobles lee las variables
con comillas simples no se pueden leer, se imprime lo que pone*/
echo "<h3> Cadenas</h3>";
$num=2;
$cadena='Hola';
echo $cadena;
$cadenaEncadena="Resuelve algo:$cadena";
echo $cadenaEncadena;
//cadena que es multlinea pero se guarda como una linea
$quijote=<<<EOS
bfbsebfske
sdfsdf
sdfsd
EOS;

echo $quijote;


//Como separar una variable en una cadena
echo "sadasds_$isdasd<br>";
echo "sadasds_{$i}sdasd";
echo "<br>";
//para coger una letra de una cadena
echo $quijote[8];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>