<?php

use FStudio\model\base\usuarioRolBaseTable;

/**
 * Description of usuarioRolTable
 * 
 * @author Wilmer Andres Martinez Chamorro <wilmerelmejor94@hotmail.com>
 * @package FStudio
 * @subpackage model
 * @subpackage table
 * @version 1.0.0
 */
class usuarioRolTable extends usuarioRolBaseTable {

  /**
   * obtiene todos los datos demla tabla
   * @return [stdClass | boolean]
   */
  public function getAll() {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT url_id AS id, usr_id AS usuario_id, rol_id, url_created_at AS created_at FROM bda_usuario_rol ORDER BY url_created_at ASC';
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
    $sql = 'SELECT url_id AS id, usr_id AS usuario_id, rol_id, url_created_at AS created_at FROM bda_usuario_rol AND id = :id';
    $params = array(
        ':id' => ($id !== null) ? $id : $this->getId()
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
    $sql = 'INSERT INTO bda_usuario_rol (usr_id, rol_id) VALUES (:usuario_id, :rol_id)';
    $params = array(
        ':usuario_id' => $this->getUsuarioId(),
        ':rol_id' => $this->getRolId()
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
    $sql = 'UPDATE bda_usuario_rol SET usr_id = :usuario_id, rol_id = :rol_id WHERE url_id = :id';
    $params = array(
        ':usuario_id' => $this->getUsuarioId(),
        ':rol_id' => $this->getRolId(),
        ':id' => $this->getId()
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
    $sql = 'DELETE FROM bda_usuario_rol WHERE url_id = :id';
    $params = array(
        ':id' => $this->getId()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return true;
  }

}
