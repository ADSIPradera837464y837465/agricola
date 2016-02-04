<?php

require_once '../model/base/servicioMaquinaBaseTable.class.php';
require_once '../model/servicioMaquinaTable.class.php';

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

/**
 * Description of crear.class.php
 *
 * @author Maribel zamora <mazagi86@hotmail.com>
 * @package FStudio
 * @subpackage controller
 * @subpackage crear.class.php
 * @version 1.0.0
 */
class crear extends controller implements action {

  public function execute() {
    $config = $this->getConfig();
    $formServicioMaquina = filter_input_array(INPUT_POST)['servicioMaquina'];

    $servicioMaquina = new servicioMaquinaTable($config);
    $servicioMaquina->setDescripcion($formServicioMaquina['serDescripcion']);
    $servicioMaquina->setEstado($formServicioMaquina['serEstado']);
    $this->objServicioMaquina = $servicioMaquina->save();


    header('Location: ' . $config->getUrl() . 'index.php/servicioMaquina/index');
  }

}
