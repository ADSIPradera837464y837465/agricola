<?php

require_once '../model/base/turnoBaseTable.class.php';
require_once '../model/turnoTable.class.php';
require_once '../libs/Zebra_Pagination.php';

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

/**
 * Description of index.class.php
 *
 * @author lina montaño <linamontano_1995@hotmail.com>
 * @package FStudio
 * @subpackage controller
 * @subpackage index.class.php
 * @version 1.0.0
 */
class index extends controller implements action {

  public function execute() {
    $config = $this->getConfig();
    $turno = new turnoTable($config);
    $paginacion = new Zebra_Pagination();
    $this->objRespuesta = $turno->total();
    $respuesta = $this->objRespuesta[0];
    $resultado = 7;
    $pagina = ($paginacion->get_page() - 1 ) * $resultado;


    $indicio = filter_input(INPUT_POST, 'filtro');
    if (empty($indicio)) {
    $this->objMetodo = $turno->getAll($resultado, $pagina);
    } else{
      $this->objFiltro = $turno->filtro($indicio);
      $this->objturno = $this->objFiltro;
    }
    $this->defineView('turno', 'index', 'html');
  }

}

