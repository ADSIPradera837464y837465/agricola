<?php

require_once '../model/base/rolBaseTable.class.php';
require_once '../model/rolTable.class.php';

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

/**
 * Description of index.class.php
 *
 * @author WilmerAndres <.com>
 * @package FStudio
 * @subpackage controller
 * @subpackage index.class.php
 * @version 1.0.0
 */
class index extends controller implements action {

    public function execute() {
      $config = $this->getConfig();
      $rol = new rolTable($config);
      $this->objRol = $rol->getAll();
      // así declaramos la vista a usar
      $this->defineView('rol', 'index', 'html');
    }
}


//w