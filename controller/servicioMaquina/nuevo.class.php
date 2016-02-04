<?php


use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;
/**
 * Description of nuevo.class.php
 *
 * @author Maribel zamora <mazagi86@hotmail.com>
 * @package FStudio
 * @subpackage controller
 * @subpackage nuevo.class.php
 * @version 1.0.0
 * 
 */
class nuevo  extends controller implements action{
    public function execute() {
        
        
      $this->defineView('servicioMaquina', 'nuevo', 'html');
    }
}
