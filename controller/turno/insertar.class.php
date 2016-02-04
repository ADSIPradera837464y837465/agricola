<?php

require_once '../model/base/turnoBaseTable.class.php';
require_once '../model/turnoTable.class.php';

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

/**
 * Description of index.class.php
 *
 * @author lina montaño <linamontano_1995@hotmail.com>
 * @package FStudio
 * @subpackage controller
 * @subpackage index.class.php
 * @version 1.0.0
 */
class insertar extends controller implements action {

    public function execute() {
    $descripcion = filter_input(INPUT_POST, 'descripcion');      
    $config = $this->getConfig();
    $insertar = new turnoTable($config);
    $insertar->setDescripcion($descripcion);               
    $insertar->save();    
    header('Location: ' .  $config->getUrl() .'index.php/turno/index');
    }
}

