<?php

require_once '../model/base/detalleEntradaSalidaBodegaBaseTable.class.php';
require_once '../model/detalleEntradaSalidaBodegaTable.class.php';

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

/**
 * Description of editar
 *
 * @author Diana Meneses <meneses_d@rocketmail.com>
 * @package FStudio
 * @subpackage controller
 * @subpackage index.class.php
 * @version 1.0.0
 */

class editar extends controller implements action {

  public function execute() {
    $id = filter_input(INPUT_GET, 'id');
    $config = $this->getConfig();
    $detalleEntradaSalidaBodega = new detalleEntradaSalidaBodegaTable($config);

    $this->objDetalleEntradaSalidaBodega = $detalleEntradaSalidaBodega->getById($id);

    $this->defineView('detalleEntradaSalidaBodega', 'editar', 'html');
  }

}
