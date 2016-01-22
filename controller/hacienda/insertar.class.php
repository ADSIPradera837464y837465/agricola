<?php

require_once '../model/base/haciendaBaseTable.class.php';
require_once '../model/haciendaTable.class.php';

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
class insertar extends controller implements action {

  public function execute() {
    $config = $this->getConfig();
    $descripcion = filter_input(INPUT_POST, 'descripcion');
    $ubicacion = filter_input(INPUT_POST, 'ubicacion');
    $repLegal = filter_input(INPUT_POST, 'RepLegal');
    $insertar = new haciendaTable($config);
    $insertar->setDescripcion($descripcion);
    $insertar->setUbicacion($ubicacion);
    $insertar->setRepresentanteLegal($repLegal);
    $insertar->save();

    header('Location: ' .  $config->getUrl() .'index.php/hacienda/index');
  }

}
