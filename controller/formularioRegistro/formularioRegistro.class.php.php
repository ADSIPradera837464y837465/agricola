<?php

require_once '../model/base/formularioRegistroBaseTable.class.php';
require_once '../model/formularioRegistroTable.class.php';

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

/**
 * Description of index.class.php
 *
 * @author Duvier Marin escobaar <duvier_24@hotmail.es>
 * @package FStudio
 * @subpackage controller
 * @subpackage formularioRegistro.class.php
 * @version 1.0.0
 */
class formularioRegistro extends controller implements action {

    public function execute() {
      $config = $this->getConfig();
      $formulario = new formularioRegistro($config);
      $this->objFormulario = $formulario->getAll();
      
      $this->defineView('formularioRegistro', 'index', 'html');
    }
}
