<?php

require_once '../model/base/implementoBaseTable.class.php';
require_once '../model/implementoTable.class.php';
require_once '../libs/fpdf/fpdf.php';

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;


/**
  * Description of index.class.php
 *
 * @author Emanuel Castillo Mosquera <corcel125@outlook.com>
 * @package FStudio
 * @subpackage controller
 * @subpackage index.class.php
 * @version 1.0.0
 */
class reporte extends controller implements action {
  
  public function execute() {
      $config = $this->getConfig();
      $implemento = new implementoTable($config);
      $this->objImplemento = $implemento->getAll();
      // así declaramos la vista a usar
      $this->defineView('implemento', 'reporte', 'html');
    }
}
