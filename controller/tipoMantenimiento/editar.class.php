<?php

require_once '../model/base/tipoMantenimientoBaseTable.class.php';
require_once '../model/tipoMantenimientoTable.class.php';

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
    $id = filter_input(INPUT_GET, 'tma_id');
    $objtipoMantenimiento = tipoMantenimientoTable::getById($id);

    $variables = array(
        '$objtipoMantenimiento' => $objtipoMantenimiento
    );

    $this->defineView('tipoMantenimiento', 'editar', $variables, 'html');
  }

}
