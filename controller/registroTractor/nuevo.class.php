<?php

require_once '../model/base/registroTractorBaseTable.class.php';
require_once '../model/registroTractorTable.class.php';


use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

/**
 * Description detalleRegistro
 * @author Johanna G <ladyjkaulitz@hotmail.com>
 * @package
 * @subpackage model
 * @subpackage table
 * @version 1.0.0
 */
class nuevo extends controller implements action {

  public function execute() {


    $this->defineView('registroTractor', 'nuevo', 'html');
  }

}
