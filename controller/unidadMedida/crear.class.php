<?php

require_once '../model/base/unidadMedidaBaseTable.class.php';
require_once '../model/unidadMedidaTable.class.php';

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

/**
 * Description of crear
 *
 * @author Angela Cardona <angela04cardona@hotmail.com>
 * @package FStudio
 * @subpackage controller
 * @subpackage index.class.php
 * @version 1.0.0
 */
class crear extends controller implements action {

  public function execute() {

    $config = $this->getConfig();

    $formUnidadMedida = filter_input_array(INPUT_POST)['unidadMedida'];

    $unidadMedida = new unidadMedidaTable();
    $unidadMedida->setDescripcion($formUnidadMedida['unmDes']);
    $this->objUnidadMedida = $unidadMedida->save();

    header('Location: ' . $fsConfig->getUrl() . 'index.php/unidadMedida/index');
  }

}
