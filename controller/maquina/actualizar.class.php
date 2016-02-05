<?php
require_once '../model/base/maquinaBaseTable.class.php';
require_once '../model/maquinaTable.class.php';

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;
;
/**
 * Description of index
 *
 * @author marian
 */
class actualizar extends controller implements action {

  public function execute() {
    $config = $this->getConfig();
  
  $bdaMaquina = new maquinaTable($config);
  $formularioBdaMaquina = filter_input_array(INPUT_POST)['maquina'];
  
  $bdaMaquina->setId($formularioBdaMaquina['id']);
  $bdaMaquina->setEstado($formularioBdaMaquina['maqEstado']);
  $bdaMaquina->setValor($formularioBdaMaquina['maqValor']);
  $bdaMaquina->setFechaCompra($formularioBdaMaquina['maqFechaCompra']);
  $bdaMaquina->setNumeroChasis($formularioBdaMaquina['maqNumeroChasis']);
  $bdaMaquina->setTipoAccesorio($formularioBdaMaquina['maqTipoAccesorio']);
  $bdaMaquina->setHorasTrabajadas($formularioBdaMaquina['maqHorasTrabajadas']);
  $bdaMaquina->setTiempoMantenimientoHora($formularioBdaMaquina['maqTiempoMantenimientoHora']);
  $bdaMaquina->setNumeroSerie($formularioBdaMaquina['maqNumeroSerie']);
  $bdaMaquina->setModelo($formularioBdaMaquina['maqModelo']);
  $bdaMaquina->setHorasActividad($formularioBdaMaquina['maqHorasActividad']);
  $bdaMaquina->setValorHora($formularioBdaMaquina['maqValorHora']);
  
  $this->objMaquina = $bdaMaquina->update();
  
    header('Location: '. $config->getUrl().'index.php/maquina/index');
    
  }

  
}