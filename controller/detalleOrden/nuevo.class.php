<?php

use azucar\controller\controller;
use azucar\view\view;

/**
 * Description of nuevo.class.php
 *
 * @author Maribel zamora <mazagi86@hotmail.com>
 * @package FStudio
 * @subpackage controller
 * @subpackage crear.class.php
 * @version 1.0.0
 */
class nuevo extends controller {

  public function execute() {

    view::defineView('detalleOrden', 'nuevo', null, 'html');
  }

}
