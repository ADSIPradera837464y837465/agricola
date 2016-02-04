<?php

require_once '../model/base/detalleEntradaSalidaBodegaBaseTable.class.php';
require_once '../model/detalleEntradaSalidaBodegaTable.class.php';
require_once '../libs/fpdf/fpdf.php';

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

/**
 * Description of reporte
 *
 * @author Diana Meneses <meneses_d@rocketmail.com>
 * @package FStudio
 * @subpackage controller
 * @subpackage index.class.php
 * @version 1.0.0
 */
class reporte extends controller implements action {

  public function execute() {

    $config = $this->getConfig();
    $detalleEntradaSalidaBodega = new detalleEntradaSalidaBodegaTable($config);
    $this->objDetalleEntradaSalidaBodega = $detalleEntradaSalidaBodega->getAll();

    // así declaramos la vista a usar
    $this->defineView('detalleEntradaSalidaBodega', 'reporte', 'html');
  }

}
