<?php
require_once '../model/base/laboresMaquinaEquipoBaseTable.class.php';
require_once '../model/laboresMaquinaEquipoTable.class.php';


//use FStudio\myConfig  as config;
use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

//include config::getPath . 'model/implementoTable.class.php';

/**
 * Description of editar
 *
 * @author emanuelcastm
 */
class editar extends controller implements action {
  
    public function execute() {
      
        
        $id = filter_input(INPUT_GET, 'id');
        $config = $this->getConfig();
        
        $laboresMaquinaEquipo = new  laboresMaquinaEquipoTable($config);

//        $variables = array(
//            'objImplemento' => $objImplemento
//        );
$this->objFormLaboresMaquinaEquipo = $laboresMaquinaEquipo->getAll();
        $this->defineView('laboresMaquinaEquipo', 'editar', 'html');
    }

}
