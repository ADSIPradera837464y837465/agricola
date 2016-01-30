<?php


use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;
/**
 * Description of nuevo
 *
 * @author Angela Cardona <angela04cardona@hotmail.com>
 * @package FStudio
 * @subpackage controller
 * @subpackage index.class.php
 * @version 1.0.0
 */
class nuevo  extends controller implements action{
    public function execute() {
        
        
      $this->defineView('detalleEjecucion', 'nuevo', 'html');
    }
}
