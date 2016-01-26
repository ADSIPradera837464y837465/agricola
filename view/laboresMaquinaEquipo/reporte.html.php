<?php

require_once '../model/base/laboresMaquinaEquipoBaseTable.class.php';
require_once '../model/laboresMaquinaEquipoTable.class.php';
include_once '../libs/fpdf/fpdf.php';

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;


$pdf = new FPDF('l', 'mm', 'letter');
$pdf->AddPage();
$pdf->SetFont('Arial', '', 13);
$pdf->Cell(80);
$pdf->Cell(10, 50, utf8_decode('laboresMaquinaEquipo'), 100, 10, 'C');



$pdf->Ln(8);

$pdf->Cell(20,10,  utf8_decode("ID"),1);
  $pdf->Cell(32,10,  utf8_decode("HACIENDA ID"),1);
  $pdf->Cell(33,10,  utf8_decode("TERCERO ID"),1);
  $pdf->Cell(45,10,  utf8_decode("TIPO DOCUMENTO"),1);
  $pdf->Cell(30,10,  utf8_decode("FECHA"),1);
  $pdf->Cell(30,10,  utf8_decode("ESTADO "),1);
  $pdf->Cell(30,10,  utf8_decode("TIEMPO"),1);
  $pdf->Cell(35,10,  utf8_decode("TOTAL HORAS"),1);
  $pdf->Ln();
  
  foreach ($objLaboresMaquinaEquipo as $laboresMaquinaEquipo){
  $pdf->Cell(20,10,  utf8_decode($laboresMaquinaEquipo->id),1);
  $pdf->Cell(32,10,  utf8_decode($laboresMaquinaEquipo->hacienda_id),1);
  $pdf->Cell(33,10,  utf8_decode($laboresMaquinaEquipo->tercero_id),1);
  $pdf->Cell(45,10,  utf8_decode($laboresMaquinaEquipo->tipo_documento_id),1);
  $pdf->Cell(30,10,  utf8_decode($laboresMaquinaEquipo->fecha),1);
  $pdf->Cell(30,10,  utf8_decode($laboresMaquinaEquipo->estado),1);
  $pdf->Cell(30,10,  utf8_decode($laboresMaquinaEquipo->tiempo),1);
  $pdf->Cell(35,10,  utf8_decode($laboresMaquinaEquipo->total_horas_trabajadas),1);
 $pdf->Ln();
  }

$pdf->Output();







