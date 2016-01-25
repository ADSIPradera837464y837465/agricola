<?php

use FStudio\model\base\tipoMantenimientoBaseTable;

/**
 * Description of tipoMantenimientoTable
 * @author mariam montaño <nichesitap@hotmail.com>
 * @package
 * @subpackage model
 * @subpackage table
 * @version 1.0.0
 */
class tipoMantenimientoTable extends tipoMantenimientoBaseTable {

  public function getAll() {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT tma_id AS id, tma_descripcion AS descripcion, tma_created_at AS created_at, tma_updated_at AS updated_at, tma_deleted_at AS deleted_at FROM bda_tipo_mantenimiento WHERE tma_deleted_at IS NULL ORDER BY tma_created_at ASC';
    $answer = $conn->prepare($sql);
    $answer->execute();
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }

  public function getById($id = null) {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT tma_id AS id, tma_descripcion AS descripcion, tma_created_at AS created_at, tma_updated_at AS updated_at, tma_deleted_at AS deleted_at FROM bda_tipo_mantenimiento WHERE tma_deleted_at IS NULL AND id = :id';
    $params = array(
        ':id' => ($id !== null) ? $id : $this->getId()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }

  public function save() {
    $conn = $this->getConnection($this->config);
    $sql = 'INSERT INTO bda_tipo_mantenimiento (tma_descripcion) VALUES (:descripcion)';
    $params = array(
        ':descripcion' => $this->getDescripcion()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    $this->setId($conn->lastInsertId(self::_SEQUENCE));
    return true;
  }

  public function update() {
    $conn = $this->getConnection($this->config);
    $sql = 'UPDATE bda_tipo_mantenimiento SET tma_descripcion = :descripcion WHERE tma_id = :id';
    $params = array(
        ':descripcion' => $this->getDescripcion(),
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
        $sql = 'UPDATE bda_tipo_mantenimiento SET tma_deleted_at = now() WHERE tma_id = :id';
        break;
      case false:
        $sql = 'DELETE FROM bda_tipo_mantenimiento WHERE tma_id = :id';
        break;
      default:
        throw new PDOException('Por favor indique un dato coherente para el borrado lógico (true) o físico (false)');
    }
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return true;
  }

}
