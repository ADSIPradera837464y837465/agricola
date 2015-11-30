<?php

/**
 * Description of tipoMantenimientoTable
 * @author mariam montaño <nichesitap@hotmail.com>
 * @package
 * @subpackage model
 * @subpackage table
 * @version 1.0.0
 */
class tipoMantenimientoTable extends tipoMantenimientoBaseTable {

  public function getAll() {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT tma_id, tma_descripcion,tma_created_at, tma_updated_at, tma_deleted_at FROM tipoMantenimiento ORDER BY tma_created_at ASC';
    $answer = $conn->prepare($sql);
    $answer->execute();
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }

  public function getById($id = null) {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT tma_id, tma_descripcion, tma_created_at, tma_updated_at, tma_deleted_at '
            . 'FROM tipoMantenimiento '
            . 'AND tma_id = :tma_id';
    $params = array(
        ':tma_id' => ($id = null) ? $id : $this->getId()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }

  public function save() {
    $conn = $this->getConnection($this->config);
    $sql = 'INSERT INTO tipoMantenimiento (descripcion) VALUES (:descripcion)';
    $params = array(
        ':descripcion' => $this->getdescripcion()
    );


    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return $conn->lastInsertId(self::_SEQUENCE);
  }

  public function update() {
    $conn = $this->getConnection($this->config);
    $sql = 'UPDATE tipoMantenimiento SET descripcion = :descripcion WHERE id = :id';
    $params = array(
        ':descripcion' => $this->getdescripcion()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return true;
  }

  public function delete() {
    $conn = $this->getConnection($this->config);
    $sql = 'DELETE FROM tipoMantenimiento WHERE id = :id';
    $params = array(
        ':id' => $this->getId()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return true;
  }

}
