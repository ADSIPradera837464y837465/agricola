<?php

require_once '../model/base/maquinaBaseTable.class.php';
require_once '../model/maquinaTable.class.php';

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;
/**
 * Description of eliminar
 *
 * mariam
 * @package FStudio
 * @subpackage controller
 * @subpackage index.class.php
 * @version 1.0.0
 */
class eliminar extends controller implements action {

public function execute() {

$esbId = filter_input(INPUT_POST, 'id');
$maquina = new maquinaTable();
$maquina->setId($esbId);
$this->objmaquina = $maquina->delete();
$variables = array(
'data' => array('code' => 200)
);
$this->defineView('maquina', 'eliminar', $variables, 'json');
}
}
