<?php

require_once '../model/base/tipoIdBaseTable.class.php';
require_once '../model/tipoIdTable.class.php';

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
    
    $tipoId = new tipoIdTable($config);
    
    $this->objTipoId = $tipoId->getById($id);
//    $variables = array (
//        'objPersona'=>$objPersona
//    );
    
    $this->defineView('tipoId', 'editarView', 'html');
        
    
  }
  
}
