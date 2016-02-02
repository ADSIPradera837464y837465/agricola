<?php

require_once '../model/base/tipoMantenimientoBaseTable.class.php';
require_once '../model/tipoMantenimientoTable.class.php';

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

/**
 * Description of ver
 * @author Itiani Moreno Rosero <itiani2811@gmail.com>
 * @package
 * @subpackage model
 * @subpackage table
 * @version 1.0.0
 */
class ver extends controller {
  public function execute() {
  $id = filter_input(INPUT_GET, 'tma_id');
    $objtipoMantenimiento = tipoMantenimientoTable::getById($id);
    
    $variables = array(
        'objtipoMantenimiento' => $objtipoMantenimiento
    );
    view::defineView('tipoMantenimiento', 'ver', $variables, 'html');
  }
  
}
