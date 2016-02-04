<?php

require_once '../model/base/entradaSalidaBodegaBaseTable.class.php';
require_once '../model/entradaSalidaBodegaTable.class.php';
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
class reporteConsulta extends controller implements action {
  
  public function execute() {
     $config = $this->getConfig();
      $entradaSalidaBodega = new entradaSalidaBodegaTable($config);
      $this->objEntradaSalidaBodega = $entradaSalidaBodega->getAll();
     
      $this->defineView('detalleEntradaSalidaBodega', 'reporteConsulta', 'html');
    
  }


}
