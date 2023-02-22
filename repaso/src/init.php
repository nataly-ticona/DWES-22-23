<?php 
    //php de variables secretas 
    require("config.php");
    //no hemos creado estos php pero se necesitan
    require("../vendor/autoload.php");
    require("../src/DWESBaseDatos.php");

    // require("Mailer.php");
    $DB = DWESBaseDatos::obtenerInstancia();
    //iniciamos la base de datos y las varibales son de CONFIG.php
    $DB->inicializa(
        $CONFIG['db_name'],
        $CONFIG['db_user'],
        $CONFIG['db_pass']
    );

    //iniciamos la sesion
    session_start();
?>