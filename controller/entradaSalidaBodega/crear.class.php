<?php

require_once '../model/base/entradaSalidaBodegaBaseTable.class.php';
require_once '../model/entradaSalidaBodegaTable.class.php';

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

/**
 * Description of crear
 *
 * @author Diana Meneses <meneses_d@rocketmail.com>
 * @package FStudio
 * @subpackage controller
 * @subpackage index.class.php
 * @version 1.0.0
 */
class crear extends controller implements action {

  public function execute() {

    $config = $this->getConfig();
    $formEntradaSalidaBodega = filter_input_array(INPUT_POST)['entradaSalidaBodega'];
    
     $entradaSalidaBodega = new entradaSalidaBodegaTable($config);
    $entradaSalidaBodega->setTerceroIdElabora($formEntradaSalidaBodega['terIdElabora']);
    $entradaSalidaBodega->setTerceroIdSolicita($formEntradaSalidaBodega['terIdSolicita']);
    $entradaSalidaBodega->setTipoDocumentoId($formEntradaSalidaBodega['tpdId']);
    $entradaSalidaBodega->setFecha($formEntradaSalidaBodega['fecha']);
    $entradaSalidaBodega->setObservacion($formEntradaSalidaBodega['observacion']);
    $this->objEntradaSalidaBodega = $entradaSalidaBodega->save();

    header('Location: ' . $config->getUrl() . 'index.php/entradaSalidaBodega/index');
    exit();
    
  }

}
