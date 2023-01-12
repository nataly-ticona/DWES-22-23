<?php 
//si quitas ../src/ te va igual porque empieza con la pagina
require("config.php");
require("../src/DWESBaseDatos.php");

require("../vendor/autoload.php");


$DB = DWESBaseDatos::obtenerInstancia();
$DB->inicializa(
    $CONFIG['db_name'],
    $CONFIG['db_user'],
    $CONFIG['db_pass']
);

?>
