<?php

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

/**
 * Description of nuevo.class.php
 *
 * @author Jordan Marles <jordanmarles@hotmail.es>
 * @package FStudio
 * @subpackage controller
 * @subpackage nuevo.class.php
 * @version 1.0.0
 */
class nuevo extends controller implements action {

  public function execute() {

    $this->defineView('cargo', 'nuevoView', 'html');
  }

}
