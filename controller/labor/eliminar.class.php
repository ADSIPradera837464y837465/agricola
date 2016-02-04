<?php

require_once '../model/base/laborBaseTable.class.php';
require_once '../model/laborTable.class.php';


use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

/**
 * Description of crear
 *
 *  @author victoria cortes <victoriacortes2014@hotmail.com>
 */
class eliminar extends controller implements action {

  
  public function execute() {
     $id = filter_input(INPUT_POST, 'id');
    $config = $this->getConfig();   
    $labor = new laborTable($config);
    $labor->setId($id);
    $this->objLabor = $labor->delete();  
    $variables = array(
        'data' => array('code' => 200)
    );
    $this->defineView('labor', 'eliminar', $variables, 'json');
  }
}
