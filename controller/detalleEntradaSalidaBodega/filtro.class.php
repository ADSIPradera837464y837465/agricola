<?php

require_once '../model/base/detalleEntradaSalidaBodegaBaseTable.class.php';
require_once '../model/detalleEntradaSalidaBodegaTable.class.php';

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

/**
 * Description of crear
 *
 * @author diana meneses <meneses_d@rocketmail.com>
 * @package FStudio
 * @subpackage controller
 * @subpackage ver.class.php
 * @version 1.0.0
 */
class filtro extends controller implements action {

  public function execute() {

    $config = $this->getConfig();
    $detalleEntradaSalidaBodega = new detalleEntradaSalidaBodegaTable($config);

    $this->objDetalleEntradaSalidaBodega = $detalleEntradaSalidaBodega->getAll();
    $filtro = "";
    if (filter_input(INPUT_POST, "filtro") != "") {
      $txt_criterio = filter_input(INPUT_POST, "filtro");
      $filtro = " where id like '%" . $txt_criterio . "%'";
      
      
    }
     header('Location: ' . $config->getUrl() . 'index.php/detalleEntradaSalidaBodega/index');
  }

}
