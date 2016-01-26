<?php

require_once '../model/base/registroTractorBaseTable.class.php';
require_once '../model/registroTractorTable.class.php';


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
class actualizar extends controller implements action {

  public function execute() {
    $formRegistroTractor = filter_input_array(INPUT_POST)['registroTractor'];

    $registroTractor = new registroTractorTable();
  $registroTractor->setControlSalidaCana($formRegistroTractor['csc_id']);
    $registroTractor->setHoraSalida($formRegistroTractor['hora_salida']);
    $registroTractor->setTractor($formRegistroTractor['rtr_tractor']);
    $registroTractor->setObservacion($formRegistroTractor['rtr_observacion']);
 
    $registroTractor->setDerCreatedAt($formRegistroTractor['der_created_at']);
    $this->objDetaleRegistro = $registroTractor->update();

  $this->defineView('registroTractor', 'actualizar', 'html');
  }

}

