<?php

use FStudio\model\base\suerteBaseTable;

/**
 * Description of suerteTable
 *
 * @author nombre completo <su@correo.com>
 * @package FStudio
 * @subpackage model
 * @subpackage table
 * @version 1.0.0
 */
class suerteTable extends suerteBaseTable {

  public function getAll() {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT sue_id AS id, sue_descripcion AS descripcion, sue_area AS area, tis_id AS tipo_suelo_id, sue_created_at AS created_at, sue_updated_at AS updated_at, sue_deleted_at AS deleted_at FROM bda_suerte WHERE sue_deleted_at IS NULL ORDER BY sue_created_at ASC';
    $answer = $conn->prepare($sql);
    $answer->execute();
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }

  public function getById($id = null) {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT sue_id AS id, sue_descripcion AS descripcion, sue_area AS area, tis_id AS tipo_suelo_id, sue_created_at AS created_at, sue_updated_at AS updated_at, sue_deleted_at AS deleted_at FROM bda_suerte WHERE sue_deleted_at IS NULL AND id = :id';
    $params = array(
        ':id' => ($id !== null) ? $id : $this->getId()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }

  public function save() {
    $conn = $this->getConnection($this->config);
    $sql = 'INSERT INTO bda_suerte (sue_descripcion, sue_area, tis_id) VALUES (:descripcion, :area, :tipo_suelo_id)';
    $params = array(
        ':descripcion' => $this->getDescripcion(),
        ':area' => $this->getArea(),
        ':tipo_suelo_id' => $this->getTipoSueloId()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    $this->setId($conn->lastInsertId(self::_SEQUENCE));
    return true;
  }

  public function update() {
    $conn = $this->getConnection($this->config);
    $sql = 'UPDATE bda_suerte SET sue_descripcion = :descripcion, sue_area = :area, tis_id = :tipo_suelo_id WHERE sue_id = :id';
    $params = array(
        ':descripcion' => $this->getDescripcion(),
        ':area' => $this->getArea(),
        ':tipo_suelo_id' => $this->getTipoSueloId(),
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
        $sql = 'UPDATE bda_suerte SET sue_deleted_at = now() WHERE sue_id = :id';
        break;
      case false:
        $sql = 'DELETE FROM bda_suerte WHERE sue_id = :id';
        break;
      default:
        throw new PDOException('Por favor indique un dato coherente para el borrado lógico (true) o físico (false)');
    }
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return true;
  }

}
