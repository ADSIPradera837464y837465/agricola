<?php

require_once '../model/base/siembraBaseTable.class.php';
require_once '../../model/siembraTable.class.php';

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;
/**
 * Description of bitacoraTable
 * @author wilmer andres martinez chamorro <wilmerelmejor94@hotmail.com>
 * @package
 * @subpackage model
 * @subpackage table
 * @version 1.0.0
 */
class index extends controller implements action {

    public function execute() {
      $config = $this->getConfig();
      $siembra = new siembraTable($config);
      $this->objTercero = $siembra->getAll();
      // así declaramos la vista a usar
      $this->defineView('siembra', 'index', 'html');
    }
}
