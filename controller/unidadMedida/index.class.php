<?php

require_once '../model/base/unidadMedidaBaseTable.class.php';
require_once '../model/unidadMedidaTable.class.php';

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

/**
 * Description of index
 *
 * @author Angela Cardona <angela04cardona@hotmail.com>
 * @package FStudio
 * @subpackage controller
 * @subpackage index.class.php
 * @version 1.0.0
 */
class index extends controller implements action {

    public function execute() {
      $config = $this->getConfig();
      $unidadMedida = new unidadMedidaTable($config);
      $this->objDetalleEjecucion = $unidadMedida->getAll();
      
      $this->defineView('unidadMedida', 'index', 'html');
    }
}
