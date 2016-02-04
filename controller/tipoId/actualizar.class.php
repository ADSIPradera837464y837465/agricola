<?php

require_once '../model/base/tipoIdBaseTable.class.php';
require_once '../model/tipoIdTable.class.php';

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
    
    $formTipoId = filter_input_array(INPUT_POST)['tipoId'];    
    $tipoId = new tipoIdTable($config);
    $tipoId->setId($formTipoId['id']);
    $tipoId->setDescripcion($formTipoId['descripcion']);
    $this->objTipoId = $tipoId->update();
    
    header('Location: ' . $config->getUrl() . 'index.php/tipoId/index');
    exit();
    
  }
  
}
