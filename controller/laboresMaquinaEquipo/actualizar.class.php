<?php
require_once '../model/base/laboresMaquinaEquipoBaseTable.class.php';
require_once '../model/laboresMaquinaEquipoTable.class.php';


use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;



/**
 * Description of crear
 *
 * @emanuelcastm <corcel125@outlook.com>
 */

class actualizar extends controller  {
  
  public function execute() {
    $config = $this->getConfig();
     $formLaboresMaquinaEquipo = filter_input_array(INPUT_POST)['laboresMaquinaEquipo'];

        //validaciones

        $laboresMaquinaEquipo = new laboresMaquinaEquipoTable($config);
        $laboresMaquinaEquipo->setId($formLaboresMaquinaEquipo['id']);       
        $laboresMaquinaEquipo->setHaciendaId($formLaboresMaquinaEquipo['hacienda_id']);
        $laboresMaquinaEquipo->setTerceroId($formLaboresMaquinaEquipo['tercero_id']);
        $laboresMaquinaEquipo->setTipoDocumentoId($formLaboresMaquinaEquipo['tipo_documento_id']);
        $laboresMaquinaEquipo->setImplementoId($formLaboresMaquinaEquipo['implemento_id']);
        $laboresMaquinaEquipo->setFecha($formLaboresMaquinaEquipo['fecha']);
        $laboresMaquinaEquipo->setEstado($formLaboresMaquinaEquipo['estado']);
        $laboresMaquinaEquipo->setTiempo($formLaboresMaquinaEquipo['tiempo']);
        $laboresMaquinaEquipo->setTotalHorasTrabajadas($formLaboresMaquinaEquipo['total_horas_trabajadas']);

        
        $this->objLaboresMaquinaEquipo = $laboresMaquinaEquipo->update();
        header('Location: ' . $config->getUrl() . 'index.php/laboresMaquinaEquipo/index');
    
  }
}
