<?php
use azucar\myConfig\myConfig as config;
use azucar\controller\controller;
use azucar\view\view;
include config::getPath() . 'model/bdaMaquinaTable.class.php';
/**
 * Description of index
 *
 * @author marian
 */
class editar extends controller {

  public function execute() {

      $id = filter_input(INPUT_GET, 'id');
    $objBdaMaquina = bdaMaquinaTable::getById($id);
    
    $variables = array(
        'objBdaMaquina' => $objBdaMaquina
    );
    view::defineView('bdaMaquina', 'editar', $variables, 'html');
  }

  
}