<?php

require_once '../model/base/detalleEjecucionBaseTable.class.php';
require_once '../model/detalleEjecucionTable.class.php';

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

/**
 * Description of actualizar
 *
 * @author Angela Cardona <angela04cardona@hotmail.com>
 * @package FStudio
 * @subpackage controller
 * @subpackage index.class.php
 * @version 1.0.0
 */
class actualizar extends controller implements action {

  public function execute() {
    $formDetalleEjecucion = filter_input_array(INPUT_POST)['detalleEjecucion'];

    $detalleEjecucion = new detalleEjecucionTable();
    $detalleEjecucion->setId($formDetalleEjecucion['deId']);
    $detalleEjecucion->setOrdenEjecucionId($formDetalleEjecucion['oreId']);
    $detalleEjecucion->setTerceroId($formDetalleEjecucion['terId']);
    $detalleEjecucion->setServicioMaquinaId($formDetalleEjecucion['serId']);
    $detalleEjecucion->setProductoId($formDetalleEjecucion['proId']);
    $detalleEjecucion->setCantidad($formDetalleEjecucion['cantidad']);
    $detalleEjecucion->setPrecio($formDetalleEjecucion['precio']);
    $detalleEjecucion->setUpdatedAt('now()');
    $this->objDetalleEjecucion = $detalleEjecucion->update();


    header('Location: ' . $fsConfig->getUrl() . 'index.php/detalleEjecucion/index');
  }

}
