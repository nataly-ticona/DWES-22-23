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

    function imprimirLista($productos) {
?>
        <tr>
            <th>Producto</th>
            <th>Precio</th>
            <th>Cantidad</th>
        </tr>
        <?php 
            foreach ($productos as $producto => $precio) :
        ?>
                <tr>
                    <td><?= ucfirst($producto) ?></td>
                    <td><?= $precio ?>€</td>
                    <td><input type="number" step="1" min="0" max="99" name="<?= $producto ?>" value="<?= (empty($_GET) || array_keys($productos) != array_keys($_GET))?'0':$_GET[$producto]; ?>"></td>
                </tr>
        <?php
            endforeach;
        ?>
<?php
    }

    function generarFactura($productos) {
        $productosCompra = array_intersect_key($_GET, $productos);
        // usamos la funcion array_intersect_key para generar otro array con las cantidades de cada producto de nuestro array de $productos ya que podrian haber otras variables definidas en $_GET que no hacen parte de nuestro array principal

        foreach ($productosCompra as $producto => $cantidad) {
            if($cantidad != 0) {
                $factura[$producto] = $productos[$producto]*$cantidad;
            }
        }

        if(!empty($factura)) {
            imprimirFactura($factura);
        }
    }

    function imprimirFactura($factura) {
?>
        <h2>Factura</h2>
        <table>
            <tr><th>Producto</th><th>Precio</th></tr>

            <?php foreach ($factura as $producto => $precio) : ?>

                <tr>
                    <td><?= ucfirst($producto) ?></td> <td><?= $precio ?>€</td>
                </tr>

            <?php endforeach; ?>

            <tr><td><b>Total:</b></td><td><?= array_sum($factura) ?>€</td></tr>
        </table>
<?php
    }
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de la compra</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial;
        }

        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 2px 5px;
            margin: 10px 0 12px;
        }

        input[type=number] {
            width: 60px;
        }

        input[type=submit] {
            height: 25px;
            width: 80px;
        }

        .center {
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin: 15px 0;
        }
    </style>
</head>
<body>

    <div class="center">
        <form action="" method="get">
            <div class="lista">
                <h2>Lista de la compra</h2>
    
                <table>
                    <?php imprimirLista($productos) ?>
        
                    <tr>
                        <td colspan="3"><input type="submit" value="Enviar"></td>
                    </tr>
                </table>
            </div>
    
        </form>
        <div class="factura">
        <?php
            if (!empty($_GET)) {
                generarFactura($productos);
            }
        ?>
        </div>

        <!-- <form action="" method="get" class="formulario">
            <h2>Lista de la compra</h2>
            <table>
                <input type="text" name="prueba">
    
                <tr>
                    <td colspan="3"><input type="submit" value="Enviar"></td>
                </tr>
            </table>
        </form> -->

        <?php include("{$_SERVER['DOCUMENT_ROOT']}/back.php") ?>
    </div>
</body>
</html>