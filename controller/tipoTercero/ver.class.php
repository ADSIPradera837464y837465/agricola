<?php

require_once '../model/base/tipoTerceroBaseTable.class.php';
require_once '../model/tipoTerceroTable.class.php';

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
    $tipoTercero = new tipoTerceroTable($config);

    $this->objTipoTercero = $tipoTercero->getById($id);

    $this->defineView('tipoTercero', 'ver', 'html');
  }

}
