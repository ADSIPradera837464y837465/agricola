<?php

require_once '../model/base/unidadMedidaBaseTable.class.php';
require_once '../model/unidadMedidaTable.class.php';

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

/**
 * Description of actualizar
 *
 * @author Angela Cardona <angela04cardona@hotmail.com>
 * @package FStudio
 * @subpackage controller
 * @subpackage index.class.php
 * @version 1.0.0
 */
class actualizar extends controller implements action {

  public function execute() {
    $formUnidadMedida = filter_input_array(INPUT_POST)['unidadMedida'];

    $unidadMedida = new unidadMedidaTable();
    $unidadMedida->setId($formUnidadMedida['unmId']);
    $unidadMedida->setDescripcion($formUnidadMedida['unmDes']);
    $this->objUnidadMedida = $unidadMedida->update();


    header('Location: ' . $fsConfig->getUrl() . 'index.php/unidadMedida/index');
  }

}
