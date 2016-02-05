<?php

require_once '../model/base/tipoDocumentoBaseTable.class.php';
require_once '../model/tipoDocumentoTable.class.php';

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

//include $fsConfig->getPath() . 'model/implementoTable.class.php';

/**
 * Description of ver
 *
 * @author Emanuelcm
 */
class ver extends controller implements action {

  public function execute() {


    $id = filter_input(INPUT_GET, 'id');
    $config = $this->getConfig();
    $tipoDocumento = new tipoDocumentoTable($config);

//    $this->objImplemento = implementoTable::getById($id);
//
//    $variables = array(
//        'objImplemento' => $objImplemento
//    );
    $this->objTipoDocumento = $tipoDocumento->getAll();
    $this->defineView('tipoDocumento', 'ver', 'html');
  }

}
