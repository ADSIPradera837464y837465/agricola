<?php

require_once '../model/base/unidadMedidaBaseTable.class.php';
require_once '../model/unidadMedidaTable.class.php';

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
     
        $id = filter_input(INPUT_POST, 'unmId');
        $unidadMedida = new unidadMedidaTable();
        $unidadMedida->setId($id);
        $this->objUnidadMedida = $unidadMedida->delete();
        $variables=array(
            'data'=>array('code'=>200)
            );
            $this->defineView('unidadMedida','eliminar' , $variables, 'json');
    }
}