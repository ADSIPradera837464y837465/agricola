<?php
use azucar\myConfig\myConfig as config;
use azucar\controller\controller;
use azucar\view\view;
include config::getPath() . 'model/personaTable.Class.php';

/**
 * Description of crear
 *
 * @author xubuntu
 */
class editar extends controller{
  
  public function execute() {
    $id = filter_input(INPUT_GET, 'id');
    $objPersona = personaTable::getById($id);
    $variables = array (
        'objPersona'=>$objPersona
    );
    
    view::defineView('persona', 'editar', $variables, 'html');
        
    
  }
  
}
