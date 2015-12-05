<?php

use FStudio\model\base\rolBaseTable;

/**
 * Description of rolTable
 *
 * @author Wilmer Andres Martinez Chamorro <wilmerelmejor94@hotmail.com>
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
    $sql = 'SELECT rol_id AS id, rol_nombre AS nombre, rol_created_at AS created_at, rol_updated_at AS updated_at, rol_deleted_at AS deleted_at FROM bda_rol WHERE rol_deleted_at IS NULL ORDER BY rol_created_at ASC';
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
    $sql = 'SELECT rol_id AS id, rol_nombre AS nombre, rol_created_at AS created_at, rol_updated_at AS updated_at, rol_deleted_at AS deleted_at FROM bda_rol WHERE rol_deleted_at IS NULL AND id = :id';
    $params = array(
        ':id' => ($id !== null) ? $id : $this->getId()
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
    $sql = 'INSERT INTO bda_rol (rol_nombre) VALUES (:nombre)';
    $params = array(
        ':nombre' => $this->getNombre()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    $this->setId($conn->lastInsertId(self::_SEQUENCE));
    return true;
  }

  /**
   * Actualiza un registro de la tabla
   * @return boolean
   */
  public function update() {
    $conn = $this->getConnection($this->config);
    $sql = 'UPDATE bda_rol SET rol_nombre = :nombre WHERE rol_id = :id';
    $params = array(
        ':nombre' => $this->getNombre(),
        ':id' => $this->getId()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return true;
  }

  /**
   * borra en forma logica o fisica un registro de las tablas
   * @param boolean $deleteLogical
   * @return boolean
   * @throws PDOException
   */
  public function delete($deleteLogical = true) {
    $conn = $this->getConnection($this->config);
    $params = array(
        ':id' => $this->getId()
    );
    switch ($deleteLogical) {
      case true:
        $sql = 'UPDATE bda_rol SET rol_deleted_at = now() WHERE rol_id = :id';
        break;
      case false:
        $sql = 'DELETE FROM bda_rol WHERE rol_id = :id';
        break;
      default:
        throw new PDOException('Por favor indique un dato coherente para el borrado lógico (true) o físico (false)');
    }
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return true;
  }

}
