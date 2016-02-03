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
class crear extends controller implements action {

  public function execute() {

    $config = $this->getConfig();

    $formDetalleRegistro = filter_input_array(INPUT_POST)['detalleRegistro'];

    $detalleRegistro = new detalleRegistroTable($config);

    $detalleRegistro->setEntradaSalidaBodegaId($formDetalleRegistro['relme_numero']);
    $detalleRegistro->setProductoId($formDetalleRegistro['ter_id']);
    $detalleRegistro->setUnidadMedidaId($formDetalleRegistro['lab_id']);
    $detalleRegistro->setCantidad($formDetalleRegistro['sue_id']);
    $detalleRegistro->setPrecio($formDetalleRegistro['pro_id']);
    $detalleRegistro->setPrecio($formDetalleRegistro['unm_id']);
    $detalleRegistro->setPrecio($formDetalleRegistro['maq_id']);
    $detalleRegistro->setPrecio($formDetalleRegistro['der_tiempo_muerto']);
    $detalleRegistro->setPrecio($formDetalleRegistro['der_total_horas_trabajadas']);
    $detalleRegistro->setPrecio($formDetalleRegistro['der_hora_inicio']);
    $detalleRegistro->setPrecio($formDetalleRegistro['der_hora_fin']);

    $this->objDetalleRegistro = $detalleRegistro->save();

    header('Location: ' . $config->getUrl() . 'index.php/detalleRegistro/index');
    exit();
  }

}