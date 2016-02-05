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

class actualizar extends controller  {
  
  public function execute() {
    $config = $this->getConfig();
     $formLaboresMaquinaEquipo = filter_input_array(INPUT_POST)['laboresMaquinaEquipo'];

        //validaciones

        $laboresMaquinaEquipo = new implementoTable($config);
        $laboresMaquinaEquipo->setDescripcion($formLaboresMaquinaEquipo['hacienda_id']);
       

        $this->objFormLaboresMaquinaEquipo = $laboresMaquinaEquipo->update();
        header('Location: ' . $config->getUrl() . 'index.php/laboresMaquinaEquipo/index');
    
  }
}
