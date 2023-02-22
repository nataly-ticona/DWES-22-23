<!-- Publica: /listado/nombre-->
<?php 
require("../src/init.php");


$title="listado";
$pageHeader="Listado de usuarios";
$pageId="listado";

//otiene info del modelo
$DB->ejecuta("SELECT * FROM usuarios");
$usuarios= $DB->obtenDatos();



//se lo pasa al template
ob_start(); //todo lo que escriba ahora no se escribira
//codigo 
?>
<style>
    .img-user{
        width: 100px;
        height: 100px;
        border-radius: 30%;
    }
    
    table{margin: 0 auto;}
    table, tr, td{
        border-collapse:collapse;
    }
    .color-td{
        width: 200px;
        height:100px;
        background-color: #E8F3F3;
        text-align:left;
        
    }
    .no-color-td{
        height:30px;
    }
    .border-radius-1{
        border-top-left-radius: 10px;
        border-bottom-left-radius: 10px;
    }
    .border-radius-2{
        border-top-right-radius: 10px;
        border-bottom-right-radius: 10px;
    }
</style>
<?php $styleCss=ob_get_clean(); 
ob_start();
?>

        <table>
            <?php 
                //mostramos solo los datos que queremos, con 2 foreach salen todos los datos
                foreach ($usuarios as $usuario) {
                    ?>
            <tr >
                <td class="color-td border-radius-1" class="photo">
                    <img src="<?=$usuario['img']?>" class="img-user" alt="imagen <?=$usuario['nombre']?>">
                </td>
                <td class="color-td border-radius-2"class="no-photo">
                    <?=$usuario['nombre']?>
                </td>
            </tr>
            <tr>
                <td class="no-color-td"></td>
                <td class="no-color-td"></td>
            </tr>
            <?php
        }
            ?>
        </table>
<?php
$content=ob_get_clean(); 

require('./template.php'); 
?>