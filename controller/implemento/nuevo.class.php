<?php

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

/**
 * Description of nuevo
 *
 * @author emanuelcastm
 */
class nuevo extends controller implements action {
    public function execute() {      
        
      $this->defineView('implemento', 'nuevo', 'html');
    }

}
