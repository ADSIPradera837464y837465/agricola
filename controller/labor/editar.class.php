<?php
require_once '../model/base/laborBaseTable.class.php';
require_once '../model/laborTable.class.php';



use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;



/**
 * Description of editar
 *
 * @author victoria cortes <victoriacortes2014@hotmail.com>
 */
class editar extends controller implements action {
  
    public function execute() {        
        $id = filter_input(INPUT_GET, 'id');
        $config = $this->getConfig();
        
        $labor = new  laborTable($config);

$this->objLabor = $labor->getById($id);
        $this->defineView('labor', 'editar', 'html');
    }

}
