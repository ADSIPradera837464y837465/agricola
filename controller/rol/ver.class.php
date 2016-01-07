<?php

require_once '../model/base/rolBaseTable.class.php';
require_once '../model/rolTable.class.php';

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;


/**
 * Description of ver
 *
 * @author 
 */
class ver extends controller implements action {

  public function execute() {


    $id = filter_input(INPUT_GET, 'id');
    $config = $this->getConfig();
    $rol = new rolTable($config);


    $this->objRol = $rol->getAll();
    $this->defineView('rol', 'ver', 'html');
  }

}
