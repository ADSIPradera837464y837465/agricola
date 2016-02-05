<?php

require_once '../model/base/entradaSalidaBodegaBaseTable.class.php';
require_once '../model/entradaSalidaBodegaTable.class.php';

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;
/**
 * Description of eliminar
 *
 * @author Diana Meneses <meneses_d@rocketmail.com>
 * @package FStudio
 * @subpackage controller
 * @subpackage index.class.php
 * @version 1.0.0
 */

class eliminar extends controller implements action {

    public function execute() {
     
        $esbId = filter_input(INPUT_POST, 'esbId');
        $entradaSalidaBodega = new entradaSalidaBodegaTable();
        $entradaSalidaBodega->setId($esbId);
        $this->objEntradaSalidaBodega = $entradaSalidaBodega->delete();
        $variables=array(
            'data'=>array('code'=>200)
            );
            $this->defineView('entradaSalidaBodega','eliminar' , $variables, 'json');
    }
}
