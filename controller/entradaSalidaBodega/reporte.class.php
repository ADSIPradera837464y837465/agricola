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
class reporte extends controller implements action {

  public function execute() {

    $config = $this->getConfig();
    $entradaSalidaBodega = new entradaSalidaBodegaTable($config);
    $this->objEntradaSalidaBodega = $entradaSalidaBodega->getAll();     
//$this->objEntradaSalidaBodega = "select tercero_elabora_id,tercero_solicita_id,tipo_documento_id,fecha,observacion FROM  bda_entrada_salida_bodega  WHERE  fecha_reporte BETWEEN '2013-08-01'  AND '2013-08-31";
     

    $this->defineView('entradaSalidaBodega', 'reporteConsulta', 'html');
  }

}
