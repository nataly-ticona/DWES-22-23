<?php 
//si quitas ../src/ te va igual porque empieza con la pagina
require("config.php");


require("../vendor/autoload.php");

require("../src/DWESBaseDatos.php");

require("Mailer.php");


$DB = DWESBaseDatos::obtenerInstancia();

$DB->inicializa(
    $CONFIG['db_name'],
    $CONFIG['db_user'],
    $CONFIG['db_pass']
);

//falta la politica de cookies

session_start();

?>
