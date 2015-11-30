<?php

use FStudio\model\base\rolBaseTable;

/**
 * Description of bitacoraTable
 * @author wilmer andres martinez chamorro <wilmerelmejor94@hotmail.com>
 * @package
 * @subpackage model
 * @subpackage table
 * @version 1.0.0
 */
class rolTable extends rolBaseTable {

  /**
   * obtiene todos los datos demla tabla
   * @return [stdClass | boolean]
   */
  public function getAll() {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT id, nombre,created_at FROM bda_rol ORDER BY created_at ASC';
    $answer = $conn->prepare($sql);
    $answer->execute();
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }

  /**
   * retorna un elemento de la tabla buscando por un id especifico
   * @param integer $id
   * @return [stdClass | boolean]
   */
  public function getById($id = null) {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT id, nombre,created_at '
            . 'FROM bda_rol '
            . 'AND id = :id';
    $params = array(
        ':id' => ($id !== null) ? $id : $this->getByIdId()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }

  /**
   * registra los datos del objeto en la tabla
   * @return integer
   */
  public function save() {
    $conn = $this->getConnection($this->config);
    $sql = 'INSERT INTO bda_rol (nombre) VALUES (:nombre)';
    $params = array(
        ':nombre' => $this->getNombre()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
//    return $conn->lastInsertId(self::_SEQUENCE);
    $this->setId($conn->lastInsertId(self::_SEQUENCE));
    return true;
  }

  /**
   * Actualiza un registro de la tabla 
   * @return boolean
   */
  public function update() {
    $conn = $this->getConnection($this->config);
    $sql = 'UPDATE bda_rol SET nombre = :nombre, WHERE id = :id';
    $params = array(
        ':nombre' => $this->getNombre()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return true;
  }

  /**
   * borra en forma logica o fisica un registro de las tablas
   * @param boolean $delete
   * @return boolean
   * @throws PDOException
   */
  public function delete() {
    $conn = $this->getConnection($this->config);
    $sql = 'DELETE FROM bda_rol WHERE id = :id';
    $params = array(
        ':id' => $this->getId()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return true;
  }

}
