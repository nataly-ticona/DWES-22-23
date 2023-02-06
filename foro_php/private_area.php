<?php 

    session_start();
    if( !isset($_SESSION['user']) ){
        header('Location: login.php?error=necesita iniciar sesion&url='.$_SERVER["REQUEST_URI"]);
        exit;
    }

?>