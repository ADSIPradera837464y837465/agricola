<?php
require_once '../model/base/rolBaseTable.class.php';
require_once '../model/rolTable.class.php';


use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;



/**
 * Description of crear
 *
 * @ <.com>
 */

class actualizar extends controller  {
  
  public function execute() {
    $config = $this->getConfig();
     $formRol = filter_input_array(INPUT_POST)['rol'];

        //validaciones

        $rol = new rolTable($config);
        $rol->setNombre($formRol['nombre']);
       

        $this->objRol = $rol->update();
        header('Location: ' . $config->getUrl() . 'index.php/rol/index');
    
  }
}
