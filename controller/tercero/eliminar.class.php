<?php

require_once '../model/base/terceroBaseTable.class.php';
require_once '../model/terceroTable.class.php';

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

/**
 * Description of eliminar.class.php
 *
 * @author Jordan Marles <jordanmarles@hotmail.es>
 * @package FStudio
 * @subpackage controller
 * @subpackage eliminar.class.php
 * @version 1.0.0
 */

class eliminar extends controller implements action {

  public function execute() {
    $config = $this->getConfig();
    $id = filter_input(INPUT_POST, 'id');

    $tercero = new terceroTable($config);
    $tercero->setId($id);
    $this->objtercero = $tercero->delete();
    $variables = array(
        'data' => array('code' => 200)
    );
    $this->defineView('tercero', 'eliminar', $variables, 'json');
    
  }

}