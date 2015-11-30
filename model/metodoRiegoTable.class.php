<?php

/**
 * Description of metodoRiegoTable
 * @author mariam montaño <nichesitap@hotmail.com>
 * @package
 * @subpackage model
 * @subpackage table
 * @version 1.0.0
 */
class metodoRiegoTable extends metodoRiegoBaseTable {

  public function getAll() {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT met_rie_id, mat_rie_descripcion,created_at, updated_at, deleted_at FROM metodoRiego ORDER BY created_at ASC';
    $answer = $conn->prepare($sql);
    $answer->execute();
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }

  public function getById($id = null) {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT met_rie_id, met_rie_descripcion, met_Created_at, met_Updated_at, met_Deleted_at '
            . 'FROM metodoRiego '
            . 'AND met_rie_id = :met_rie_id';
    $params = array(
        ':met_rie_id' => ($id !==null)? $id:$this->getId()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }

  public function save() {
    $conn = $this->getConnection($this->config);
    $sql = 'INSERT INTO metodoRiego (descripcion) VALUES (:descripcion)';
    $params = array(
        ':descripcion' => $this->getdescripcion()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
   $this->setId($conn->lastinsertId (self::_SEQUENCE));
  }

  public function update() {
    $conn = $this->getConnection($this->config);
    $sql = 'UPDATE metodoRiego SET descripcion = :descripcion WHERE id = :id';
    $params = array(
        ':descripcion' => $this->getdescripcion()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return true;
  }

  public function delete() {
    $conn = $this->getConnection($this->config);
    $sql = 'DELETE FROM metodoRiego WHERE id = :id';
    $params = array(
        ':id' => $this->getId()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return true;
  }

}
