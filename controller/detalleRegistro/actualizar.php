<?php

require_once '../model/base/detalleRegistroBaseTable.class.php';
require_once '../model/detalleRegistroTable.class.php';

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

/**
 * Description detalleRegistro
 * @author Johanna G <ladyjkaulitz@hotmail.com>
 * @package
 * @subpackage model
 * @subpackage table
 * @version 1.0.0
 */
class actualizar extends controller implements action {

  public function execute() {
    $formDetalleRegistro = filter_input_array(INPUT_POST)['detalleRegistro'];

    $detalleRegistro = new detalleRegistroTable();
    $detalleRegistro->setRelmeNumero($formDetalleRegistro['relme_numero']);
    $detalleRegistro->setTerId($formDetalleRegistro['ter_id']);
    $detalleRegistro->setLabId($formDetalleRegistro['lab_id']);
    $detalleRegistro->setSueId($formDetalleRegistro['sue_id']);
    $detalleRegistro->setProId($formDetalleRegistro['pro_id']);
    $detalleRegistro->setUnidadDeMedidaId($formDetalleRegistro['unm_id']);
    $detalleRegistro->setMaqId($formDetalleRegistro['maq_id']);
    $detalleRegistro->setDerTiempoMuerto($formDetalleRegistro['der_tiempo_muerto']);
    $detalleRegistro->setDerTotalHorasTrabajadas($formDetalleRegistro['der_total_horas_trabajadas']);
    $detalleRegistro->setDerHoraInicio($formDetalleRegistro['der_hora_inicio']);
    $detalleRegistro->setDerHoraFin($formDetalleRegistro['der_hora_fin']);
    $detalleRegistro->setDerCreatedAt($formDetalleRegistro['der_created_at']);
    $this->objDetaleRegistro = $detalleRegistro->update();

  $this->defineView('detalleRegistro', 'actualizar', 'html');
  }

}

