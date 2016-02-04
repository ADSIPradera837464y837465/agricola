<?php

require_once '../model/base/servicioMaquinaBaseTable.class.php';
require_once '../model/servicioMaquinaTable.class.php';

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

/**
 * Description of eliminar.class.php
 *
 * @author Maribel zamora <mazagi86@hotmail.com>
 * @package FStudio
 * @subpackage controller
 * @subpackage eliminar.class.php
 * @version 1.0.0
 */
class eliminar extends controller implements action {

  private $objServicioMaquina;

  public function execute() {

    $id = filter_input(INPUT_GET, 'id');
    $config = $this->getConfig();

    $servicioMaquina = new servicioMaquinaTable($config);
    $servicioMaquina->setId($id);
    $this->objServicioMaquina = $servicioMaquina->delete();
    $variable = array(
        'data' => array('code' => 200)
    );

    $this->defineView('servicioMaquina', 'eliminar', 'json');
  }

}
