<?php

/**
 * Description of bitacoraTable
 * @author linaVanessaMontaño <linamontano-1995@hotmail.es>
 * @package
 * @subpackage model
 * @subpackage table
 * @version 1.0.0
 */
class detalleEjecucionTable extends detalleEjecucionTableBase {

  /**
   * Obtiene todos los datos de la tabla
   * @return [stdClass | boolean]
   */
  public function getAll() {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT dee_id, ore_id, ter_id, ser_id, pro_id, dee_cantidad, dee_precio, dee_created_at, dee_updated_at, dee_deleted_at FROM detalleEjecucion WHERE deleted_at IS NULL ORDER BY created_at ASC';
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
    $sql = 'SELECT dee_id, ore_id, ter_id, ser_id, pro_id, dee_cantidad, dee_precio FROM bitacora AND id = :id';
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
    $sql = 'INSERT INTO detalleEjecucion (id, ore_id, ter_id, ser_id, pro_id, cantidad, precio) VALUES (:id, :ore_id, :ter_id, :ser_id, :pro_id, :cantidad, :precio)';
    $params = array(
        ':id' => $this->get(),
        ':ore_id' => $this->getoreId(),
        ':ter_id' => $this->getterId(),
        ':ser_id' => $this->getserId(),
        ':pro_id' => $this->getproId(),
        ':cantidad' => $this->getcantidad(),
        ':precio' => $this->getprecio(),
       
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
    $sql = 'UPDATE detalleEjecucion SET id = :id, ore_id = :ore_id, ter_id = :ter_id, ser_id = :ser_id, pro_id = :pro_id, cantidad :cantidad, precio :precio WHERE id = :id';
    $params = array(
        ':id' => $this->getid(),
        ':ore_id' => $this->getoreid(),
        ':ter_id' => $this->getterId(),
        ':ser_id' => $this->getserId(),
        ':pro_id' => $this->getproId(),
        ':cantidad' => $this->getcantidad(),
        ':precio' => $this->getprecio()
       
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
    $sql = 'DELETE FROM detalleEjecucion WHERE id = :id';
    $params = array(
        ':id' => $this->getId()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return true;
  }

}
