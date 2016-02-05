<?php

require_once '../model/base/detalleEntradaSalidaBodegaBaseTable.class.php';
require_once '../model/detalleEntradaSalidaBodegaTable.class.php';

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

/**
 * Description of crear
 *..
 * @author diana meneses <meneses_d@rocketmail.com>
 * @package FStudio
 * @subpackage controller
 * @subpackage ver.class.php
 * @version 1.0.0
 */
class crear extends controller implements action {

  public function execute() {

    $config = $this->getConfig();

    $formDetalleEntradaSalidaBodega = filter_input_array(INPUT_POST)['detalleEntradaSalidaBodega'];

    $detalleEntradaSalidaBodega = new detalleEntradaSalidaBodegaTable($config);

    $detalleEntradaSalidaBodega->setEntradaSalidaBodegaId($formDetalleEntradaSalidaBodega['esbId']);
    $detalleEntradaSalidaBodega->setProductoId($formDetalleEntradaSalidaBodega['proId']);
    $detalleEntradaSalidaBodega->setUnidadMedidaId($formDetalleEntradaSalidaBodega['unmId']);
    $detalleEntradaSalidaBodega->setCantidad($formDetalleEntradaSalidaBodega['desCantidad']);
    $detalleEntradaSalidaBodega->setPrecio($formDetalleEntradaSalidaBodega['desPrecio']);

    $this->objDetalleEntradaSalidaBodega = $detalleEntradaSalidaBodega->save();

    header('Location: ' . $config->getUrl() . 'index.php/detalleEntradaSalidaBodega/index');
    exit();
  }

}