<?php

include_once DIR . '/model/usuarioTableClass.php';

/**
 * Description of indexControllerClass
 *
 * @author julianlasso
 */
class indexControllerClass extends controllerClass {

  static public function main() {
    $mensaje = 'Hola mundo desde MVC';
    
    $variables = array(
        'mensaje' => $mensaje
    );
    
    viewClass::definirVista('ejemplo', 'index', $variables, 'html');
  }
}
