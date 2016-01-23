<?php

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

/**
 * Description of nuevo
 * @author Itiani Moreno Rosero <itiani2811@gmail.com>
 */
class nuevo extends controller implements action {

  public function execute() {

    $this->defineView('tipoMantenimiento', 'nuevo', 'html');  
  }

}
    