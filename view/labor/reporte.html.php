<?php

require_once '../model/base/implementoBaseTable.class.php';
require_once '../model/implementoTable.class.php';
include_once '../libs/fpdf/fpdf.php';

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;


$pdf = new FPDF('l', 'mm', 'letter');
$pdf->AddPage();
$pdf->SetFont('Arial', '', 13);
$pdf->Cell(80);
$pdf->Cell(10, 50, utf8_decode('implemento'), 100, 10, 'C');



$pdf->Ln(50);

$pdf->Cell(20,10,  utf8_decode("ID"),1);
  $pdf->Cell(40,10,  utf8_decode("DESCRIPCION"),1);
  $pdf->Ln();
  
  foreach ($objImplemento as $implemento){
  $pdf->Cell(20,10,  utf8_decode($implemento->id),1);
  $pdf->Cell(40,10,  utf8_decode($implemento->descripcion),1);
 $pdf->Ln();
  }

$pdf->Output();







