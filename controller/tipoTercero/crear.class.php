<?php

require_once '../model/base/tipoTerceroBaseTable.class.php';
require_once '../model/tipoTerceroTable.class.php';

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

/**
 * Description of crear.class.php
 *
 * @author Jordan Marles <jordanmarles@hotmail.es>
 * @package FStudio
 * @subpackage controller
 * @subpackage ver.class.php
 * @version 1.0.0
 */
class crear extends controller implements action{
  
  public function execute() {
    
    $config = $this->getConfig();
    
    $descripcion = filter_input_array(INPUT_POST)['descripcion'];    
    $tipoTercero = new tipoTerceroTable($config);
    $tipoTercero->setDescripcion($descripcion['descripcion']);
    $this->objTipoTercero = $tipoTercero->save();
    
    header('Location: ' . $fsConfig->getUrl() . 'index.php/tipoPersona/index');
    
    
  }
  
}
