<?php

use FStudio\fsController as controller;

/**
 * Description of ejemplo
 *
 * @author julianlasso
 */
class ejemplo extends controller {

  public function saludar() {
    $this->mensaje = 'HOLA general por variable';
    $this->defineView('ejemplo', 'index', 'html');
  }

}
