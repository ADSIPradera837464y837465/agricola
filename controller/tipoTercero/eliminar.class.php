<?php

require_once '../model/base/tipoTerceroBaseTable.class.php';
require_once '../model/tipoTerceroTable.class.php';

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

/**
 * Description of eliminar.class.php
 *
 * @author Jordan Marles <jordanmarles@hotmail.es>
 * @package FStudio
 * @subpackage controller
 * @subpackage eliminar.class.php
 * @version 1.0.0
 */
class eliminar extends controller implements action{
  
  public function execute() {
    
    $id = filter_input(INPUT_POST, 'tit_id');
    $tipoTercero = new tipoTerceroTable();
    $tipoTercero->setId($id);
    $tipoTercero->delete();
    $variables = array(
        'data' => array('code' => 200)
    );
    $this->defineView('tipoTercero', 'eliminar', $variables, 'json');
    
  }
  
}
