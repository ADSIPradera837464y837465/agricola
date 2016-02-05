<?php
use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;
/**
 * Description of nuevo
 *..
 * @author diana meneses <meneses_d@rocketmail.com>
 * @package FStudio
 * @subpackage controller
 * @subpackage ver.class.php
 * @version 1.0.0
 */
class nuevo  extends controller implements action{
    public function execute() {
        
        
        $this->defineView('detalleEntradaSalidaBodega', 'nuevo', 'html');
    }
}
