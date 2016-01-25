<?php

use FStudio\model\base\suerteBaseTable;

/**
 * Description of suerteTable
 * @author Jordan Marles <jordanmarles@hotmail.es>
 * @package FStudio
 * @subpackage model
 * @subpackage table
 * @version 1.0.0
 */
class suerteTable extends suerteBaseTable {

  /**
   * Obtiene todos los datos de la tabla
   * @version 1.0.0
   * @return [stdClass | boolean]
   */
  public function getAll() {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT sue_id AS id, sue_descripcion AS descripcion, sue_area AS area, tis_id AS tipo_suelo_id, sue_created_at AS created_at, sue_updated_at AS updated_at, sue_deleted_at AS deleted_at FROM bda_suerte WHERE sue_deleted_at IS NULL ORDER BY sue_created_at ASC';
    $answer = $conn->prepare($sql);
    $answer->execute();
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }

  /**
   * Retorna un elemento de la tabla buscado por un id especifico
   * @version 1.0.0
   * @param integer $id
   * @return [stdClass | boolean]
   */
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

  /**
   * Registra los datos del objeto en la tabla
   * @version 1.0.0
   * @return integer
   */
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

  /**
   * Actualiza un registro de la tabla
   * @version 1.0.0
   * @return boolean
   */
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
