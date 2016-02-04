<?php

require_once '../model/base/tipoIdBaseTable.class.php';
require_once '../model/tipoIdTable.class.php';

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

/**
 * Description of index.class.php
 *
 * @author Jordan Marles <jordanmarles@hotmail.es>
 * @package FStudio
 * @subpackage controller
 * @subpackage index.class.php
 * @version 1.0.0
 */
class index extends controller implements action {

  public function execute() {

    $config = $this->getConfig();
    $tipoId = new tipoIdTable($config);
    $this->objTipoId = $tipoId->getAll();
    
    $this->defineView('tipoId', 'index', 'html');
  }

}
