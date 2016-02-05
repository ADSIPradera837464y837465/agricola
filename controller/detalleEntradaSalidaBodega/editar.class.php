<?php
require_once '../model/base/detalleEntradaSalidaBodegaBaseTable.class.php';
require_once '../model/detalleEntradaSalidaBodegaTable.class.php';

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

/**
 * Description of editar
 *
 * @author diana
 */
class editar extends controller implements action{

    public function execute() {
        $id = filter_input(INPUT_GET, 'desId');
        $objDetalleEntradaSalidaBodega = detalleEntradaSalidaBodegaTable::getById($id);

        $variables = array(
            'objDetalleEntradaSalidaBodega' => $objDetalleEntradaSalidaBodega
        );

        $this->defineView('detalleEntradaSalidaBodega', 'editar', $variables, 'html');
    }

}
