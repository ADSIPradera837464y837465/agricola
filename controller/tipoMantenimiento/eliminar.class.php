<?php

require_once '../model/base/tipoMantenimientoBaseTable.class.php';
require_once '../model/tipoMantenimientoTable.class.php';

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

/**
 * Description of eliminar
 * @author Itiani Moreno Rosero <itiani2811@gmail.com>
 * @package
 * @subpackage model
 * @subpackage table
 * @version 1.0.0
 */
class eliminar extends controller implements action {

  public function execute() {

    $id = filter_input(INPUT_POST, 'tma_id');
    $tipoMantenimiento = new tipoMantenimientoTable();
    $tipoMantenimiento->setId($id);
    $tipoMantenimiento->delete();
    $variables = array(
        'data' => array('code' => 200)
    );
    $this->defineView('tipoMantenimiento', 'eliminar', $variables, 'json');
  }

}
