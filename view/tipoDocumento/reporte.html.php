<?php

require_once '../model/base/tipoDocumentoBaseTable.class.php';
require_once '../model/tipoDocumentoTable.class.php';
include_once '../libs/fpdf/fpdf.php';

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;


$pdf = new FPDF('l', 'mm', 'letter');
$pdf->AddPage();
$pdf->SetFont('Arial', '', 13);
$pdf->Cell(80);
$pdf->Cell(10, 50, utf8_decode('Tipo Documento'), 100, 10, 'C');



$pdf->Ln(1);


  $pdf->Cell(45,10,  utf8_decode("DESCRIPCION"),1);
  $pdf->Cell(45,10,  utf8_decode("TIPO MOVIMIENTO"),1);
  $pdf->Cell(30,10,  utf8_decode("ESTADO"),1);
  $pdf->Ln();
  
  foreach ($objTipoDocumento as $tipoDocumento){
  
  $pdf->Cell(45,10,  utf8_decode($tipoDocumento->descripcion),1);
  $pdf->Cell(45,10,  utf8_decode($tipoDocumento->tipo_movimiento),1);
  $pdf->Cell(30,10,  utf8_decode($tipoDocumento->estado),1);
 $pdf->Ln();
  }

$pdf->Output();







