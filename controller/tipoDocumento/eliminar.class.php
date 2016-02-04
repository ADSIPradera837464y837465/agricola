<?php

require_once '../model/base/tipoDocumentoBaseTable.class.php';
require_once '../model/tipoDocumentoTable.class.php';

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

/**
 * Description of crear
 *
 * @emanuelcastm <corcel125@outlook.com>
 */
class eliminar extends controller implements action {

  
  public function execute() {
    $id = filter_input(INPUT_POST, 'id');
    $config = $this->getConfig();
    $tipoDocumento = new tipoDocumentoTable($config);
    $tipoDocumento->setId($id);
    $this->objTipoDocumento = $tipoDocumento->delete();
    $variables = array(
        'data' => array('code' => 200)
    );
    $this->defineView('tipoDocumento', 'eliminar', $variables, 'json');
  }
}
