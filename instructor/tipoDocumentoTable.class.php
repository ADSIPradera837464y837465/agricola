<?php

use FStudio\model\base\tipoDocumentoBaseTable;

/**
 * Description of tipoDocumentoTable
 *
 * @author nombre completo <su@correo.com>
 * @package FStudio
 * @subpackage model
 * @subpackage table
 * @version 1.0.0
 */
class tipoDocumentoTable extends tipoDocumentoBaseTable {

  public function getAll() {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT tpd_id AS id, tpd_descripcion AS descripcion, tpd_tipo_movimiento AS tipo_movimiento, tpd_estado AS estado, tpd_created_at AS created_at, tpd_updated_at AS updated_at, tpd_deleted_at AS deleted_at FROM bda_tipo_documento WHERE tpd_deleted_at IS NULL ORDER BY tpd_created_at ASC';
    $answer = $conn->prepare($sql);
    $answer->execute();
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }

  public function getById($id = null) {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT tpd_id AS id, tpd_descripcion AS descripcion, tpd_tipo_movimiento AS tipo_movimiento, tpd_estado AS estado, tpd_created_at AS created_at, tpd_updated_at AS updated_at, tpd_deleted_at AS deleted_at FROM bda_tipo_documento WHERE tpd_deleted_at IS NULL AND id = :id';
    $params = array(
        ':id' => ($id !== null) ? $id : $this->getId()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }

  public function save() {
    $conn = $this->getConnection($this->config);
    $sql = 'INSERT INTO bda_tipo_documento (tpd_descripcion, tpd_tipo_movimiento, tpd_estado) VALUES (:descripcion, :tipo_movimiento, :estado)';
    $params = array(
        ':descripcion' => $this->getDescripcion(),
        ':tipo_movimiento' => $this->getTipoMovimiento(),
        ':estado' => $this->getEstado()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    $this->setId($conn->lastInsertId(self::_SEQUENCE));
    return true;
  }

  public function update() {
    $conn = $this->getConnection($this->config);
    $sql = 'UPDATE bda_tipo_documento SET tpd_descripcion = :descripcion, tpd_tipo_movimiento = :tipo_movimiento, tpd_estado = :estado WHERE tpd_id = :id';
    $params = array(
        ':descripcion' => $this->getDescripcion(),
        ':tipo_movimiento' => $this->getTipoMovimiento(),
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
        $sql = 'UPDATE bda_tipo_documento SET tpd_deleted_at = now() WHERE tpd_id = :id';
        break;
      case false:
        $sql = 'DELETE FROM bda_tipo_documento WHERE tpd_id = :id';
        break;
      default:
        throw new PDOException('Por favor indique un dato coherente para el borrado lógico (true) o físico (false)');
    }
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return true;
  }

}
