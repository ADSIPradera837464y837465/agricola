<?php
require_once '../model/base/detalleEjecucionBaseTable.class.php';
require_once '../model/detalleEjecucionTable.class.php';

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

include $fsConfig->getPath() . 'model/detalleEjecucionTable.class.php';

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
    $deId  = filter_input(INPUT_GET, 'deId');
    $objdetalleEjecucion = detalleEjecucionTable::getById($deId);

    $variables = array(
        'objDetalleEjecucion' => $objdetalleEjecucion
    );

    $this->defineView('detalleEjecucion', 'ver', $variables, 'html');
  }

}
