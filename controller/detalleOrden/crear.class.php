<?php

require_once '../model/base/detalleOrdenBaseTable.class.php';
require_once '../model/detalleOrdenTable.class.php';

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

/**
 * Description of crear.class.php
 *
 * @author Maribel zamora <mazagi86@hotmail.com>
 * @package FStudio
 * @subpackage controller
 * @subpackage crear.class.php
 * @version 1.0.0
 */
class crear extends controller {

  public function execute() {
    $formDetalleOrden = filter_input_array(INPUT_POST)['detalleOrden'];

    $detalleOrden = new detalleOrdenTable();
    $detalleOrden->setDeoId($formDetalleOrden['deoId']);
    $detalleOrden->setOrsId($formDetalleOrden['orsId']);
    $detalleOrden->setSerId($formDetalleOrden['serId']);
    $detalleOrden->save();




    header('Location: ' . $FsConfig->getUrl() . 'index.php/detalleOrden/index');
  }

}
