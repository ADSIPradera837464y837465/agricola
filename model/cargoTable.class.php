<?php

use FStudio\model\base\cargoBaseTable;

/**
 * Description of cargoTable
 * @author Duvier Marin Escobar <duvierm24@gmail.com>
 * @package FStudio
 * @subpackage model
 * @subpackage base
 * @version 1.0.0
 */
class cargoTable extends cargoBaseTable {

  /**
   * Obtiene todos los datos de la tabla
   * @return mixed [stdClass | boolean]
   */
  public function getAll() {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT car_id AS id, car_descripcion AS descripcion, car_created_at AS created_at, car_updated_at AS updated_at, car_deleted_at AS deleted_at FROM bda_cargo WHERE car_deleted_at IS NULL ORDER BY car_created_at ASC';
    $answer = $conn->prepare($sql);
    $answer->execute();
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }

  /**
   * Retorna un elemento de la tabla buscado por un id especifico
   * @param integer $id
   * @version 1.0.0
   * @return mixed [stdClass | boolean]
   */
  public function getById($id = null) {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT car_id AS id, car_descripcion AS descripcion, car_created_at AS created_at, car_updated_at AS updated_at, car_deleted_at AS deleted_at FROM bda_cargo WHERE car_deleted_at IS NULL AND id = :id';
    $params = array(
        ':id' => ($id !== null) ? $id : $this->getId()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }

  /**
   * Registra los datos del objeto en la tabla
   * @return boolean
   * @version 1.0.0
   */
  public function save() {
    $conn = $this->getConnection($this->config);
    $sql = 'INSERT INTO bda_cargo (car_descripcion) VALUES (:descripcion)';
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
    $sql = 'UPDATE bda_cargo SET car_descripcion = :descripcion WHERE car_id = :id';
    $params = array(
        ':descripcion' => $this->getDescripcion(),
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
        $sql = 'UPDATE bda_cargo SET car_deleted_at = now() WHERE car_id = :id';
        break;
      case false:
        $sql = 'DELETE FROM bda_cargo WHERE car_id = :id';
        break;
      default:
        throw new PDOException('Por favor indique un dato coherente para el borrado lógico (true) o físico (false)');
    }
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return true;
  }

}
