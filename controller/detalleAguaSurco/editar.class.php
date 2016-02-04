<?php

require_once '../model/base/detalleAguaSurcoBaseTable.class.php';
require_once '../model/detalleAguaSurcoTable.class.php';


use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

/**
 * Description of index.class.php
 *
 * @author Duvier Marin <duvier_24@hotmail.es>
 * @package FStudio
 * @subpackage controller
 * @subpackage index.class.php
 * @version 1.0.0
 */
class editar extends controller implements action {

  public function execute() {
    $id = filter_input(INPUT_POST, 'id');    
    $item = filter_input(INPUT_POST, 'item');
    $cantidad = filter_input(INPUT_POST, 'cantidad');
    $numero = filter_input(INPUT_POST, 'numero');
    $config = $this->getConfig();
    $update = new detalleAguaSurcoTable($config);    
    $update->setItem($item);
    $update->setCantidadSurco($cantidad);
    $update->setControlAdministrativoRiegoId($numero);
    $update->setId($id);
    $update->update();

     header('Location: ' .  $config->getUrl() .'index.php/detalleAguaSurco/index');
  }

}
