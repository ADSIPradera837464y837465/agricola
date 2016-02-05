<?php
require_once '../model/base/implementoBaseTable.class.php';
require_once '../model/implementoTable.class.php';


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
        
        $implemento = new  implementoTable($config);

//        $variables = array(
//            'objImplemento' => $objImplemento
//        );
$this->objImplemento = $implemento->getAll();
        $this->defineView('implemento', 'editar', 'html');
    }

}
