<?php
require_once '../model/base/implementoBaseTable.class.php';
require_once '../model/implementoTable.class.php';



use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;



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

$this->objImplemento = $implemento->getById($id);
        $this->defineView('implemento', 'editar', 'html');
    }

}
