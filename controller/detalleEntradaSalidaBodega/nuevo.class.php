<?php


use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;
/**
 * Description of nuevo
 *
 * @author diana
 */
class nuevo  extends controller implements action{
    public function execute() {
        
        
      $this->defineView('detalleEntradaSalidaBodega', 'nuevo', 'html');
    }
}
