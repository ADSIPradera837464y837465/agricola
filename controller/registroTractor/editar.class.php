<?php

require_once '../model/base/registroTractorBaseTable.class.php';
require_once '../model/registroTractorTable.class.php';

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

/**
 * Description detalleRegistro
 * @author Johanna Gale <ladyjkaulitz@hotmail.com>
 * @package
 * @subpackage model
 * @subpackage table
 * @version 1.0.0
 */
class editar extends controller implements action {

  public function execute() {
    $id = filter_input(INPUT_GET, 'rtr_item');
    $objregistroTractor = registroTractorTable::getById($id);

    $variables = array(
        'objregistroTractor' => $objregistroTractor
    );

    $this->defineView('registroTractor', 'editar', $variables, 'html');
  }

}
