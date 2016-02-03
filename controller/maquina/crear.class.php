<?php

require_once '../model/base/maquinaBaseTable.class.php';
require_once '../model/base/maquinaTable.class.php';

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

/**
 * Description of index
 *
 * @author marian
 */
class crear extends controller {

  public function execute() {

    $formularioBdaMaquina = filter_input_array(INPUT_POST)['bdaMaquina'];

    $bdaMaquina = new bdaMaquinaTable();
    $bdaMaquina->setMaq_id($formularioBdaMaquina['maqId']);
    $bdaMaquina->setMaq_estado($formularioBdaMaquina['maqEstado']);
    $bdaMaquina->setMaq_valor($formularioBdaMaquina['maqValor']);
    $bdaMaquina->setMaq_fecha_compra($formularioBdaMaquina['maqFechaCompra']);
    $bdaMaquina->setMaq_numero_chasis($formularioBdaMaquina['maqNumeroChasis']);
    $bdaMaquina->setMaq_tipo_accesorio($formularioBdaMaquina['maqTipoAccesorio']);
    $bdaMaquina->setMaq_horas_trabajadas($formularioBdaMaquina['maqHorasTrabajadas']);
    $bdaMaquina->setMaq_tiempo_mantenimiento_hora($formularioBdaMaquina['maqTiempoMantenimientoHora']);
    $bdaMaquina->setMaq_numero_serie($formularioBdaMaquina['maqNumeroSerie']);
    $bdaMaquina->setMaq_modelo($formularioBdaMaquina['maqModelo']);
    $bdaMaquina->setMaq_horas_actividad($formularioBdaMaquina['maqHorasActividad']);
    $bdaMaquina->setMaq_valor_hora($formularioBdaMaquina['maqValorHora']);
    
    $bdaMaquina->save();

    header('Location: ' .$fsConfig->getUrl() . 'index.php/bdaMaquina/index');
    exit();
  }

}
