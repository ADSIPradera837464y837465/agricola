<?php
require_once '../model/base/unidadMedidaBaseTable.class.php';
require_once '../model/unidadMedidaTable.class.php';

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

include $fsConfig->getPath() . 'model/unidadMedidaTable.class.php';

/**
 * Description of ver
 *
 * @author Angela Cardona <angela04cardona@hotmail.com>
 * @package FStudio
 * @subpackage controller
 * @subpackage index.class.php
 * @version 1.0.0
 */
class ver extends controller implements action{

  public function execute() {
    $id  = filter_input(INPUT_GET, 'unmId');
    $objUnidadMedida = unidadMedidaTable::getById($id);

    $variables = array(
        'objUnidadMedida' => $objUnidadMedida
    );

    $this->defineView('unidadMedida', 'ver', $variables, 'html');
  }

}
