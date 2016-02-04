<?php

require_once '../model/base/cargoBaseTable.class.php';
require_once '../model/cargoTable.class.php';

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

/**
 * Description of actualizar.class.php
 *
 * @author Jordan Marles <jordanmarles@hotmail.es>
 * @package FStudio
 * @subpackage controller
 * @subpackage actualizar.class.php
 * @version 1.0.0
 */
class actualizar extends controller implements action{
  
  public function execute() {
    
    $config = $this->getConfig();
    
    $formcargo = filter_input_array(INPUT_POST)['cargo'];    
    $cargo = new cargoTable($config);
    $cargo->setId($formcargo['id']);
    $cargo->setDescripcion($formcargo['descripcion']);
    $this->objcargo = $cargo->update();
    
    header('Location: ' . $config->getUrl() . 'index.php/cargo/index');
    exit();
    
  }
  
}
