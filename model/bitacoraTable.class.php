<?php

use FStudio\model\base\bitacoraBaseTable;
/**
 * Description of bitacoraTable
 * @author Diana Meneses <meneses_d@rocketmail.com>
 * @package
 * @subpackage model
 * @subpackage table
 * @version 1.0.0
 */
class bitacoraTable extends bitacoraBaseTable {

  /**
   * Obtiene todos los datos de la tabla
   * @version 1.0.0
   * @return [stdClass|boolean]
   */
  public function getAll() {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT bit_id, usr_id, bit_accion, bit_tabla, bit_registro, bit_observacion, bit_fecha FROM bitacora ORDER BY bit_fecha ASC';
    $answer = $conn->prepare($sql);
    $answer->execute();
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }
  /**
   * Retorna un elemento de la tabla buscado por un ID especifico
   * @version 1.0.0
   * @param integer $id ID a buscar
   * @return mixed [stdClass | boolean]
   */
  public function getById($id  = null) {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT bit_id, usr_id, bit_accion, bit_tabla, bit_registro, bit_observacion, bit_fecha '
            . 'FROM bda_bitacora '
            . 'AND bit_id = :bit_id';
    $params = array(
        ':bit_id' => ($id !=null) ? $id : $this->getId()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }

  /**
   * Registra los datos del objeto en la tabla
   * @version 1.0.0
   * @return integer
   */
  public function save() {
    $conn = $this->getConnection($this->config);
    $sql = 'INSERT INTO bda_bitacora (bit_accion, usr_id, bit_observacion, bit_tabla, bit_registro,bit_fecha) VALUES (:bit_accion, :usr_id, :bit_observacion, :bit_tabla, :bit_registro, :bit_fecha)';
    $params = array(
        ':bit_accion' => $this->getAccion(),
        ':usr_id' => $this->getUsuarioId(),
        ':bit_observacion' => $this->getObservacion(),
        ':bit_tabla' => $this->getTabla(),
        ':bit_registro' => $this->getRegistro(),
        ':bit_fecha' => $this->getFecha()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    $this->setId($conn->lastInsertId(self::_SEQUENCE));
    return true;
  }

  /**
   * Actualiza o modifica un registro de la tabla
   * @version 1.0.0
   * @return boolean
   */
  public function update() {
    $conn = $this->getConnection($this->config);
    $sql = 'UPDATE bda_bitacora SET bit_accion = :bit_accion, usr_id = :usr_id, bit_observacion = :bit_observacion, bit_tabla = :bit_tabla, bit_registro = :bit_registro, bit_fecha = :bit_fecha WHERE bit_id = :bit_id';
    $params = array(
        ':bit_accion' => $this->getAccion(),
        ':usr_id' => $this->getUsuarioId(),
        ':bit_observacion' => $this->getObservacion(),
        ':bit_tabla' => $this->getTabla(),
        ':bit_registro' => $this->getRegistro(),
        ':bit_id' => $this->getId(),
        ':bit_fecha' => $this->getFecha()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return true;
  }

  /**
   * Borra en forma logica o fisica un registro de la tabla
   * @version 1.0.0
   * @param boolean $deleteLogical
   * @return boolean
   * @throws PDOException
   */
  public function delete() {
    $conn = $this->getConnection($this->config);
    $sql = 'DELETE FROM bda_bitacora WHERE bit_id = :bit_id';
    $params = array(
        ':bit_id'=> $this->getId()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return true;
  }

}
