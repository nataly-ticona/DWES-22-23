<?php
spl_autoload_register(function ($class) {
    $classPath = "./";
    require("$classPath${class}.php");
});

$coches=[];

$coche1 = new Coche(1000, 'BMV', 30);
$coche2 = new Coche(1002, 'Porche', 40);
$cocheRemolque1 = new CocheRemolque(1001, 'Renault', 30, 200);
$cocheGrua1 = new CocheGrua(1003, 'Ford', 20);

$cocheGrua1->cargar($coche2);

$cocheRemolque2 = new CocheRemolque(1005, 'Nissan', 22, 250);
$cocheGrua2 = new CocheGrua(1007, 'Kia', 30);

$cocheGrua2->cargar($cocheRemolque2);

$coches=[$coche1, $cocheRemolque1, $cocheGrua1, $cocheGrua2];

echo '<pre>';
echo  print_r($coches);
echo ' </pre>';
?>
