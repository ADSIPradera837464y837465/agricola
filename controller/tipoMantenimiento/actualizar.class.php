<?php

require_once '../model/base/tipoMantenimientoBaseTable.class.php';
require_once '../model/tipoMantenimientoTable.class.php';

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

/**
 * Description of  actualizar
 * @author Itiani Moreno Rosero <itiani2811@gmail.com>
 * @package
 * @subpackage model
 * @subpackage table
 * @version 1.0.0
 */  
class actualizar extends controller implements action {

  public function execute() {
    $formularioTipoMantenimiento = filter_input_array(INPUT_POST)['tipoMantenimiento'];

    $tipoMantenimiento = new tipoMantenimientoTable();
    $tipoMantenimiento->setTmaId($formularioTipoMantenimiento['tma_id']);
    $tipoMantenimiento->setTmaDescripcion($formularioTipoMantenimiento['tma_descripcion']);
    $tipoMantenimiento->setTmaCreatedAt($formularioTipoMantenimiento['tma_created_at']);
    $this->objtipoMantenimiento = $tipoMantenimiento->update();

    $this->defineView('tipoMantenimiento', 'actualizar', 'html');
  }

}
