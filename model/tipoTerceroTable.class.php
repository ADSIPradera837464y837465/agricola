<?php

use FStudio\model\base\tipoTerceroBaseTable;

/**
 * Description of tipoTerceroTable
 * @author Duvier Marin Escobar <duvierm24@gmail.com>
 * @package FStudio
 * @subpackage model
 * @subpackage base
 * @version 1.0.0
 */
class tipoTerceroTable extends tipoTerceroBaseTable {

  /**
   * Obtiene todos los datos de la tabla
   * @return mixed [stdClass | boolean]
   */
  public function getAll() {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT tit_id, tit_descripcion, tit_created_at, tit_updated_at, tit_deleted_at FROM bda_tipo_tercero WHERE tit_deleted_at IS NULL ORDER BY tit_created_at ASC';
    $answer = $conn->prepare($sql);
    $answer->execute();
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }

  /**
   * Retorna un elemento de la tabla buscado por un id especifico
   * @param integer $id
   * @return mixed [stdClass | boolean]
   */
  public function getById($id = null) {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT tit_id, tit_descripcion, tit_created_at, tit_updated_at, tit_deleted_at FROM bda_tipo_tercero WHERE tit_deleted_at IS NULL '
            . 'AND tit_id = :id';
    $params = array(
        ':id' => ($id !== null) ? $id : $this->getId()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }

  /**
   * Registra los datos del objeto en la tabla
   * @return boolean
   */
  public function save() {
    $conn = $this->getConnection($this->config);
    $sql = 'INSERT INTO bda_tipo_tercero (tit_descripcion) VALUES (:descripcion)';
    $params = array(
        ':descripcion' => $this->getDescripcion()
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
    $sql = 'UPDATE bda_tipo_tercero SET tit_descipcion = :descripcion WHERE id = :id';
    $params = array(
        ':id' => $this->getId()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return true;
  }

  /**
   * Borra en forma logica o fisica un registro de la tabla
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
        $sql = 'UPDATE bda_tipo_tercero SET deleted_at = now() WHERE id = :id';
        break;
      case false:
        $sql = 'DELETE FROM bda_tipo_tercero WHERE id = :id';
        break;
      default:
        throw new PDOException('Por favor indique un dato coherente para el borrado lógico o físico');
    }
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return true;
  }

}
