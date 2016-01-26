<?php

require_once '../model/base/laboresMaquinaEquipoBaseTable.class.php';
require_once '../model/laboresMaquinaEquipoTable.class.php';

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;



/**
 * Description of ver
 *
 * @author Emanuelcm
 */
class ver extends controller implements action {

  public function execute() {


    $id = filter_input(INPUT_GET, 'id');
    $config = $this->getConfig();
    $laboresMaquinaEquipo = new laboresMaquinaEquipoTable($config);


    $this->objLaboresMaquinaEquipo = $laboresMaquinaEquipo->getById($id);
    $this->defineView('laboresMaquinaEquipo', 'ver', 'html');
  }

}
