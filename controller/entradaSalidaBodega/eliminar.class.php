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
     
        $id = filter_input(INPUT_POST, 'id');
         $config = $this->getConfig();
        $entradaSalidaBodega = new entradaSalidaBodegaTable($config);
        $entradaSalidaBodega->setId($id);
        $this->objEntradaSalidaBodega = $entradaSalidaBodega->delete();
        $variables=array(
            'data'=>array('code'=>200)
            );
            $this->defineView('entradaSalidaBodega','eliminar' , $variables, 'json');
    }
}
