<?php

require_once '../model/base/tipoIdBaseTable.class.php';
require_once '../model/tipoIdTable.class.php';

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

/**
 * Description of ver.class.php
 *
 * @author Jordan Marles <jordanmarles@hotmail.es>
 * @package FStudio
 * @subpackage controller
 * @subpackage ver.class.php
 * @version 1.0.0
 */
class ver extends controller implements action {

  public function execute() {

    $id = filter_input(INPUT_GET, 'id');
    $config = $this->getConfig();
    $tipoId = new tipoIdTable($config);

    $this->objTipoId = $tipoId->getById($id);

    $this->defineView('tipoId', 'verView', 'html');
  }

}
