<?php

use FStudio\model\base\detalleOrdenBaseTable;

/**
 * Description of detalleOrdenTable
 *
 * @author nombre completo <su@correo.com>
 * @package FStudio
 * @subpackage model
 * @subpackage table
 * @version 1.0.0
 */
class detalleOrdenTable extends detalleOrdenBaseTable {

  public function getAll() {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT deo_id AS id, ors_id AS orden_servicio_id, ser_id AS servicio_id, deo_estado AS estado, deo_created_at AS created_at, deo_updated_at AS updated_at, deo_deleted_at AS deleted_at FROM bda_detalle_orden WHERE deo_deleted_at IS NULL ORDER BY deo_created_at ASC';
    $answer = $conn->prepare($sql);
    $answer->execute();
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }

  public function getById($id = null) {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT deo_id AS id, ors_id AS orden_servicio_id, ser_id AS servicio_id, deo_estado AS estado, deo_created_at AS created_at, deo_updated_at AS updated_at, deo_deleted_at AS deleted_at FROM bda_detalle_orden WHERE deo_deleted_at IS NULL AND id = :id';
    $params = array(
        ':id' => ($id !== null) ? $id : $this->getId()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }

  public function save() {
    $conn = $this->getConnection($this->config);
    $sql = 'INSERT INTO bda_detalle_orden (ors_id, ser_id, deo_estado) VALUES (:orden_servicio_id, :servicio_id, :estado)';
    $params = array(
        ':orden_servicio_id' => $this->getOrdenServicioId(),
        ':servicio_id' => $this->getServicioId(),
        ':estado' => $this->getEstado()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    $this->setId($conn->lastInsertId(self::_SEQUENCE));
    return true;
  }

  public function update() {
    $conn = $this->getConnection($this->config);
    $sql = 'UPDATE bda_detalle_orden SET ors_id = :orden_servicio_id, ser_id = :servicio_id, deo_estado = :estado WHERE deo_id = :id';
    $params = array(
        ':orden_servicio_id' => $this->getOrdenServicioId(),
        ':servicio_id' => $this->getServicioId(),
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
        $sql = 'UPDATE bda_detalle_orden SET deo_deleted_at = now() WHERE deo_id = :id';
        break;
      case false:
        $sql = 'DELETE FROM bda_detalle_orden WHERE deo_id = :id';
        break;
      default:
        throw new PDOException('Por favor indique un dato coherente para el borrado lógico (true) o físico (false)');
    }
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return true;
  }

}
