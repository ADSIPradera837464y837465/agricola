<?php

require_once '../model/base/ordenServicioBaseTable.class.php';
require_once '../model/ordenServicioTable.class.php';

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

/**
 * Description of eliminar
 * @author Itiani Moreno Rosero <itiani2811@gmail.com>
 * @package FStudio
 * @subpackage controller
 * @subpackage 
 * @version 1.0.0
 */  
class eliminar extends controller implements action {

  public function execute() {

    $id = filter_input(INPUT_POST, 'ors_id');
    $ordenServicio = new ordenServicioTable();
    $ordenServicio->setId($id);
    $ordenServicio->delete();
    $variables = array(
        'data' => array('code' => 200)
    );
    $this->defineView('ordenServicio', 'eliminar', $variables, 'json');
  }

}
