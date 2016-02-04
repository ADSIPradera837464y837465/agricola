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
class eliminar extends controller implements action{

  public function execute() {
    $id = filter_input(INPUT_POST, 'id');
     $config = $this->getConfig();
    $maquina = new maquinaTable($config);
    $maquina->setId($id);
    $this->objMaquina = $maquina->delete();
    $variable = array(
        'data' => array('code' => 200)
    );
    
    view::defineView('maquina', 'eliminar', $variable, 'json');
  }

  
}