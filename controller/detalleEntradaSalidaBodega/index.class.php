<?php

require_once '../model/base/detalleEntradaSalidaBodegaBaseTable.class.php';
require_once '../model/detalleEntradaSalidaBodegaTable.class.php';
include_once '../libs/Zebra_Pagination.php';

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

/**
 * Description of index.class.php
 *
 * @author Diana Meneses <meneses_d@rocketmail.com>
 * @package FStudio
 * @subpackage controller
 * @subpackage index.class.php
 * @version 1.0.0
 */
class index extends controller implements action {

  public function execute() {
    $config = $this->getConfig();
    $detalleEntradaSalidaBodega = new detalleEntradaSalidaBodegaTable($config);
    $this->objDetalleEntradaSalidaBodega = $detalleEntradaSalidaBodega->getAll();

    $paginacion = new Zebra_Pagination();
    $this->objRespuesta = $detalleEntradaSalidaBodega->resultadoPaginador();
    $respuesta = $this->objRespuesta[0];
    $resultado = 7;
    $paginacion = ($paginacion->get_page() - 1 ) * $resultado;
    
    
   
    $this->defineView('detalleEntradaSalidaBodega', 'index', 'html');
  }

}
