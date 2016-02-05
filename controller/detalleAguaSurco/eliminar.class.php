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
class eliminar extends controller implements action {

  public function execute() {
    $config = $this->getConfig();
    $id = filter_input(INPUT_GET, 'id');

    $eliminar = new detalleAguaSurcoTable($config);

    if (isset($_POST["eliminar"])) {
      foreach ($_POST as $valor) {
        if (is_numeric($valor)) {          
         #$eliminar->setId($valor);
          $eliminar->delete();
          header('Location: ' . $config->getUrl() . 'index.php/detalleAguaSurco/index?lugar=1');
        } else if (strlen($valor) < 6) {
          $eliminar->setId($valor);
          $eliminar->delete();          
          header('Location: ' . $config->getUrl() . 'index.php/detalleAguaSurco/index?lugar=2');
        } else{                    
          header('Location: ' . $config->getUrl() . 'index.php/detalleAguaSurco/index?lugar=3');
          
        }
      }
      
    } else {
      $eliminar->setId($id);
      $eliminar->delete();
      header('Location: ' . $config->getUrl() . 'index.php/detalleAguaSurco/index');
    }
  }

}
