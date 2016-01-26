<?php

require_once '../model/base/implementoBaseTable.class.php';
require_once '../model/implementoTable.class.php';

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

/**
 * Description of crear
 *
 * @emanuelcastm <corcel125@outlook.com>
 */
class eliminar extends controller implements action {

  
  public function execute() {
     $id = filter_input(INPUT_POST, 'id');
    $config = $this->getConfig();   
    $implemento = new implementoTable($config);
    $implemento->setId($id);
    $this->objImplemento = $implemento->delete();  
    $variables = array(
        'data' => array('code' => 200)
    );
    $this->defineView('implemento', 'eliminar', $variables, 'json');
  }
}
