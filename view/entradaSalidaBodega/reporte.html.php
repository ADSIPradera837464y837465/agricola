<?php

require_once '../model/base/entradaSalidaBodegaBaseTable.class.php';
require_once '../model/entradaSalidaBodegaTable.class.php';

include_once '../libs/fpdf/fpdf.php';

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

class PDF extends FPDF {

  function Header() {

    $this->SetFont('Arial', 'B', 15);
    // Movernos a la derecha
    $this->Cell(80);
    // Título
    $this->Cell(30, 10, utf8_decode('Hacienda San Isidro Labrador'), 0, 0, 'C');
    $this->Ln(20);
    $this->SetFont('Arial', 'B', 10);
    $this->Cell(30, 10, utf8_decode('Puerto Tejada - Cauca'), 0, 0, 'C');
    $this->Ln(4);
    $this->Cell(30, 10, utf8_decode('Tel. 3215698470'), 0, 0, 'C');
    $this->Ln(4);
    $this->Cell(40, 10, 'Fecha: ' . date('d/m/Y'), 0, 1, 'L');
    $this->Ln(15);
    $this->Cell(80);
    $this->SetFont('Arial', 'B', 13);
    $this->Cell(30, 10, utf8_decode('Reporte de bodega'), 0, 0, 'C');
    $this->Ln(10);
  }

  function Footer() {
    $this->SetY(-10);
    $this->SetFont('Arial', 'I', 8);
    $this->Cell(0, 10, 'Page ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
  }

}

$pdf = new PDF();
$pdf->AddPage();
$pdf->SetFont('Arial', '', 13);
$pdf->Cell(20, 10, utf8_decode("ID"), 1);
$pdf->Cell(60, 10, utf8_decode("Id tercero solicita"), 1);
$pdf->Cell(40, 10, utf8_decode("Id tercero elabora"), 1);
$pdf->Cell(50, 10, utf8_decode("Id tipo doc"), 1);
$pdf->Cell(40, 10, utf8_decode("fecha"), 1);
$pdf->Cell(40, 10, utf8_decode("observacion"), 1);
$pdf->Ln();

foreach ($objEntradaSalidaBodega as $entradaSalidaBodega) {
  $pdf->Cell(20, 10, utf8_decode($entradaSalidaBodega->id), 1);
  $pdf->Cell(60, 10, utf8_decode($entradaSalidaBodega->tercero_id_solicita), 1);
  $pdf->Cell(40, 10, utf8_decode($entradaSalidaBodega->tercero_id_elabora), 1);
  $pdf->Cell(50, 10, utf8_decode($entradaSalidaBodega->tipo_documento_id), 1);
  $pdf->Cell(40, 10, utf8_decode($entradaSalidaBodega->fecha), 1);
  $pdf->Cell(40, 10, utf8_decode($entradaSalidaBodega->observacion), 1);
  $pdf->Ln();
}
$pdf->Output();
?>

