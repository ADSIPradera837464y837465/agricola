<?php

use FStudio\model\base\usuarioBaseTable;

/**
 * Description of usuarioTable
 * 
 * @author Magda lucia chaux martinez <lucia_chaux@hotmail.com>
 * @package FStudio
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
    $sql = 'SELECT usr_id AS id, usr_user AS user, usr_password AS password, usr_actived AS actived, usr_last_login_at AS last_login_at, usr_created_at AS created_at, usr_updated_at AS updated_at, usr_deleted_at AS deleted_at FROM bda_usuario WHERE usr_deleted_at IS NULL ORDER BY usr_created_at ASC';
    $answer = $conn->prepare($sql);
    $answer->execute();
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }

  /**
   * obtiene un solo dato de la tabla por medio del id
   * @param type $id
   * @return type
   */
  public function getById($id = null) {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT usr_id AS id, usr_user AS user, usr_password AS password, usr_actived AS actived, usr_last_login_at AS last_login_at, usr_created_at AS created_at, usr_updated_at AS updated_at, usr_deleted_at AS deleted_at FROM bda_usuario WHERE usr_deleted_at IS NULL AND id = :id';
    $params = array(
        ':id' => ($id !== null) ? $id : $this->getId()
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
    $sql = 'INSERT INTO bda_usuario (usr_user, usr_password, usr_actived, usr_last_login_at) VALUES (:user, :password, :actived, :last_login_at)';
    $params = array(
        ':user' => $this->getUser(),
        ':password' => $this->getPassword(),
        ':actived' => $this->getActived(),
        ':last_login_at' => $this->getLastLoginAt()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    $this->setId($conn->lastInsertId(self::_SEQUENCE));
    return true;
  }

  /**
   * Actualiza un registro de la tabla
   * @return boolean
   */
  public function update() {
    $conn = $this->getConnection($this->config);
    $sql = 'UPDATE bda_usuario SET usr_user = :user, usr_password = :password, usr_actived = :actived, usr_last_login_at = :last_login_at WHERE usr_id = :id';
    $params = array(
        ':user' => $this->getUser(),
        ':password' => $this->getPassword(),
        ':actived' => $this->getActived(),
        ':last_login_at' => $this->getLastLoginAt(),
        ':id' => $this->getId()
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
  public function delete($deleteLogical = true) {
    $conn = $this->getConnection($this->config);
    $params = array(
        ':id' => $this->getId()
    );
    switch ($deleteLogical) {
      case true:
        $sql = 'UPDATE bda_usuario SET usr_deleted_at = now() WHERE usr_id = :id';
        break;
      case false:
        $sql = 'DELETE FROM bda_usuario WHERE usr_id = :id';
        break;
      default:
        throw new PDOException('Por favor indique un dato coherente para el borrado lógico (true) o físico (false)');
    }
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return true;
  }

}
