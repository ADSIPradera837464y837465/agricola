<?php

require_once '../model/base/detalleEntradaSalidaBodegaBaseTable.class.php';
require_once '../model/detalleEntradaSalidaBodegaTable.class.php';

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;
/**
 * Description of eliminar
 *
 * @author diana <meneses_d@rocketmail.com>
 */
class eliminar extends controller implements action {

    public function execute() {
     
        $desId = filter_input(INPUT_POST, 'desId');
        $detalleEntradaSalidaBodega = new detalleEntradaSalidaBodegaTable();
        $detalleEntradaSalidaBodega->setDesId($desId);
        $detalleEntradaSalidaBodega->delete();
        $variables=array(
            'data'=>array('code'=>200)
            );
            $this->defineView('detalleEntradaSalidaBodega','eliminar' , $variables, 'json');
    }
}
