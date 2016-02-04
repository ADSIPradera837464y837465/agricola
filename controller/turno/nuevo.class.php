<?php

require_once '../model/base/turnoBaseTable.class.php';
require_once '../model/turnoTable.class.php';

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

/**
 * Description of index.class.php
 *
 * @author lina montaño <linamontano_1995@hotmail.es>
 * @package FStudio
 * @subpackage controller
 * @subpackage index.class.php
 * @version 1.0.0
 */
class nuevo extends controller implements action {

  public function execute() {
    $config = $this->getConfig();

    $this->defineView('turno', 'nuevo', 'html');
  }

}
