<?php
require_once '../model/base/implementoBaseTable.class.php';
require_once '../model/implementoTable.class.php';


use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;



/**
 * Description of crear
 *
 * @emanuelcastm <corcel125@outlook.com>
 */

class actualizar extends controller  {
  
  public function execute() {
    $config = $this->getConfig();
     $formImplemento = filter_input_array(INPUT_POST)['implemento'];

        //validaciones

        $implemento = new implementoTable($config);
        $implemento->setDescripcion($formImplemento['descripcion']);
       

        $this->objImplemento = $implemento->update();
        header('Location: ' . $config->getUrl() . 'index.php/implemento/index');
    
  }
}
