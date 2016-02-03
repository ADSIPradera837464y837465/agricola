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
class nuevo extends controller {

  public function execute() {

    
    view::defineView('bdaMaquina', 'nuevo', NULL, 'html');
  }

  
}