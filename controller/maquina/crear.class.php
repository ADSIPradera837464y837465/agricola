<?php

require_once '../model/base/maquinaBaseTable.class.php';
require_once '../model/maquinaTable.class.php';

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

/**
 * Description of index
 *
 * @author marian
 */
class crear extends controller implements action {

  public function execute() {

    $config = $this->getConfig();
    $maquina = new maquinaTable($config);


    $formularioBdaMaquina = filter_input_array(INPUT_POST)['maquina'];


    
    $maquina->setEstado($formularioBdaMaquina['maqEstado']);
    $maquina->setValor($formularioBdaMaquina['maqValor']);
//    $maquina->setFechaCompra($formularioBdaMaquina['maqFechaCompra']);
    $maquina->setNumeroChasis($formularioBdaMaquina['maqNumeroChasis']);
    $maquina->setTipoAccesorio($formularioBdaMaquina['maqTipoAccesorio']);
    $maquina->setHorasTrabajadas($formularioBdaMaquina['maqHorasTrabajadas']);
    $maquina->setTiempoMantenimientoHora($formularioBdaMaquina['maqTiempoMantenimientoHora']);
    $maquina->setNumeroSerie($formularioBdaMaquina['maqNumeroSerie']);
    $maquina->setModelo($formularioBdaMaquina['maqModelo']);
    $maquina->setHorasActividad($formularioBdaMaquina['maqHorasActividad']);
    $maquina->setValorHora($formularioBdaMaquina['maqValorHora']);

    $this->objMaquina = $maquina->save();

    header('Location: ' . $fsConfig->getUrl() . 'index.php/maquina/index');
    exit();
  }

}
