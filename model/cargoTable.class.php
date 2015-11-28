<?php

use FStudio\model\base\cargoTableBase;

/**
 * Description of cargoTable
 * @author Duvier Marin Escobar <duvierm24@gmail.com>
 * @package 
 * @subpackage model
 * @subpackage base
 * @version 1.0.0
 */
class cargoTable extends cargoTableBase {

  /**
   * Obtiene todos los datos de la tabla
   * @return [stdClass | boolean]
   */
  public function getAll() {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT car_id, car_descipcion, created_at, updated_at, deleted_at FROM dba_cargo WHERE deleted_at IS NULL ORDER BY created_at ASC';
    $answer = $conn->prepare($sql);
    $answer->execute();
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }

  /**
   * Retorna un elemento de la tabla buscado por un id especifico
   * @param integer $id
   * @version 1.0.0
   * @return [stdClass | boolean]
   */
  public function getById($id = null) {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT car_id, car_descipcion, created_at, updated_at, deleted_at FROM dba_cargo WHERE deleted_at IS NULL '
            . 'AND car_id = :id';
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
   * @version 1.0.0
   */
  public function save() {
    $conn = $this->getConnection($this->config);
    $sql = 'INSERT INTO dba_cargo (car_descripcion) VALUES (:descripcion)';
    $params = array(
        ':descripcion' => $this->getDescripcion()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    $this->setId($conn->lastInsertId(self::_SEQUENCE));
    return true;
  }

  /**
   * Actualiza un registro de la tabla
   * @return boolean
   * @version 1.0.0
   */
  public function update() {
    $conn = $this->getConnection($this->config);
    $sql = 'UPDATE dba_cargo SET car_descipcion = :descripcion WHERE id = :id';
    $params = array(
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
   * @version 1.0.0
   * @throws PDOException
   */
  public function delete($deleteLogical = true) {
    $conn = $this->getConnection($this->config);
    $params = array(
        ':id' => $this->getId()
    );
    switch ($deleteLogical) {
      case true:
        $sql = 'UPDATE dba_cargo SET deleted_at = now() WHERE id = :id';
        break;
      case false:
        $sql = 'DELETE FROM dba_cargo WHERE id = :id';
        break;
      default:
        throw new PDOException('Por favor indique un dato coherente para el borrado lógico o físico');
    }
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return true;
  }

}
