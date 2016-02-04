<?php

require_once '../model/base/metodoRiegoBaseTable.class.php';
require_once '../model/metodoRiegoTable.class.php';

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

/**
 * Description of index.class.php
 *
 * @author Duvier Marin <duvier_24@hotmail.es>
 * @package FStudio
 * @subpackage controller
 * @subpackage index.class.php
 * @version 1.0.0
 */
class insertar extends controller implements action {

    public function execute() {
    $descripcion = filter_input(INPUT_POST, 'descripcion');      
    $config = $this->getConfig();
    $insertar = new metodoRiegoTable($config);
    $insertar->setDescripcion($descripcion);               
    $insertar->save();    
    header('Location: ' .  $config->getUrl() .'index.php/metodoRiego/index');
    }
}
