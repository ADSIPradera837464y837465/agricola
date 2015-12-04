<?php

use FStudio\model\base\recordarMeBaseTable;

/**
 * Description of recordarMeTable
 *
 * @author nombre completo <su@correo.com>
 * @package FStudio
 * @subpackage model
 * @subpackage table
 * @version 1.0.0
 */
class recordarMeTable extends recordarMeBaseTable {

  public function getAll() {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT rcm_id AS id, usuario_id, rcm_ip_address AS ip_address, rcm_hash_cookie AS hash_cookie, rcm_created_at AS created_at FROM bda_recordar_me ORDER BY rcm_created_at ASC';
    $answer = $conn->prepare($sql);
    $answer->execute();
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }

  public function getById($id = null) {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT rcm_id AS id, usuario_id, rcm_ip_address AS ip_address, rcm_hash_cookie AS hash_cookie, rcm_created_at AS created_at FROM bda_recordar_me AND id = :id';
    $params = array(
        ':id' => ($id !== null) ? $id : $this->getId()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }

  public function save() {
    $conn = $this->getConnection($this->config);
    $sql = 'INSERT INTO bda_recordar_me (usuario_id, rcm_ip_address, rcm_hash_cookie) VALUES (:usuario_id, :ip_address, :hash_cookie)';
    $params = array(
        ':usuario_id' => $this->getUsuarioId(),
        ':ip_address' => $this->getIpAddress(),
        ':hash_cookie' => $this->getHashCookie()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    $this->setId($conn->lastInsertId(self::_SEQUENCE));
    return true;
  }

  public function update() {
    $conn = $this->getConnection($this->config);
    $sql = 'UPDATE bda_recordar_me SET usuario_id = :usuario_id, rcm_ip_address = :ip_address, rcm_hash_cookie = :hash_cookie WHERE rcm_id = :id';
    $params = array(
        ':usuario_id' => $this->getUsuarioId(),
        ':ip_address' => $this->getIpAddress(),
        ':hash_cookie' => $this->getHashCookie(),
        ':id' => $this->getId()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return true;
  }

  public function delete() {
    $conn = $this->getConnection($this->config);
    $sql = 'DELETE FROM bda_recordar_me WHERE rcm_id = :id';
    $params = array(
        ':id' => $this->getId()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return true;
  }

}
