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

class detalleRegistro extends controller implements action {

    public function execute() {
      $config = $this->getConfig();
      $detalleRegistro = new detalleRegistro($config);
      $this->objdetalleRegistro = $detalleRegistro->getAll();
      // así declaramos la vista a usar
      $this->defineView('detalleRegistro', 'detalleRegistro', 'html');
    }
}
