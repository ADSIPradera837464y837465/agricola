<?php

require_once '../model/base/detalleEntradaSalidaBodegaBaseTable.class.php';
require_once '../model/detalleEntradaSalidaBodegaTable.class.php';

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

/**
 * Description of eliminar
 *
 * @author diana meneses <meneses_d@rocketmail.com>
 * @package FStudio
 * @subpackage controller
 * @subpackage ver.class.php
 * @version 1.0.0
 */
class eliminar extends controller implements action {

  public function execute() {

    $id = filter_input(INPUT_POST, 'id');
    $config = $this->getConfig();
    $detalleEntradaSalidaBodega = new detalleEntradaSalidaBodegaTable($config);
    $detalleEntradaSalidaBodega->setId($id);
    $this->objDetalleEntradaSalidaBodega = $detalleEntradaSalidaBodega->delete();
    $variables = array(
        'data' => array('code' => 200)
    );
    $this->defineView('detalleEntradaSalidaBodega', 'eliminar', $variables, 'json');
  }

}
