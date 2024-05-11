<?php
require ('fpdf.php');
$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',20);
$pdf->Cell(40,10,'Hello World');
$pdf->AddPage();
$pdf->SetFont('Arial','B',20);
$pdf->Cell(40,10,'I am Shruti!!!!!!!');
$pdf->Output();
?>