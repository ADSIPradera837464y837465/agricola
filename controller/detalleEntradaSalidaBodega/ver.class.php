<?php
require_once '../model/base/detalleEntradaSalidaBodegaBaseTable.class.php';
require_once '../model/detalleEntradaSalidaBodegaTable.class.php';

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

include $fsConfig->getPath() . 'model/detalleEntradaSalidaBodegaTable.class.php';

/**
 * Description of ver
 *
 * @author diana
 */
class ver extends controller implements action{

  public function execute() {
    $desId  = filter_input(INPUT_GET, 'desId');
    $objDetalleEntradaSalidaBodega = detalleEntradaSalidaBodegaTable::getById($id);

    $variables = array(
        'objDetalleEntradaSalidaBodega' => $objDetalleEntradaSalidaBodega
    );

    $this->defineView('detalleEntradaSalidaBodega', 'ver', $variables, 'html');
  }

}
