<?php

require_once '../model/base/detalleEntradaSalidaBodegaBaseTable.class.php';
require_once '../model/detalleEntradaSalidaBodegaTable.class.php';

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;
/**
 * Description of nuevo
 *
 * @author diana
 */
class nuevo  extends controller {
    public function execute() {
        
        
        view::defineView('detalleEntradaSalidaBodega', 'nuevo', null, 'html');
    }
}
