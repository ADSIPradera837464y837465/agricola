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
    $entradaSalidaBodega = new entradaSalidaBodegaTable($config);

    $criterio = filter_input(INPUT_POST, "filtro");
    
    if (empty ($criterio)) {
      $this->objEntradaSalidaBodega = $entradaSalidaBodega->getAll();
    } else {
      $this->objFiltro = $entradaSalidaBodega->filtro($criterio);
      $this->objEntradaSalidaBodega = $this->objFiltro;
  }


    header('Location: ' . $config->getUrl() . 'index.php/entradaSalidaBodega/index');
  }

}
