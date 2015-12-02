<?php
use azucar\myConfig\myConfig as config;
use azucar\controller\controller;
use azucar\view\view;
include config::getPath() . 'model/personaTable.Class.php';

/**
 * Description of crear
 *
 * @author xubuntu
 */
class crear extends controller{
  
  public function execute() {
    
    $formPersona = filter_input_array(INPUT_POST)['persona'];
    
//    $nombre = filter_input(INPUT_POST, 'nombre');
    
    $persona = new personaTable();
    $persona->setUsuario($formPersona['usuario']);
    $persona->setNombre($formPersona['nombre']);
    $persona->setApellido($formPersona['apellido']);
    $persona->setFecha_nacimiento($formPersona['nacimiento']);
    $persona->setDireccion($formPersona['direccion']);
    $persona->setTelefono($formPersona['telefono']);
    $persona->save();
    
    header('Location: ' . config::getUrl() . 'index.php/persona/index');
    
    
  }
  
}
