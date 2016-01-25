<?php

require_once '../model/base/terceroBaseTable.class.php';
require_once '../model/terceroTable.class.php';

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

/**
 * Description of actualizar.class.php
 *
 * @author Jordan Marles <jordanmarles@hotmail.es>
 * @package FStudio
 * @subpackage controller
 * @subpackage actualizar.class.php
 * @version 1.0.0
 */
class actualizar extends controller implements action{
  
  public function execute() {
    
    $config = $this->getConfig();
    
    $formtercero = filter_input_array(INPUT_POST)['tercero'];    
    $tercero = new terceroTable($config);
    $tercero->setId($formtercero['id']);
    $tercero->setNombre($formtercero['nombre']);
    $tercero->setApellido($formtercero['apellido']);
    $tercero->setTelefono($formtercero['telefono']);
    $tercero->setDireccion($formtercero['direccion']);
    $tercero->setCorreo($formtercero['correo']);
    $tercero->setCargoId($formtercero['cargoId']);
    $tercero->setTipoId($formtercero['tipoId']);
    $tercero->setTipoTerceroId($formtercero['tipoTerceroId']);
    $this->objtercero = $tercero->update();
    
    header('Location: ' . $config->getUrl() . 'index.php/tercero/index');
    exit();
    
  }
  
}
