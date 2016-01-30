<?php

require_once '../model/base/detalleEjecucionBaseTable.class.php';
require_once '../model/detalleEjecucionTable.class.php';

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

/**
 * Description of editar
 *
 * @author Angela Cardona <angela04cardona@hotmail.com>
 * @package FStudio
 * @subpackage controller
 * @subpackage index.class.php
 * @version 1.0.0
 */
class editar extends controller implements action{

    public function execute() {
        $id = filter_input(INPUT_GET, 'deId');
        $objDetalleEjecucion = detalleEjecucionTable::getById($id);

        $variables = array(
            'objDetalleEjecucio' => $objDetalleEjecucion
        );

        $this->defineView('detalleEjecucion', 'editar', $variables, 'html');
    }

}
