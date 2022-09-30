
<?php

$array=[
    ["Cero"],
    ["Primera"],
    ["Segunda"]
];

$array2=[
    ["casa"],
    ["perro"]
];
echo print_r($array);

//estamos poniendo el rango que queremos coger 
/*1 del prinicipio y el segundo 1 es cuantas variables del array 
queremos quitar. Si queremos eliminar 3 elementos a partir del 2 numero 
ponemos 2,3*/
array_splice(
    $array,1,1,$array2
);
echo "<pre>";
echo  print_r($array);
echo "</pre>";
/*crea una lista a prtir de la edad de la clase, 
una vez creada elimina aquellos que tengas 23 sustituyelos por su color de 
camiseta de la lista. */
?>