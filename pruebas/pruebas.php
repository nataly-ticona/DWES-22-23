<?php
ob_end_clean();
require('fpdf184/fpdf.php');

$fpdf=new fpdf();

//añadimos una nueva pagina a fpdf
$fpdf-> AddPage();

//letra del pdf
$fpdf->SetFont('Arial','B',10);

//tamaño y texto
$fpdf-> Cell(60,20,'Hola este el PDF');

//lo generamos
$fpdf->Output();
?> 
