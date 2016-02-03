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
class eliminarMasivo extends controller {

  public function execute() {


    if ($idsToDelete = filter_input_array(INPUT_POST)['chk']) {
      $bdaMaquina = new bdaMaquinaTable();
      foreach ($idsToDelete as $id) {
        $bdaMaquina->setId($id);
        $bdaMaquina->delete($id, TRUE);
      }
//      print_r($id);
//          exit();
      header('Location: ' . config::getUrl() . 'index.php/bdaMaquina/index');
    } else {
      header('Location: ' . config::getUrl() . 'index.php/bdaMaquina/index');
    }
  }

}
