<?php

require_once '../model/base/servicioMaquinaBaseTable.class.php';
require_once '../model/servicioMaquinaTable.class.php';

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

/**
 * Description of ver.class.php
 *
 * @author Maribel zamora <mazagi86@hotmail.com>
 * @package FStudio
 * @subpackage controller
 * @subpackage ver.class.php
 * @version 1.0.0
 */
class ver extends controller implements action {

  public function execute() {

    $config = $this->getConfig();
    $id = filter_input(INPUT_GET, 'id');
    $servicioMaquina = new servicioMaquinaTable($config);
    $this->objServicioMaquina = $servicioMaquina->getById($id);

    $this->defineView('servicioMaquina', 'ver', 'html');
  }

}
