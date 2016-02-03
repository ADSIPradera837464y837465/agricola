<?php
require_once '../model/base/bdaMaquinaBaseTable.class.php';
require_once '../model/maquinaTable.class.php';

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

/**
 * Description of index
 *
 * @author marian
 */
class index extends controller implements action {

  public function execute() {

      $config = $this->getConfig();
    
    $where = NULL;
    $cntPages = 0;
    $pages = 0;
    //--------------------- filtros---------------------

    
    $formularioBdaMaquina = filter_input_array(INPUT_POST)['bdaMaquina'];
    $bdaMaquina = new maquinaTable($config);
    $bdaMaquina->setCreated_at($formularioBdaMaquina['createdAt1']);
    $bdaMaquina->setCreated_at($formularioBdaMaquina['createdAt2']);
    $fechaInicial = $formularioBdaMaquina['createdAt1'];
    $fechaFinal = $formularioBdaMaquina['createdAt2'];

    if ((isset($fechaInicial) and $fechaInicial !== null and $fechaInicial !== "") and ( isset($fechaFinal) and $fechaFinal !== null and $fechaFinal !== "" )) {
     
      $page = 0;
      
      if (filter_input_array(INPUT_GET)['page']) {
       
        $pages = filter_input_array(INPUT_GET)['page'];
       
        $page = filter_input_array(INPUT_GET)['page'] - 1;
        $page = $page * 1;
      }//cierre de paginado 
      $numero = 3;
      $cntPages = bdaMaquinaTable::getPaginador($numero, $where);
      
//      $objBdaMaquina = bdaMaquinaTable::getFiltros($fechaInicial, $fechaFinal , 'ASC',$numero,$pages);
      
      
      $this->objMaquina = $objBdaMaquina->getFiltros($fechaInicial, $fechaFinal , 'ASC',$numero,$pages);
      
          $variables = array(
          'objBdaMaquina' => $objBdaMaquina,
          'cntPages' => $cntPages,
          'pages' => $pages
      );
      
       $this->defineView('bdaMaquina', 'index', $variables, 'html');
    }

    //--------------------------------- index -------------------
    else {
    //-------------paginador----------------------------

      $page = 0;
      
      if (filter_input_array(INPUT_GET)['page']) {
       
        $pages = filter_input_array(INPUT_GET)['page'];
       
        $page = filter_input_array(INPUT_GET)['page'] - 1;
        $page = $page * 1;
      }//cierre de paginado 
      $numero = 2;
      $cntPages = bdaMaquinaTable::getPaginador($numero, $where);

       $this->objMaquina = $objBdaMaquina->getAll('ASC',$numero,$pages);
//      $variables = array(
//          'objBdaMaquina' => $objBdaMaquina,
//          'cntPages' => $cntPages,
//          'pages' => $pages
//      );
//      print_r($objBdaMaquina);
//      print_r($cntPages);
//      echo '<br>';
//      print_r($pages);
//      echo '<br>';
//      exit();
      
      $this->defineView('bdaMaquina', 'index', 'html');
    }
  }

}
