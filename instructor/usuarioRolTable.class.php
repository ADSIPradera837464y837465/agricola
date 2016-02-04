<?php

use FStudio\model\base\usuarioRolBaseTable;

/**
 * Description of usuarioRolTable
 *
 * @author nombre completo <su@correo.com>
 * @package FStudio
 * @subpackage model
 * @subpackage table
 * @version 1.0.0
 */
class usuarioRolTable extends usuarioRolBaseTable {

  public function getAll() {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT url_id AS id, usr_id AS usuario_id, rol_id, url_created_at AS created_at FROM bda_usuario_rol ORDER BY url_created_at ASC';
    $answer = $conn->prepare($sql);
    $answer->execute();
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }

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
