
<?php
//ARRAY SPLICE
$array=[
    "Cero",
    "Primera",
    "Segunda"
];

$array2=[
    "casa",
    "perro"
];
echo print_r($array);

//uso
array_splice(
    $array,2,0,$array2
);
echo "<pre>";
echo  print_r($array);
echo "</pre>";
/*crea un array a prtir de estas edades  (25 24 29 26 23 22 20 19*)
una vez creada elimina aquellos que tengan menos de 23 sustituyelos por su color de 
camiseta de la lista. 
 25 24 29 26 23 22 20 19*/ç

/*hacer una clase con el numero de clase y la zona. Luego en el medio del 
array coloca el numero de identificacion de 10 niños en una tabla */
?>

//estamos poniendo el rango que queremos coger 
/*1 del prinicipio y el segundo 1 es cuantas variables del array 
queremos quitar. Si queremos eliminar 3 elementos a partir del 2 numero 
ponemos 2,3*/