<?php

require_once '../model/base/metodoRiegoBaseTable.class.php';
require_once '../model/metodoRiegoTable.class.php';

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

/**
 * Description of index.class.php
 *
 * @author Duvier Marin <duvier_24@hotmail.es>
 * @package FStudio
 * @subpackage controller
 * @subpackage index.class.php
 * @version 1.0.0
 */
class actualizar extends controller implements action {

  public function execute() {
    $id = filter_input(INPUT_GET, 'id');
    $config = $this->getConfig();
    $update = new metodoRiegoTable($config);
    $resul =  $update->getById($id);    
    $this->ObjMetodo = $resul;

    $this->defineView('metodoRiego', 'actualizar', 'html');
  }

}
