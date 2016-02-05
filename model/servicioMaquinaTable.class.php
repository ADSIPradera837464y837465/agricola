<?php

use FStudio\model\base\servicioMaquinaBaseTable;

/**
 * Description of servicioMaquinaTable
 *
 * @author Yuri Adriana Hurtado Rojas <yurodri.1996@gmail.com>
 * @package FStudio
 * @subpackage model
 * @subpackage table
 * @version 1.0.0
 */
class servicioMaquinaTable extends servicioMaquinaBaseTable {

  /**
   * Obtiene todos los datos de la tabla
   * @version 1.0.0
   * @return [stdClass|boolean]
   */
  public function getAll() {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT ser_id AS id, ser_descripcion AS descripcion, ser_estado AS estado, ser_created_at AS created_at, ser_updated_at AS updated_at, ser_deleted_at AS deleted_at FROM bda_servicio_maquina WHERE ser_deleted_at IS NULL ORDER BY ser_created_at ASC';
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
    $sql = 'SELECT ser_id AS id, ser_descripcion AS descripcion, ser_estado AS estado, ser_created_at AS created_at, ser_updated_at AS updated_at, ser_deleted_at AS deleted_at FROM bda_servicio_maquina WHERE ser_deleted_at IS NULL AND id = :id';
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
    $sql = 'INSERT INTO bda_servicio_maquina (ser_descripcion, ser_estado) VALUES (:descripcion, :estado)';
    $params = array(
        ':descripcion' => $this->getDescripcion(),
        ':estado' => $this->getEstado()
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
    $sql = 'UPDATE bda_servicio_maquina SET ser_descripcion = :descripcion, ser_estado = :estado WHERE ser_id = :id';
    $params = array(
        ':descripcion' => $this->getDescripcion(),
        ':estado' => $this->getEstado(),
        ':id' => $this->getId()
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
  public function delete($deleteLogical = true) {
    $conn = $this->getConnection($this->config);
    $params = array(
        ':id' => $this->getId()
    );
    switch ($deleteLogical) {
      case true:
        $sql = 'UPDATE bda_servicio_maquina SET ser_deleted_at = now() WHERE ser_id = :id';
        break;
      case false:
        $sql = 'DELETE FROM bda_servicio_maquina WHERE ser_id = :id';
        break;
      default:
        throw new PDOException('Por favor indique un dato coherente para el borrado lógico (true) o físico (false)');
    }
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return true;
  }

}
