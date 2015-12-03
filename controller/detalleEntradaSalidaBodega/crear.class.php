<?php
require_once '../model/base/detalleEntradaSalidaBodegaBaseTable.class.php';
require_once '../model/detalleEntradaSalidaBodegaTable.class.php';

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

/**
 * Description of crear
 *
 * @author diana meneses <meneses_d@rocketmail.com>
 */

class crear extends controller  {
  
  public function execute() {
     $formDetalleEntradaSalidaBodega = filter_input_array(INPUT_POST)['detalleEntradaSalidaBodega'];

        //validaciones

        $detalleEntradaSalidaBodega = new detalleEntradaSalidaBodegaTable();
        $detalleEntradaSalidaBodega->setDesId($formDetalleEntradaSalidaBodega['nombre']);
        $detalleEntradaSalidaBodega->setEsbId($formDetalleEntradaSalidaBodega['apellido']);
        $detalleEntradaSalidaBodega->setProId($formDetalleEntradaSalidaBodega['telefono']);
        $detalleEntradaSalidaBodega->setUmnId($formDetalleEntradaSalidaBodega['extencion']);
        $detalleEntradaSalidaBodega->setCantidad($formDetalleEntradaSalidaBodega['cargo']);
        $detalleEntradaSalidaBodega->setPrecio($formDetalleEntradaSalidaBodega['sueldo']);

        $detalleEntradaSalidaBodega->save();
        header('Location: ' . $fsConfig->getUrl() . 'index.php/detalleEntradaSalidaBodega/index');
    
  }
}
