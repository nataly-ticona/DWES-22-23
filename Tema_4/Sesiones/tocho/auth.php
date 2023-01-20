<?php

session_start();

spl_autoload_register(function($class){
    $path = "./";
    $file = str_replace("\\", "/", $class);

    require("$path{$file}.php");
});

if (!isset($_SESSION['user'])) {
    $url = Conn::singleton()->encrypt($_SERVER['REQUEST_URI']);
    // $_SERVER['REQUEST_URI']
    header('Location: login.php?error=No implementado&url='.$url);
    exit;
}

?>