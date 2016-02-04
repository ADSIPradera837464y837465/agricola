<?php

require_once '../model/base/laboresMaquinaEquipoBaseTable.class.php';
require_once '../model/laboresMaquinaEquipoTable.class.php';

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

/**
 * Description of crear
 *
 * @emanuelcastm <corcel125@outlook.com>
 */
class eliminar extends controller implements action {

  
  public function execute() {
    $id = filter_input(INPUT_POST, 'id');
    $config = $this->getConfig();
    $laboresMaquinaEquipo = new laboresMaquinaEquipoTable($config);
    $laboresMaquinaEquipo->setId($id);
    $this->objLaboresMaquinaEquipo = $laboresMaquinaEquipo->delete();
    $variables = array(
        'data' => array('code' => 200)
    );
    $this->defineView('laboresMaquinaEquipo', 'eliminar', $variables, 'json');
  }

}
