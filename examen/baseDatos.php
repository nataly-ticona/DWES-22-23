<!-- mariadb -u natalyExamen -p bdExamen 
 -->
<?php
try {
    $nombre = 'mysql:host=localhost;dbname=bdExamen';
    $usuario = 'natalyExamen';
    $psswd='1234';
    $mbd = new PDO($nombre,$usuario,$psswd);
    
    $insert = $mbd->prepare("INSERT INTO Logs (navegador, timestamp) VALUES (:navegador, :tiempo)");
    
    echo '<p>Hola mundo</p> </br>';
    $navegador=$_SERVER['HTTP_USER_AGENT'];

    $date = new DateTimeImmutable();
    $tiempo = $date->getTimestamp();

    if($insert->execute(array(':navegador'=>$navegador, ':tiempo'=>$tiempo))) {
        echo "Se ha creado el nuevo registro!";
    }
    $baseDatos = null;
    $mbd = null;

} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "\n";
    die();
}?>