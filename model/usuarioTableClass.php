<?php

/**
 * Description of usuarioTableClass
 *
 * @author julianlasso
 */
class usuarioTableClass extends modelClass {

  static public function getAll() {
    $conn = self::getConexion();
    $sql = 'SELECT id, user_name FROM usuario';
    $respueta = $conn->prepare($sql);
    $respueta->execute();
    $respueta = $respueta->fetchAll(PDO::FETCH_OBJ);
    return $respueta;
  }

}
