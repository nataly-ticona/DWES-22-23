<?php
$nombre=$_GET['nombre'];
$empresa=$_GET['empresa'];
$representante=$_GET['representante'];
$fecha=date($_GET['fecha']);
$enviado=false;


 if($nombre!="" && $empresa!="" && $representante!="" && $fecha!=""){
    $enviado=true;
    ob_end_clean();
    require('fpdf184/fpdf.php');
    
    $fpdf=new fpdf();
    
    //añadimos una nueva pagina a fpdf
    $fpdf-> AddPage();
    
    //letra del pdf
    $fpdf->SetFont('Arial','B',20);
    
    //tamaño y texto
     $fpdf-> Cell(60,20, "Carta de recomendacion"); 
     $fpdf->Ln();
     $fpdf->SetFont('Arial', '', 12);

     //tamaño y texto multilinea
    $fpdf->Multicell(120,5, "Estimado $nombre \n\n Nuestra empresa $empresa  con el representante \n 
    En fecha $fecha \n Firmado $representantes");
      //lo generamos
    $fpdf->Output();
 }else{
    
    // echo "<p>Error</p>";
 }
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./ejer03.css">
    <title>Genera tu pdf aqui</title>
</head>
<body>
    <div id="contenedor">
        <div id="formulario">
            <form>
                <fieldset>
                    <legend>Genera tu carta de recomendacion</legend>
                        Nombre <br><input type="text" name="nombre" id="" value="<?=$nombre?>"><br>
                        Empresa <br><input type="text" name="empresa" id="" value="<?=$empresa?>"><br>
                        Representante <br><input type="text" name="representante" id="" value="<?=$representante?>"><br>
                        Fecha <br><input type="date" name="fecha" id="" value="<?=$fecha?>"><br>
                        <input type="submit" value="Generar PDF">
                        
                </fieldset>
            </form>
        </div>
    </div>
</body>
</html>