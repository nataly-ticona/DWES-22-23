<?php 
try {
    $options =[
        PDO::ATTR_EMULATE_PREPARES =>false,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ];

    $nombre = 'mysql:host=localhost;dbname=mibasedatos;charset=utf8mb4';
    $usuario = 'nataly';
    $psswd='1234';
    $mbd = new PDO($nombre,$usuario,$psswd);

    

} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "\n";
    die();
}

?>