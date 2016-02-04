<?php
require_once '../model/base/laborBaseTable.class.php';
require_once '../model/laborTable.class.php';


use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;



/**
 * Description of crear
 *
 * @author victoria cortes <victoriacortes2014@hotmail.com>
 */

class actualizar extends controller  {
  
  public function execute() {
    $config = $this->getConfig();
     $formLabor = filter_input_array(INPUT_POST)['labor'];

        //validaciones

        $labor = new laborTable($config);
        $labor->setId($formLabor['id']);
        $labor->setDescripcion($formLabor['descripcion']);
        $labor->setValor($formLabor['valor']);
        $labor->setEstado($formLabor['estado']);
       

        $this->objLabor = $labor->update();
        header('Location: ' . $config->getUrl() . 'index.php/labor/index');
    
  }
}
