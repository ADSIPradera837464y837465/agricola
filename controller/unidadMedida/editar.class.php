<?php

require_once '../model/base/unidadMedidaBaseTable.class.php';
require_once '../model/unidadMedidaTable.class.php';

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
        $id = filter_input(INPUT_GET, 'unmId');
        $objUnidadMedida = unidadMedidaTable::getById($id);

        $variables = array(
            'objUnidadMedida' => $objUnidadMedida
        );

        $this->defineView('unidadMedida', 'editar', $variables, 'html');
    }

}
