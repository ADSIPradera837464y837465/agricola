<?php

use azucar\myConfig\myConfig as config;
use azucar\controller\controller;
use azucar\view\view;
include config::getPath() . 'model/personaTable.Class.php';

/**
 * Description of actualizar
 *
 * @author xubuntu
 */
class actualizar extends controller {
  
  public function execute() {
    $formularioPersona = filter_input_array(INPUT_POST)['persona'];
    $persona = new personaTable();
    $persona->setId($formularioPersona['id']);
    $persona->setUsuario($formularioPersona['usuario']);
    $persona->setNombre($formularioPersona['nombre']);
    $persona->setApellido($formularioPersona['apellido']);
    $persona->setFecha_nacimiento($formularioPersona['nacimiento']);
    $persona->setDireccion($formularioPersona['direccion']);
    $persona->setTelefono($formularioPersona['telefono']);
    $persona->update();
    
    header('Location:' . config::getUrl() . 'index.php/persona/index');
    
  }
  
}
