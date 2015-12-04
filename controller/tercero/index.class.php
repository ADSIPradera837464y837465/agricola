<?php

require_once '../model/base/terceroTable.class.php';
require_once '../model/terceroTable.class.php';

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
      $tercero = new terceroTable($config);
      $this->objTercero = $tercero->getAll();
      // así declaramos la vista a usar
      $this->defineView('tercero', 'index', 'html');
    }
}
