<?php

require_once '../model/base/registroTractorBaseTable.class.php';
require_once '../model/registroTractorTable.class.php';


use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

/**
 * Description detalleRegistro
 * @author Johanna G <ladyjkaulitz@hotmail.com>
 * @package
 * @subpackage model
 * @subpackage table
 * @version 1.0.0
 */
class eliminar extends controller implements action {

    public function execute() {
     
        $rtr_item = filter_input(INPUT_POST, 'rtr_item');
        $registroTractor = new registroTractorTable();
        $registroTractor->setItem($rtr_item);
        $registroTractor->delete();
        $variable=array(
            'data'=>array
                ('code'=>200)
            );
            $this->defineView('registroTractor','eliminar' , $variable, 'json');
    }
}

