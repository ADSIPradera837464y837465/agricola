<?php

require_once '../model/base/controlRiegoPluviosidadBaseTable.class.php';
require_once '../model/controlRiegoPluviosidadTable.class.php';

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

/**
 * Description of index
 * @author Daniela Barona Mosquera <mo_naok@hotmail.com>
 * @package 
 * @subpackage model
 * @subpackage base
 * @version 1.0.0
 */
class index extends controller {

  public function execute() {
    $objControlRiegoPluviosidad = controlRiegoPluviosidadTable::getAll();
    
    $variables = array(
        'objControlRiegoPluviosidad' => $objControlRiegoPluviosidad
    );
    
    view::defineView('controlRiegoPluviosidad', 'index', $variables, 'html');
  }

  
}
