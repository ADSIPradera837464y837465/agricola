<?php

use FStudio\model\base\rolUsuarioBaseTable;

/**
 * Description of bitacoraTable
 * @author wilmer andres martinez chamorro <wilmerelmejor94@hotmail.com>
 * @package
 * @subpackage model
 * @subpackage table
 * @version 1.0.0
 */
class rolUsuarioTable extends rolUsuarioBaseTable {

  /**
   * obtiene todos los datos demla tabla
   * @return [stdClass | boolean]
   */
  public function getAll() {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT url_id, usr_usuario_id, rol_id, url_created_at FROM rolUsuario WHERE deleted_at IS NULL ORDER BY created_at ASC';
    $answer = $conn->prepare($sql);
    $answer->execute();
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }

  /**
   * Retorna un elemento de la tabla buscado por un id especifico
   * @param integer $id
   * @return [stdClass | boolean]
   */
  public function getById($id = null) {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT url_id, usr_usuario_id, rol_id, url_created_at'
            . 'FROM rolUsuario WHERE deleted_at IS NULL '
            . 'AND url_id = :url_id';
    $params = array(
        ':id' => ($id !== null) ? $id : $this->getById()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }

  /**
   * Registra los datos del objeto en la tabla
   * @return integer
   */
  public function save() {
    $conn = $this->getConnection($this->config);
    $sql = 'INSERT INTO usuario (url_id, usr_usuario_id, rol_id, url_created_at) VALUES (:url_id, :usr_usuario_id, :rol_id, :url_created_at)';
    $params = array(
        ':url_id' => $this->getUrlId(),
        ':usr_usuario_id' => $this->getUsrUsuarioId(),
        ':rol_id' => $this->getRolId(),
        ':url_created_at' => $this->getUrlCreateAt()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
//    return $conn->lastInsertId(self::_SEQUENCE);
    $this->setId($conn->lastInsertId(self::_SEQUENCE));
    return true;
  }

  /**
   * Actualiza un registro de la tabla
   * @return boolean
   */
  public function update() {
    $conn = $this->getConnection($this->config);
    $sql = 'UPDATE usuario SET url_id = :url_id, usr_usuario_id = :usr_usuario_id, rol_id = :rol_id, url_created_at = :url_created_at WHERE id = :url_id';
    $params = array(
        ':url_id' => $this->getUrlId(),
        ':usr_usuario_id' => $this->getUsrUsuarioId(),
        ':rol_id' => $this->getRolId(),
        ':url_created_at' => $this->getUrlCreateAt()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return true;
  }

  /**
   * Borra en forma logica o fisica un registro de la tabla
   * @param boolean $deleteLogical
   * @return boolean
   * @throws PDOException
   */
  public function delete() {
    $conn = $this->getConnection($this->config);
    $sql ='DELETE FROM rol WHERE id = :id';
    $params = array(
        ':id' => $this->getId()
    );
    
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return true;
  }

}
