<?php

use FStudio\model\base\tipoIdBaseTable;

/**
 * Description of tipoIdTable
 *
 * @author nombre completo <su@correo.com>
 * @package FStudio
 * @subpackage model
 * @subpackage table
 * @version 1.0.0
 */
class tipoIdTable extends tipoIdBaseTable {

  public function getAll() {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT tpi_id AS id, tpi_descripcion AS descripcion, tpi_created_at AS created_at, tpi_updated_at AS updated_at, tpi_deleted_at AS deleted_at FROM bda_tipo_id WHERE tpi_deleted_at IS NULL ORDER BY tpi_created_at ASC';
    $answer = $conn->prepare($sql);
    $answer->execute();
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }

  public function getById($id = null) {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT tpi_id AS id, tpi_descripcion AS descripcion, tpi_created_at AS created_at, tpi_updated_at AS updated_at, tpi_deleted_at AS deleted_at FROM bda_tipo_id WHERE tpi_deleted_at IS NULL AND id = :id';
    $params = array(
        ':id' => ($id !== null) ? $id : $this->getId()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }

  public function save() {
    $conn = $this->getConnection($this->config);
    $sql = 'INSERT INTO bda_tipo_id (tpi_descripcion) VALUES (:descripcion)';
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
    $sql = 'UPDATE bda_tipo_id SET tpi_descripcion = :descripcion WHERE tpi_id = :id';
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
        $sql = 'UPDATE bda_tipo_id SET tpi_deleted_at = now() WHERE tpi_id = :id';
        break;
      case false:
        $sql = 'DELETE FROM bda_tipo_id WHERE tpi_id = :id';
        break;
      default:
        throw new PDOException('Por favor indique un dato coherente para el borrado lógico (true) o físico (false)');
    }
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return true;
  }

}
