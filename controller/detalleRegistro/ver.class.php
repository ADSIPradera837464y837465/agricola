<?php

require_once '../model/base/detalleRegistroBaseTable.class.php';
require_once '../model/detalleRegistroTable.class.php';

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
    $id = filter_input(INPUT_GET, 'der_item');
    $objdetalleRegistro = detalleRegistroTable::getById($id);

    $variables = array(
        'objdetalleRegistro' => $objdetalleRegistro
    );

    $this->defineView('detalleRegistro', 'ver', $variables, 'html');
  }

}
