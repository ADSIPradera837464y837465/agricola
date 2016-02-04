<?php

require_once '../model/base/servicioMaquinaBaseTable.class.php';
require_once '../model/servicioMaquinaTable.class.php';

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

/**
 * Description of index.class.php
 *
 * @author Maribel zamora <mazagi86@hotmail.com>
 * @package FStudio
 * @subpackage controller
 * @subpackage index.class.php
 * @version 1.0.0
 */
class index extends controller implements action {

  public function execute() {

    $config = $this->getConfig();
    $servicioMaquina = new servicioMaquinaTable($config);
    $this->objServicioMaquina = $servicioMaquina->getAll();

    $this->defineView('servicioMaquina', 'index', 'html');
  }

}
