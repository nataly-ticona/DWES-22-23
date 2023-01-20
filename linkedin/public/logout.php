<!-- Privada: /logout -->
<?php 
require("../src/init.php");

if (isset($_SESSION["nombre"])) {
    $_SESSION["nombre"] = "";
    unset($_SESSION["nombre"]);
}

session_destroy();
//no hace falta poner la cookie pero funciona tambien
setcookie("PHPSESSID", null, time()-1);



header("Location: listado.php");
die();
?>