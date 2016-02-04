<?php

require_once '../model/base/entradaSalidaBodegaBaseTable.class.php';
require_once '../model/entradaSalidaBodegaTable.class.php';

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

/**
 * Description of actualizar
 *
 * @author Diana Meneses <meneses_d@rocketmail.com>
 * @package FStudio
 * @subpackage controller
 * @subpackage index.class.php
 * @version 1.0.0
 */
class actualizar extends controller implements action {

  public function execute() {
    
    $config = $this->getConfig();
    $entradaSalidaBodega = new entradaSalidaBodegaTable($config);
    
    $formEntradaSalidaBodega = filter_input_array(INPUT_POST)['entradaSalidaBodega'];

    
    $entradaSalidaBodega->setId($formEntradaSalidaBodega['esbId']);
    $entradaSalidaBodega->setTerceroIdElabora($formEntradaSalidaBodega['terIdElabora']);
    $entradaSalidaBodega->setTerceroIdSolicita($formEntradaSalidaBodega['terIdSolicita']);
    $entradaSalidaBodega->setTipoDocumentoId($formEntradaSalidaBodega['tpdId']);
    $entradaSalidaBodega->setFecha($formEntradaSalidaBodega['esbFecha']);
    $entradaSalidaBodega->setObservacion($formEntradaSalidaBodega['esbObservacion']);
    
    $this->objEntradaSalidaBodega = $entradaSalidaBodega->update();
    
    header('Location: ' . $config->getUrl() . 'index.php/entradaSalidaBodega/index');
   }

}
