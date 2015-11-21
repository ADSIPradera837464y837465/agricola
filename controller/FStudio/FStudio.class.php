<?php

use FStudio\fsController as controller;

/**
 * Controlador para las acciones de la implementación MVC
 * @author Julian Lasso <ingeniero.julianlasso@gmail.com>
 * @package FStudio
 * @subpackage controller
 * @version 1.0.0
 */
class FStudio extends controller {

  public function exception(PDOException $exc) {
    $this->exc = $exc;
    $this->defineView('FStudio', 'exception', 'html');
  }

}
