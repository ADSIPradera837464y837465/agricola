<?php

require_once '../model/base/entradaSalidaBodegaBaseTable.class.php';
require_once '../model/entradaSalidaBodegaTable.class.php';
include_once '../libs/Zebra_Pagination.php';

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

/**
 * Description of index.class.php
 *
 * @author Diana Meneses <meneses_d@rocketmail.com>
 * @package FStudio
 * @subpackage controller
 * @subpackage index.class.php
 * @version 1.0.0
 */
class index extends controller implements action {

  public function execute() {
    $config = $this->getConfig();
    
    $metodo = new entradaSalidaBodegaTable($config);
    $paginacion = new Zebra_Pagination();
    $this->objRespuesta = $metodo->total();
    $respuesta = $this->objRespuesta[0];
    $resultado = 7;
    $pagina = ($paginacion->get_page() - 1 ) * $resultado;
    
    $indicio = filter_input(INPUT_POST, 'filtro');
    if (empty($indicio)) {
    $this->objMetodo = $metodo->pager($resultado, $pagina);
    } else{
      $this->objFiltro = $metodo->filtro($indicio);
      $this->objMetodo = $this->objFiltro;
    }
        
//    $entradaSalidaBodega = new entradaSalidaBodegaTable($config);
//    
//    $this->objEntradaSalidaBodega = $entradaSalidaBodega->getAll();
//    
//    $paginacion = new Zebra_Pagination();
//    $this->objRespuesta = $entradaSalidaBodega->resultadoPaginador();
//    $respuesta = $this->objRespuesta[0];
//    $datosMostrar = 7;
//    $pagina = ($paginacion->get_page() - 1 ) * $datosMostrar;


    $this->defineView('entradaSalidaBodega', 'index', 'html');
  }

}
