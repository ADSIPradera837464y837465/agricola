<?php

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

/**
 * Description of index
 *
 * @author julianlasso
 */
class index extends controller implements action {

  public function execute() {

    $this->mensaje = 'Hola mundo por variable';

    
    $this->defineView('ejemplo', 'index', 'html');
  }

}
