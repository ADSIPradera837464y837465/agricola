<?php

require_once '../model/base/detalleEjecucionBaseTable.class.php';
require_once '../model/detalleEjecucionTable.class.php';

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

/**
 * Description of crear
 *
 * @author Angela Cardona <angela04cardona@hotmail.com>
 * @package FStudio
 * @subpackage controller
 * @subpackage index.class.php
 * @version 1.0.0
 */
class crear extends controller implements action {

  public function execute() {

    $config = $this->getConfig();

    $formDetalleEjecucion = filter_input_array(INPUT_POST)['detalleEjecucion'];

    $detalleEjecucion = new detalleEjecucionTable();
    $detalleEjecucion->setOrdenEjecucionId($formDetalleEjecucion['oreId']);
    $detalleEjecucion->setTerceroId($formDetalleEjecucion['terId']);
    $detalleEjecucion->setServicioMaquinaId($formDetalleEjecucion['serId']);
    $detalleEjecucion->setProductoId($formDetalleEjecucion['proId']);
    $detalleEjecucion->setCantidad($formDetalleEjecucion['cantidad']);
    $detalleEjecucion->setPrecio($formDetalleEjecucion['precio']);
    $this->objDetalleEjecucion = $detalleEjecucion->save();

    header('Location: ' . $fsConfig->getUrl() . 'index.php/detalleEjecucion/index');
  }

}
