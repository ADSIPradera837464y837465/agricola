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
      header('Location: ' . $config->getUrl() . 'index.php/bdaMaquina/index');
    } else {
      header('Location: ' . $config->getUrl() . 'index.php/bdaMaquina/index');
    }
  }

}
