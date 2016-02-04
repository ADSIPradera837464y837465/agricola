<?php

require_once '../model/base/datoUsuarioBaseTable.class.php';
require_once '../model/datoUsuarioTable.clas.php';

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

/**
 * Description detalleRegistro
 * @author Johanna G <ladyjkaulitz@hotmail.com>
 * @package
 * @subpackage model
 * @subpackage table
 * @version 1.0.0
 */
class crear extends controller implements action {

  public function execute() {

    $config = $this->getConfig();
    $formDatoUsuario = filter_input_array(INPUT_POST)['datoUsuario'];

    $datoUsuario = new datoUsuarioTable($config);
    $datoUsuario->setNombre($formDatoUsuario['dus_nombre']);
    $datoUsuario->setApellidos($formDatoUsuario['dus_apellidos']);
    $datoUsuario->setCedula($formDatoUsuario['dus_cedula']);
    $datoUsuario->setMovil($formDatoUsuario['dus_movil']);
    $datoUsuario->setCorreo($formDatoUsuario['dus_correo']);
    $datoUsuario->setImagen($formDatoUsuario['dus_imagen']);
    $datoUsuario->setSexo($formDatoUsuario['dus_sexo']);
    $datoUsuario->save();

    header('Location: ' . $config->getUrl() . 'index.php/datoUsuario/index');
  }

}
