<?php

use FStudio\model\base\usuarioBaseTable;

/**
 * Description of usuarioTable
 * @author Magda lucia chaux martinez <lucia_chaux@hotmail.com>
 * @package
 * @subpackage model
 * @subpackage table
 * @version 1.0.0
 */
class usuarioTable extends usuarioBaseTable {
  
  /**
   * obtiene todos los datos de la tabla
   * @return type
   */
  public function getAll() {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT usr_id, usr_user, usr_password, usr_actived, usr_last_login_at, usr_created_at, usr_updated_at, usr_deleted_at '
            . 'FROM bda_usuario ORDER BY usr_created_at ASC';
    $answer = $conn->prepare($sql);
    $answer->execute();
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }

  /**
   * obtiene un solo dato de la tabla por medio del id
   * @param type $id
   * @return type
   */
  public function getById($id=null) {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT usr_id, usr_user, usr_password, usr_actived, usr_last_login_at, usr_created_at, updated_at,usr_deleted_at '
            . 'FROM bda_usuario '
            . 'WHERE usr_id = :id';
    $params = array(
        ':id' => ($id !== null) ? $id: $this->getId()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }

  /**
   * registra los datos del objeto de la tabla
   * @return type
   */
  public function save() {
    $conn = $this->getConnection($this->config);
    $sql = 'INSERT INTO bda_usuario ( usr_user, usr_password, usr_actived, usr_last_login_at) VALUES (:usr_user, :usr_password, :usr_actived, :usr_last_login_at)';
    $params = array(
        ':usr_user' => $this->getUsuario(),
        ':usr_password' => $this->getPassword(),
        ':usr_actived' => $this->getActivited(),
        ':usr_last_login_at' => $this->getUsrDeletedAt()
        
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
   // return $conn->lastInsertId(self::_SEQUENCE);
   //  /** esta funcion me trae el id que se acava de registrar   */
    $this->setId($conn->lastInsertId(self::_SEQUENCE));
    return tuue;
  }

  /**
   * Actualiza un registro de la tabla 
   * @return boolean
   */
  public function update($id) {
    $conn = $this->getConnection($this->config);
    $sql = 'UPDATE bda_usuario SET usr_user = :usr_user, usr_password = :usr_password, usr_actived = :usr_actived, '
            . ' usr_last_login_at = :usr_last_login_at  WHERE usr_id = :id';
    $params = array(
        ':usr_user' => $this->getUsuario(),
        ':usr_password' => $this->getPassword(),
        ':usr_actived' => $this->getActivited(),
        ':usr_last_login_at' => $this->getUsrDeletedAt(),
        ':id'=>$id
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return true;
  }
/**
 * Boolean $deleteLogica = eliminar un registro visualmente
 * Boolean $deletefisical=eliminar un registro de forma permanente de la base de datos
 * @return boolean
 * 
 */
  public function delete() {
    $conn = $this->getConnection($this->config);
    $sql = 'DELETE FROM bda_usuario WHERE usr_id = :id';
    $params = array(
        ':id' => $this->getId()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return true;
  }
}
