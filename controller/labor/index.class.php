<?php

require_once '../model/base/laborBaseTable.class.php';
require_once '../model/laborTable.class.php';

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

/**
 * Description of index.class.php
 *
 * @author victoria cortes <victoriacortes2014@hotmail.com>
 * @package FStudio
 * @subpackage controller
 * @subpackage index.class.php
 * @version 1.0.0
 */
class index extends controller implements action {

  public function execute() {
    $config = $this->getConfig();
    $labor = new laborTable($config);
    $this->objLabor = $labor->getAll();
    // así declaramos la vista a usar
    $this->defineView('labor', 'index', 'html');
  }

}
