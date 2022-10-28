<?php
spl_autoload_register(function ($class) {
    $classPath = "./";
    echo "Autoload llamado";
    require("$classPath${class}.php");
});

//  require ('./singleton.php');
//  require ('./interfaz.php');
//  require ('./JuegoInterfaz.php');

$prueba2=Config::singleton();
$prueba3= new BancoMalvado();
$prueba4= new BitCoinConan();
$prueba5= new BancoMaloMalisimo();
$mago1= new MagoBlanco();

//polimorfismo: crear un objeto aletorio y usar los metodos sin tener que saber cual es el objeto
$clases=[new BancoMalvado(), new BitCoinConan(), new BancoMaloMalisimo()];

$prueba6= $clases[rand(0,2)];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios </title>
</head>
<body>
    <p>
        <?php
        echo $prueba2->getNombre();
        ?>
    </p>
    <div>
        <p>
        <?php
        
        echo $prueba3->estableceConexión(); //el 1 es del true
        echo $prueba3->compruebaSeguridad();
        echo $prueba3->pagar('dasdsds',32);
        ?>
        </p>
        <p>
        <?php
        echo $prueba4->estableceConexión(); //el 1 es del true
        echo $prueba4->compruebaSeguridad();
        echo $prueba4->pagar('maaaa',87);
        ?>
        </p>

        <p>
        <?php
        echo $prueba5->estableceConexión(); //el 1 es del true
        echo $prueba5->compruebaSeguridad();
        echo $prueba5->pagar('siguiente',87);
        ?>
        </p>
        <p>
        <?php
        echo $prueba6->estableceConexión(); //el 1 es del true
        echo $prueba6->compruebaSeguridad();
        echo $prueba6->pagar('siguiente',87);
        ?>
        </p>
        <p>
        <?php
        echo $mago1->atacar(); 
        echo $mago1->defender();
        $mago1->setX(2);
        $mago1->setY(4);
        echo $mago1->getY();
        echo $mago1->getX();
        ?>
        </p>
</div>
    
</body>
</html>