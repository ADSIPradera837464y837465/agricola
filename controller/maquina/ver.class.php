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
class ver extends controller implements action {

  public function execute() {
    $config = $this->getConfig();
    $id = filter_input(INPUT_GET, 'id');
    $maquina = new maquinaTable($config);
    $this->objMaquina = $maquina->getById($id);

    $this->defineView('maquina', 'ver', 'html');
  }

}
