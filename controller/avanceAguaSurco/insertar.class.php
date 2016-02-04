<?php

require_once '../model/base/avanceAguaSurcoBaseTable.class.php';
require_once '../model/avanceAguaSurcoTable.class.php';

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
    $config = $this->getConfig();   
    $numero = filter_input(INPUT_POST, 'numero');
    $surco = filter_input(INPUT_POST, 'surco');
    $insertar = new avanceAguaSurcoTable($config);
    $insertar->setSurcoId($surco);
    $insertar->setControlAdministrativoRiegoId($numero);
    $insertar->save();
            

    header('Location: ' .  $config->getUrl() .'index.php/avanceAguaSurco/index');
  }

}
