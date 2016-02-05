
<?php
require_once '../model/base/datoUsuarioBaseTable.class.php';
require_once '../model/datoUsuarioTable.class.php';

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

/**
 * Description of index.class.php
 *
 * @author Emanuel Castillo Mosquera <corcel125@outlook.com>
 * @package FStudio
 * @subpackage controller
 * @subpackage index.class.php
 * @version 1.0.0
 */
class index extends controller implements action {

    public function execute() {
      $config = $this->getConfig();
      $datoUsuario = new datoUsuarioTable($config);
      $this->objDatoUsuario = $datoUsuario->getAll();
      // así declaramos la vista a usar
      $this->defineView('datoUsuario', 'index', 'html');
    }
}