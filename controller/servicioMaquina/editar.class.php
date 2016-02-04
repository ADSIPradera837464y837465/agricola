<?php

require_once '../model/base/servicioMaquinaTable.class.php';
require_once '../model/servicioMaquinaTable.class.php';

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

/**
 * Description of editar.class.php
 *
 * @author Maribel zamora <mazagi86@hotmail.com>
 * @package FStudio
 * @subpackage controller
 * @subpackage editar.class.php
 * @version 1.0.0
 */
class editar extends controller implements action {

  private $objServicioMaquina;

  public function execute() {

    $id = filter_input(INPUT_GET, 'id');
    $config = $this->getConfig();
    $servicioMaquina = new servicioMaquinaTable($config);
    $this->objServicioMaquina = $servicioMaquina->getById($id);

    $this->defineView('servicioMaquina', 'editar', 'html');
  }

}
