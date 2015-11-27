<?php

use FStudio\model\base\recordarMeBaseTable;

/**
 * clase para manejar la tabla recordarMe
 * @author maribel zamora <mazagi86@hotmail.com>
 * @package fStudio
 * @subpackage model
 * @subpackage table
 * @version 1.0.0
 */
class recordarMeTableClass extends recordarMeBaseTable {

  /**
   * obtiene todos los datos de la tabla
   * @version 1.0.0
   * @return [stdClass | boolean]
   */
  public function getAll() {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT rcm_id, usuario_id, rcm_ip_address, rcm_hash_cookie, 
rcm_created_at FROM recordar_me ORDER BY created_at ASC';
    $answer = $conn->prepare($sql);
    $answer->execute();
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : 
false;
  }

  /**
   * retorna un elemento de la tabla buscado por un id especifico
   * @version 1.0.0
   * @param integer $id
   *  @return [stdClass | boolean]
   */
  public function getById($id) {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT rcm_id, usuario_id, rcm_ip_address, rcm_hash_cookie, 
rcm_created_at '
            . 'FROM recordar_me '
            . 'AND id = :id';
    $params = array(
        ':id' => $id,
        ':id' => ($id !== null) ? $id : $this->getId()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : 
false;
  }

  /**
   * registra los datos en la tabla
   * @version 1.0.0
   * @return integer
   */
  public function save() {
    $conn = $this->getConnection($this->config);
    $sql = 'INSERT INTO recordar_me (usuario_id, rcm_ip_address, 
rcm_hash_cookie) VALUES (:usuario_id, :ip_address, :hash_cookie)';
    $params = array(
        ':usuario_id' => $this->getUsuarioId(),
        ':ip_address' => $this->getIpAddress(),
        ':hash_cookie' => $this->getHashCookie()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    $this->setId($conn->lastInsertId(self::SEQUENCE));
    return true;
  }

  /**
   * actualiza un registro en la tabla
   * @version 1.0.0
   * @return [stdClass | boolean]
   */
  public function update() {
    $conn = $this->getConnection($this->config);
    $sql = 'UPDATE recordar_me SET usuario_id = :usuario_id, rcm_ip_address = 
:ip_address, rcm_hash_cookie = :hash_cookie WHERE rcm_id = :id';
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

  /**
   * borrar en forma logica o fisica un registro de la tabla
   * @version 1.0.0
   * @param boolean $deleteLogical Especifica el borrado logico (true o false)
   * @return boolean
   * @throws PDOException
   */
  public function delete() {
    $conn = $this->getConnection($this->config);
    $sql = 'DELETE FROM recordarMe WHERE id = :id';
    $params = array(
        ':id' => $this->getId()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return true;
  }

}
