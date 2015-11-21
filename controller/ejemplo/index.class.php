<?php

require_once '../model/base/usuarioBaseTable.class.php';
require_once '../model/usuarioTable.class.php';

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

    $usuario = new usuarioTable($this->getConfig());
    $this->objUsuario = $usuario->getAll();

    $this->defineView('ejemplo', 'index', 'html');
  }

}
