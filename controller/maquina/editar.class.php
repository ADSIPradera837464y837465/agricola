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
class editar extends controller implements action {

  public function execute() {

    $id = filter_input(INPUT_GET, 'id');
    $config = $this->getConfig();
    $maquina = new maquinaTable($config);


    $this->objMaquina = $maquina->getById($id);
    $this->defineView('maquina', 'editar', 'html');
  }

}
