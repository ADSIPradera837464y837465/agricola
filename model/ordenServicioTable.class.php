<?php

/**
 * Description of ordenServicioTable
 * @author merian montaño<nichesitap@hotmail.com>
 * @package 
 * @subpackage model
 * @subpackage base
 * @version 1.0.0
 */
class ordenServicioTable extends ordenServicioBaseTable {

  public function getAll() {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT ors_id, maq_id,tma_id,ter_id_elabora,ter_id_realiza,ors_fecha,ors_observacion, ors_created_at,'
            . ' ors_updated_at, ors_deleted_at FROM ordenServicio ORDER BY ors_created_at ASC';
    $answer = $conn->prepare($sql);
    $answer->execute();
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }

  public function getByorsid($orsId = null) {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT ors_id,maq_id, tma_id, ter_id_elabora,ter_id_realiza,ors_fecha,ors_observacion, ors_created_at, ors_updated_at, ors_deleted_at '
            . 'FROM ordenServicio '
            . 'AND ors_id = :ors_id';
    $params = array(
        ':ors_id' => ($orsId = null) ? $orsid : $this->getorsid()
    );
  }

  public function getByorsId($orsid = null) {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT ors_id,maq_id, tma_id, ter_id_elabora,ter_id_realiza,ors_fecha,ors_observacion, ors_created_at, ors_updated_at, ors_deleted_at '
            . 'FROM ordenServicio '
            . 'AND ors_id = :ors_id';
    $params = array(
        ':ors_id' => ($orsId = null) ? $orsid : $this->getorsid()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }

  public function save() {
    $conn = $this->getConnection($this->config);
    $sql = 'INSERT INTO ordenServicio (observacion) VALUES (:observacion)';
    $params = array(
        ':observacion' => $this->getobservacion()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return $conn->lastInsertId(self::_SEQUENCE);
  }

  public function orsUpdate() {
    $conn = $this->getConnection($this->config);
    $sql = 'UPDATE ordenServicio SET observacion = :observacion WHERE orsId = :orsId';
    $params = array(
        ':observacion' => $this->getobservacion()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return true;
  }

  public function delete() {
    $conn = $this->getConnection($this->config);
    $sql = 'DELETE FROM ordenServicio  WHERE orsId = :orsId';
    $params = array(
        ':orsId' => $this->getorsId()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return true;
  }

}
