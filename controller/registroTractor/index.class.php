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
class index extends controller implements action {

  public function execute() {
    $config = $this->getConfig();
    $registroTractor = new registroTractorTable($config);
    $this->objregistroTractor = $registroTractor->getAll();
    // así declaramos la vista a usar
    $this->defineView('registroTractor', 'index', 'html');
  }

}
