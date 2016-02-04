<?php

require_once '../model/base/turnoBaseTable.class.php';
require_once '../model/turnoTable.class.php';

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

/**
 * Description of index.class.php
 *
 * @author lina montaño <linamontano_1995@hotmail.es>
 * @package FStudio
 * @subpackage controller
 * @subpackage index.class.php
 * @version 1.0.0
 */
class editar extends controller implements action {

  public function execute() {
    $desc = filter_input(INPUT_POST, 'descripcion');
    $id = filter_input(INPUT_POST, 'id');    
    $config = $this->getConfig();
    $update = new turnoTable($config);    
    $update->setDescripcion($desc);
    $update->setId($id);
    $update->update();

     header('Location: ' .  $config->getUrl() .'index.php/turno/index');
  }

}
