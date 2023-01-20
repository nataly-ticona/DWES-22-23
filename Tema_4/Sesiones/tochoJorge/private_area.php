<?php
session_start();

if(!isset( $_SESSION['user']) ){
    header('Location: login.php?error=Area privada&url='.$_SERVER['REQUEST_URI']);
    exit;
}


?>