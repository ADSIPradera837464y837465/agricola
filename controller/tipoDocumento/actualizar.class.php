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

class actualizar extends controller  {

  public function execute() {
    $config = $this->getConfig();
    $formTipoDocumento = filter_input_array(INPUT_POST)['tipoDocumento'];

    //validaciones

    $tipoDocumento = new tipoDocumentoTable($config);
    $tipoDocumento->setId($formTipoDocumento['id']);
    $tipoDocumento->setDescripcion($formTipoDocumento['descripcion']);
    $tipoDocumento->setTipoMovimiento($formTipoDocumento['tipo_movimiento']);
    $tipoDocumento->setEstado($formTipoDocumento['estado']);

    
    $this->objTipoDocumento = $tipoDocumento->update();
    header('Location: ' . $config->getUrl() . 'index.php/tipoDocumento/index');
        
  }
}
