<?php

require_once '../model/base/suerteBaseTable.class.php';
require_once '../model/suerteTable.class.php';

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;


/**
 * Description of index.class.php
 * @author yuri adriana hurtado rojas <yurodri.1996@gmail.com>
 * @package FStudio
 * @subpackage controller
 * @subpackage index.class.php
 * @version 1.0.0
 */
class index extends controller implements action {

    public function execute() {
      $config = $this->getConfig();
      $suerte = new suerteTable($config);
      $this->objUsuario = $suerte->getAll();
      // así declaramos la vista a usar
      $this->defineView('suerte', 'index', 'html');
    }
}
