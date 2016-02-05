<?php

require_once '../model/base/rolBaseTable.class.php';
require_once '../model/rolTable.class.php';

//use FStudio\myConfig  as config;
use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

/**
 * Description of editar
 *
 * @author 
 */
class editar extends controller implements action {

  public function execute() {


    $id = filter_input(INPUT_GET, 'id');
    $config = $this->getConfig();

    $rol = new rolTable($config);


    $this->objRol = $rol->getById($id);
    $this->defineView('rol', 'editar', 'html');
  }

}

//we