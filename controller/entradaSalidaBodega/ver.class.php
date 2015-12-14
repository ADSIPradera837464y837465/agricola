<?php
require_once '../model/base/detalleEntradaSalidaBodegaBaseTable.class.php';
require_once '../model/detalleEntradaSalidaBodegaTable.class.php';

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

include $fsConfig->getPath() . 'model/detalleEntradaSalidaBodegaTable.class.php';

/**
 * Description of ver
 *
 * @author Diana Meneses <meneses_d@rocketmail.com>
 * @package FStudio
 * @subpackage controller
 * @subpackage index.class.php
 * @version 1.0.0
 */
class ver extends controller implements action{

  public function execute() {
    $esbId  = filter_input(INPUT_GET, 'esbId');
    $objEntradaSalidaBodega = entradaSalidaBodegaTable::getById($id);

    $variables = array(
        'objEntradaSalidaBodega' => $objEntradaSalidaBodega
    );

    $this->defineView('entradaSalidaBodega', 'ver', $variables, 'html');
  }

}
