<?php 
try {
    $options =[
        PDO::ATTR_EMULATE_PREPARES =>false, // La preparación de las consultas no es simulada
                                            // más lento pero más seguro
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Cuando se produce un error
                                                     // salta una excepción
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC  // Cuando traemos datos lo hacemos como array asociativo
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