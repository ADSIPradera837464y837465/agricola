<?php

require_once '../model/base/haciendaBaseTable.class.php';
require_once '../model/haciendaTable.class.php';

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

/**
 * Description of index.class.php
 *
 * @author Duvier Marin <duvier_24@hotmail.es>
 * @package FStudio
 * @subpackage controller
 * @subpackage index.class.php
 * @version 1.0.0
 */
class nuevo extends controller implements action {

  public function execute() {
    $config = $this->getConfig();

    $this->defineView('hacienda', 'nuevo', 'html');
  }

}
