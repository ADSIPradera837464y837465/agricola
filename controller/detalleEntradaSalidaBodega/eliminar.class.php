<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of eliminar
 *
 * @author diana
 */
class eliminar extends controller {

    public function execute() {
     
        $desId = filter_input(INPUT_POST, 'desId');
        $detalleEntradaSalidaBodega = new detalleEntradaSalidaBodegaTable();
        $detalleEntradaSalidaBodega->setDesId($desId);
        $detalleEntradaSalidaBodega->delete();
        $variables=array(
            'data'=>array('code'=>200)
            );
        view::defineView('detalleEntradaSalidaBodega','eliminar' , $variables, 'json');
    }
}
