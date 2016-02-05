<?php

require_once '../model/base/detalleEntradaSalidaBodegaBaseTable.class.php';
require_once '../model/detalleEntradaSalidaBodegaTable.class.php';

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

/**
 * Description of actualizar
 *..
 * @author Diana Meneses <meneses_d@rocketmail.com>
 * @package FStudio
 * @subpackage controller
 * @subpackage index.class.php
 * @version 1.0.0
 */
class actualizar extends controller implements action {

  public function execute() {

    $config = $this->getConfig();
    $detalleEntradaSalidaBodega = new detalleEntradaSalidaBodegaTable($config);

    $formDetalleEntradaSalidaBodega = filter_input_array(INPUT_POST)['detalleEntradaSalidaBodega'];

    $detalleEntradaSalidaBodega->setId($formDetalleEntradaSalidaBodega['desId']);
    $detalleEntradaSalidaBodega->setEntradaSalidaBodegaId($formDetalleEntradaSalidaBodega['esbId']);
    $detalleEntradaSalidaBodega->setProductoId($formDetalleEntradaSalidaBodega['proId']);
    $detalleEntradaSalidaBodega->setUnidadMedidaId($formDetalleEntradaSalidaBodega['unmId']);
    $detalleEntradaSalidaBodega->setCantidad($formDetalleEntradaSalidaBodega['desCantidad']);
    $detalleEntradaSalidaBodega->setPrecio($formDetalleEntradaSalidaBodega['desPrecio']);


    $this->objDetalleEntradaSalidaBodega = $detalleEntradaSalidaBodega->update();
    header('Location: ' . $config->getUrl() . 'index.php/detalleEntradaSalidaBodega/index');
    }

}
