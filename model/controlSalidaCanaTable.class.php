<?php

use FStudio\model\base\controlSalidaCanaBaseTable;

/**
 * Description of controlSalidaCanaTable
 * @author Daniela Barona Mosquera <mo_naok@hotmail.com>
 * @package 
 * @subpackage model
 * @subpackage base
 * @version 1.0.0
 */
class controlSalidaCanaTable extends controlSalidaCanaBaseTable {

  /**
   * Obtiene todos los datos de la tabla
   * @return [stdClass | boolean]
   */
  public function getAll() {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT csc_id, csc_fecha, csc_total_vagones, csc_notas, csc_total_trenes, tur_id, sue_id, ter_id, created_at, updated_at, deleted_at FROM controlSalidaCana WHERE deleted_at IS NULL ORDER BY created_at ASC';
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
    $sql = 'SELECT csc_id, csc_fecha, csc_total_vagones, csc_notas, csc_total_trenes, tur_id, sue_id, ter_id, created_at, updated_at, deleted_at FROM controlSalidaCana AND id = :id';
    $params = array(
        ':id' => ($id !== null) ? $id : $this -> getId()
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
    $sql = 'INSERT INTO controlSalidaCana (fecha, total_vagones, notas, total_trenes, tur_id, sue_id, ter_id) VALUES (:fecha, :total_vagones, :notas, :total_trenes, :tur_id, :sue_id, :ter_id)';
    $params = array(
        ':fecha' => $this->getFecha(),
        ':total_vagones' => $this->getTotalVagones(),
        ':notas' => $this->getNotas(),
        ':total_trenes' => $this->getTotalTrenes(),
        ':tur_id' => $this->getTurnoId(),
        ':sue_id' => $this->getSuerteId(),
        ':ter_id' => $this->getTerceroId()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    $this -> setId($conn->lastInsertId(self::_SEQUENCE));
    return true;
  }

  /**
   * Actualiza un registro de la tabla
   * @return boolean
   */
  public function update() {
    $conn = $this->getConnection($this->config);
    $sql = 'UPDATE controlSalidaCana SET fecha = :fecha, total_vagones = :total_vagones, notas = :notas, total_trenes = :total_trenes, tur_id = :tur_id, sue_id = :sue_id, ter_id = :ter_id WHERE id = :id';
    $params = array(
        ':fecha' => $this->getFecha(),
        ':total_vagones' => $this->getTotalVagones(),
        ':notas' => $this->getNotas(),
        ':total_trenes' => $this->getTotalTrenes(),
        ':tur_id' => $this->getTurnoId(),
        ':sue_id' => $this->getSuerteId(),
        ':ter_id' => $this->getTerceroId(),
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
    $sql = 'DELETE FROM controlSalidaCana WHERE id = :id';
    $params = array(
        ':id' => $this->getId()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return true;
  }

}