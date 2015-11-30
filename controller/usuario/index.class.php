<?php

require_once '../model/base/usuarioBaseTable.class.php';
require_once '../model/usuarioTable.class.php';

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

/**
 * Description of index.class.php
 *
 * @author Julian AndrÃ©s Lasso Figueroa <ingeniero.julianlasso@gmail.com>
 * @package FStudio
 * @subpackage controller
 * @subpackage index.class.php
 * @version 1.0.0
 */
class index extends controller implements action {

    public function execute() {
      $config = $this->getConfig();
      $usuario = new usuarioTable($config);
      $this->objUsuario = $usuario->getAll();
      // así declaramos la vista a usar
      $this->defineView('usuario', 'index', 'html');
    }
}
