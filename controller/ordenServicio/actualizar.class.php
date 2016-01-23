<?php

require_once '../model/base/ordenServicioBaseTable.class.php';
require_once '../model/ordenServicioTable.class.php';

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

/**
 * Description of  actualizar
 * @author Itiani Moreno Rosero <itiani2811@gmail.com>
 * @package
 * @subpackage model
 * @subpackage table
 * @version 1.0.0
 */
class actualizar extends controller implements action {

  public function execute() {
    $formularioOrdenServicio = filter_input_array(INPUT_POST)['ordenServicio'];

    $ordenServicio = new ordenServicioTable();
    $ordenServicio->setOrsId($formularioOrdenServicio['ors_id']);
    $ordenServicio->setMaqId($formularioOrdenServicio['maq_id']);
    $ordenServicio->setTmaId($formularioOrdenServicio['tma_id']);
    $ordenServicio->setTerIdElabora($formularioOrdenServicio['ter_id_elabora']);
    $ordenServicio->setTerIdRealiza($formularioOrdenServicio['ter_id_realiza']);
    $ordenServicio->setOrsFecha($formularioOrdenServicio['ors_fecha']);
    $ordenServicio->setOrsObservacion($formularioOrdenServicio['ors_Observacion']);
    $ordenServicio->setOrsCreatedAt($formularioOrdenServicio['ors_created_at']);
    $this->objordenServicio = $ordenServicio->update();

  $this->defineView('ordenServicio', 'actualizar', 'html');
  }

}

