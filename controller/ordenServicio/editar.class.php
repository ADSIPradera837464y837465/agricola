<?php

require_once '../model/base/ordenServicioBaseTable.class.php';
require_once '../model/ordenServicioTable.class.php';

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

/**
 * Description of editar
 * @author Itiani Moreno Rosero <itiani2811@gmail.com>
 * @package
 * @subpackage model
 * @subpackage table
 * @version 1.0.0
 */
class editar extends controller implements action {

  public function execute() {
    $id = filter_input(INPUT_GET, 'ors_id');
    $objordenServicio = ordenServicioTable::getById($id);

    $variables = array(
        '$objordenServicio' => $objordenServicio
    );

    $this->defineView('ordenServicio', 'editar', $variables, 'html');
  }

}
