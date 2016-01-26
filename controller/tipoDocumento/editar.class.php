<?php
require_once '../model/base/tipoDocumentoBaseTable.class.php';
require_once '../model/tipoDocumentoTable.class.php';



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

    $tipoDocumento = new tipoDocumentoTable($config);

    $this->objTipoDocumento = $tipoDocumento->getById($id);
    $this->defineView('tipoDocumento', 'editar', 'html');
  }

}
