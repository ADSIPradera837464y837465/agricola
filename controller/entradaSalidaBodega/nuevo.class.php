<?php


use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;
/**
 * Description of nuevo
 *
 * @author Diana Meneses <meneses_d@rocketmail.com>
 * @package FStudio
 * @subpackage controller
 * @subpackage index.class.php
 * @version 1.0.0
 */
class nuevo  extends controller implements action{
    public function execute() {
        
        
      $this->defineView('entradaSalidaBodega', 'nuevo', 'html');
    }
}
