<?php

session_start();
session_destroy();

header("Location: publico.php");

?>