<?php

use FStudio\model\base\servicioMaquinaBaseTable;

/**
 * Description of servicioMaquinaTable
 *
 * @author nombre completo <su@correo.com>
 * @package FStudio
 * @subpackage model
 * @subpackage table
 * @version 1.0.0
 */
class servicioMaquinaTable extends servicioMaquinaBaseTable {

  public function getAll() {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT ser_id AS id, ser_descripcion AS descripcion, ser_estado AS estado, ser_created_at AS created_at, ser_updated_at AS updated_at, ser_deleted_at AS deleted_at FROM bda_servicio_maquina WHERE ser_deleted_at IS NULL ORDER BY ser_created_at ASC';
    $answer = $conn->prepare($sql);
    $answer->execute();
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }

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
