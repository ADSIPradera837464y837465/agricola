<?php

require_once '../model/base/detalleRegistroBaseTable.class.php';
require_once '../model/detalleRegistroTable.class.php';

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
    $dRegistro = new detalleRegistroTable($config);
    $this->objdetalleRegistro = $dRegistro->getAll();
    // así declaramos la vista a usar
    $this->defineView('detalleRegistro', 'index', 'html');
  }

}
