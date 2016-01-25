<?php

require_once '../model/base/detalleOrdenBaseTable.class.php';
require_once '../model/detalleOrdenTable.class.php';

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
    $detalleOrden= new detalleOrdenTable($config);
    $this->objDetalleOrden = $detalleOrden->getAll();
    
    $this->defineView('detalleOrden', 'index', 'html');
  }

}

