<?php

use FStudio\model\base\bitacoraBaseTable;

/**
 * Description of bitacoraTable
  * @author Diana Meneses <meneses_d@rocketmail.com>
 * @package FStudio
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
    $sql = 'SELECT bit_id AS id, usr_id AS usuario_id, bit_accion AS accion, bit_tabla AS tabla, bit_registro AS registro, bit_observacion AS observaciones, bit_fecha AS fecha FROM bda_bitacora ORDER BY  ASC';
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
  public function getById($id = null) {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT bit_id AS id, usr_id AS usuario_id, bit_accion AS accion, bit_tabla AS tabla, bit_registro AS registro, bit_observacion AS observaciones, bit_fecha AS fecha FROM bda_bitacora AND id = :id';
    $params = array(
        ':id' => ($id !== null) ? $id : $this->getId()
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
    $sql = 'INSERT INTO bda_bitacora (usr_id, bit_accion, bit_tabla, bit_registro, bit_observacion) VALUES (:usuario_id, :accion, :tabla, :registro, :observacion)';
    $params = array(
        ':usuario_id' => $this->getUsuarioId(),
        ':accion' => $this->getAccion(),
        ':tabla' => $this->getTabla(),
        ':registro' => $this->getRegistro(),
        ':observacion' => $this->getObservacion()
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
    $sql = 'UPDATE bda_bitacora SET usr_id = :usuario_id, bit_accion = :accion, bit_tabla = :tabla, bit_registro = :registro, bit_observacion = :observacion WHERE bit_id = :id';
    $params = array(
        ':usuario_id' => $this->getUsuarioId(),
        ':accion' => $this->getAccion(),
        ':tabla' => $this->getTabla(),
        ':registro' => $this->getRegistro(),
        ':observacion' => $this->getObservacion(),
        ':id' => $this->getId()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return true;
  }

  /**
   * Borra en forma logica o fisica un registro de la tabla
   * @version 1.0.0
   * @param boolean 
   * @return boolean
   * @throws PDOException
   */
  public function delete() {
    $conn = $this->getConnection($this->config);
    $sql = 'DELETE FROM bda_bitacora WHERE bit_id = :id';
    $params = array(
        ':id' => $this->getId()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return true;
  }

}
