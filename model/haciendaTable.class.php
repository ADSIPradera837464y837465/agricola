<?php

use FStudio\model\base\haciendaBaseTable;

/**
 * Description of haciendaTable
 * @author Victoria Cortes  <victoriacortes2014@hotmail.com>
 * @package FStudio
 * @subpackage model
 * @subpackage table
 * @version 1.0.0
 */
class haciendaTable extends haciendaBaseTable {

  /**
   * muestra todo los datos de la tabla
   * @return type
   */
  public function getAll() {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT hac_id AS id, hac_descripcion AS descripcion, hac_ubicacion AS ubicacion, hac_representante_legal AS representante_legal, hac_created_at AS created_at, hac_updated_at AS updated_at, hac_deleted_at AS deleted_at FROM bda_hacienda ORDER BY  ASC';
    $answer = $conn->prepare($sql);
    $answer->execute();
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }

  /**
   * retorna un solo dato de la tabla
   * @param type $id
   * @return type
   */
  public function getById($id = null) {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT hac_id AS id, hac_descripcion AS descripcion, hac_ubicacion AS ubicacion, hac_representante_legal AS representante_legal, hac_created_at AS created_at, hac_updated_at AS updated_at, hac_deleted_at AS deleted_at FROM bda_hacienda AND id = :id';
    $params = array(
        ':id' => ($id !== null) ? $id : $this->getId()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }

  /**
   * guarda el registro de un dato en la tabla
   * @return type
   */
  public function save() {
    $conn = $this->getConnection($this->config);
    $sql = 'INSERT INTO bda_hacienda (hac_descripcion, hac_ubicacion, hac_representante_legal) VALUES (:descripcion, :ubicacion, :representante_legal)';
    $params = array(
        ':descripcion' => $this->getDescripcion(),
        ':ubicacion' => $this->getUbicacion(),
        ':representante_legal' => $this->getRepresentanteLegal()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    $this->setId($conn->lastInsertId(self::_SEQUENCE));
    return true;
  }
  /**
   * atualiza un registro de la tabla
   * @return boolean
   */
  public function update() {
    $conn = $this->getConnection($this->config);
    $sql = 'UPDATE bda_hacienda SET hac_descripcion = :descripcion, hac_ubicacion = :ubicacion, hac_representante_legal = :representante_legal WHERE hac_id = :id';
    $params = array(
        ':descripcion' => $this->getDescripcion(),
        ':ubicacion' => $this->getUbicacion(),
        ':representante_legal' => $this->getRepresentanteLegal(),
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
        $sql = 'UPDATE bda_hacienda SET hac_deleted_at = now() WHERE hac_id = :id';
        break;
      case false:
        $sql = 'DELETE FROM bda_hacienda WHERE hac_id = :id';
        break;
      default:
        throw new PDOException('Por favor indique un dato coherente para el borrado lógico (true) o físico (false)');
    }
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return true;
  }

}
