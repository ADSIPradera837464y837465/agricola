<?php

require_once '../model/base/detalleRegistroBaseTable.class.php';
require_once '../model/detalleRegistroTable.class.php';

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

/**
 * Description detalleRegistro
 * @author Johanna Gale <ladyjkaulitz@hotmail.com>
 * @package
 * @subpackage model
 * @subpackage table
 * @version 1.0.0
 */
class eliminar extends controller implements action {

    public function execute() {
     
        $der_item = filter_input(INPUT_POST, 'der_item');
        $detalleRegistro = new detalleRegistroTable();
        $detalleRegistro->setItem($der_item);
        $detalleRegistro->delete();
        $variable=array(
            'data'=>array
                ('code'=>200)
            );
            $this->defineView('detalleRegistro','eliminar' , $variable, 'json');
    }
}

