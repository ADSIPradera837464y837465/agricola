<?php

require_once '../model/base/maquinaBaseTable.class.php';
require_once '../model/maquinaTable.class.php';


use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

/**
 * Description of index
 * @author mariam
 * @package FStudio
 * @subpackage controller
 * @subpackage index.class.php
 * @version 1.0.0
 */
class index extends controller implements action {
   
  public function execute() {
    $config = $this->getConfig();
    $maquina = new maquinaTable($config);
    
    $this->objMaquina = $maquina->getAll();

     
    $this->defineView('maquina', 'index', 'html') ;   
  }

}
   