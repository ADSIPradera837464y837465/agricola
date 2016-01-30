<?php

require_once '../model/base/detalleEjecucionBaseTable.class.php';
require_once '../model/detalleEjecucionTable.class.php';

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

/**
 * Description of eliminar
 *
 * @author Angela Cardona <angela04cardona@hotmail.com>
 * @package FStudio
 * @subpackage controller
 * @subpackage index.class.php
 * @version 1.0.0
 */

class eliminar extends controller implements action {

    public function execute() {
     
        $deId = filter_input(INPUT_POST, 'deId');
        $detalleEjecucion = new detalleEjecucionTable();
        $detalleEjecucion->setId($deId);
        $this->objEntradaSalidaBodega = $detalleEjecucion->delete();
        $variables=array(
            'data'=>array('code'=>200)
            );
            $this->defineView('detalleEjecucion','eliminar' , $variables, 'json');
    }
}