<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>
    <?php
    $productos = [
        "naranja" => 1.2,
        "manzana" => 1.5,
        "pera" => 1.8,
        "platano" => 0.8,
        "kiwi" => 0.75,
        "macarrones" => 0.5,
        "arroz" => 0.75,
        "salchichas" => 1,
        "patatas_fritas" => 3,
        "paninis" => 1.5,
        "leche_6_uds" => 5,
        "pizza_jamon_serrano" => 2.59,
        "helado_chocolate" => 2.99
    ];
    ?>
    <form action="5.php" method="get">
        <textarea name="compra" id="" cols="30" rows="10" value="<?=$pT?> "></textarea>
        <input type="submit" value="factura">
    </form>
   <p>
   <?php
        $pT=$_GET['compra'];
        //crea un array con los valores separados 
        $productosF= explode(",",$pT );
        $factura=array_intersect($productos,$productosF);
        print_r($factura);
        //intersect_key - las claves comunes de ambos arrays


       
        
         
        // for ($i=0; $i < count($factura) ; $i++) {
             
        // }
        // print_r($factura);
        // $total=array_sum($factura);
        // print_r($total);
    ?>
   </p>
    
</body>
</html>