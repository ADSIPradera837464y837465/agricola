<?php

require_once '../model/base/metodoRiegoBaseTable.class.php';
require_once '../model/metodoRiegoTable.class.php';

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

    $eliminar = new metodoRiegoTable($config);
    
    if (isset($_POST["eliminar"])) {
      foreach ($_POST as $valor) {
        if (is_numeric($valor)) {
          //echo " ".$valor."<br/>";
          $eliminar->setId($valor);
          $eliminar->delete();               
        }
      }       
      header('Location: ' . $config->getUrl() . 'index.php/metodoRiego/index');
    }else{
      $eliminar->setId($id);
      $eliminar->delete();
      header('Location: ' . $config->getUrl() . 'index.php/metodoRiego/index');
    }
  }

}
