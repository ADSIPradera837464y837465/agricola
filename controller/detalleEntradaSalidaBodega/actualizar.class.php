<?php

require_once '../model/base/detalleEntradaSalidaBodegaBaseTable.class.php';
require_once '../model/detalleEntradaSalidaBodegaTable.class.php';

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

/**
 * Description of actualizar
 *
 * @author diana <meneses_d@rocketmail.com>
 */
class actualizar extends controller implements action {

  public function execute() {
    $formDetalleEntradaSalidaBodega = filter_input_array(INPUT_POST)['detalleEntradaSalidaBodega'];

    $detalleEntradaSalidaBodega = new detalleEntradaSalidaBodegaTable();
    $detalleEntradaSalidaBodega->setDesId($formDetalleEntradaSalidaBodega['desIs']);
    $detalleEntradaSalidaBodega->setEsbId($formDetalleEntradaSalidaBodega['esbId']);
    $detalleEntradaSalidaBodega->setProId($formDetalleEntradaSalidaBodega['proId']);
    $detalleEntradaSalidaBodega->setUmnId($formDetalleEntradaSalidaBodega['unmId']);
    $detalleEntradaSalidaBodega->setCantidad($formDetalleEntradaSalidaBodega['cantidad']);
    $detalleEntradaSalidaBodega->setPrecio($formDetalleEntradaSalidaBodega['precio']);
    $trabajador->update();


    header('Location: ' . $fsConfig->getUrl() . 'index.php/detalleEntradaSalidaBodega/index');
  }

}
