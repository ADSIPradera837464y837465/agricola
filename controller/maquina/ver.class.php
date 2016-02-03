<?php
require_once '../model/base/maquinaBaseTable.class.php';
require_once '../model/maquinaTable.class.php';

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

include config::getPath() . 'model/bdaMaquinaTable.class.php';
/**
 * Description of index
 *
 * @author marian
 */
class ver extends controller {

  public function execute() {
  $id = filter_input(INPUT_GET, 'id');
    $objBdaMaquina = bdaMaquinaTable::getById($id);
    
    $variables = array(
        'objBdaMaquina' => $objBdaMaquina
    );
    view::defineView('bdaMaquina', 'ver', $variables, 'html');
  }

  
}