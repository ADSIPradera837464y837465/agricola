<?php

require_once '../model/base/cargoBaseTable.class.php';
require_once '../model/cargoTable.class.php';

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

/**
 * Description of editar.class.php
 *
 * @author Jordan Marles <jordanmarles@hotmail.es>
 * @package FStudio
 * @subpackage controller
 * @subpackage editar.class.php
 * @version 1.0.0
 */
class editar extends controller implements action{
  
  public function execute() {
    $config = $this->getConfig();
    
    $id = filter_input(INPUT_GET, 'id');
    
    $cargo = new cargoTable($config);
    
    $this->objcargo = $cargo->getById($id);
//    $variables = array (
//        'objPersona'=>$objPersona
//    );
    
    $this->defineView('cargo', 'editarView', 'html');
        
    
  }
  
}
