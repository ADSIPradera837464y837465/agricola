<?php
require_once '../model/base/maquinaBaseTable.class.php';
require_once '../model/maquinaTable.class.php';

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;
/**
 * Description of index
 *
 * @author marian
 */
class eliminar extends controller {

  public function execute() {
    $id = filter_input(INPUT_POST, 'id');
    $bdaMaquina = new bdaMaquinaTable();
    $bdaMaquina->setId($id);
    $bdaMaquina->delete();
    $variable = array(
        'data' => array('code' => 200)
    );
    
    view::defineView('bdaMaquina', 'eliminar', $variable, 'json');
  }

  
}