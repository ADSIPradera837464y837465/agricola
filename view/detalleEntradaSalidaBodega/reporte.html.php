<?php

require_once '../model/base/detalleEntradaSalidaBodegaBaseTable.class.php';
require_once '../model/detalleEntradaSalidaBodegaTable.class.php';

include_once '../libs/fpdf/fpdf.php';

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;
//
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
$pdf->Cell(60, 10, utf8_decode("Id de entrada salida bodega"), 1);
$pdf->Cell(40, 10, utf8_decode("Id de producto"), 1);
$pdf->Cell(50, 10, utf8_decode("Id de unidad de medida"), 1);
$pdf->Cell(40, 10, utf8_decode("cantidad"), 1);
$pdf->Cell(40, 10, utf8_decode("precio"), 1);
$pdf->Ln();

foreach ($objDetalleEntradaSalidaBodega as $detalleEntradaSalidaBodega) {
  $pdf->Cell(20, 10, utf8_decode($detalleEntradaSalidaBodega->id), 1);
  $pdf->Cell(60, 10, utf8_decode($detalleEntradaSalidaBodega->entrada_salida_bodega_id), 1);
  $pdf->Cell(40, 10, utf8_decode($detalleEntradaSalidaBodega->producto_id), 1);
  $pdf->Cell(50, 10, utf8_decode($detalleEntradaSalidaBodega->unidad_medida_id), 1);
  $pdf->Cell(40, 10, utf8_decode($detalleEntradaSalidaBodega->cantidad), 1);
  $pdf->Cell(40, 10, utf8_decode($detalleEntradaSalidaBodega->precio), 1);
  $pdf->Ln();
}
$pdf->Output();
?>

