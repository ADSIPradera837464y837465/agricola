<?php

use FStudio\model\base\tipoSueloBaseTable;


/**
 * Description of tipoSueloTable
 * @author Jordan Marles <jordanmarles@hotmail.es>
 * @package FStudio
 * @subpackage model
 * @subpackage base
 * @version 1.0.0
 */
class tipoSueloTable extends tipoSueloBaseTable {

  /**
   * Obtiene todos los datos de la tabla
   * @version 1.0.0
   * @return [stdClass | boolean]
   */
  static public function getAll() {
    $conn = $this->getConexion($this->config);
    $sql = 'SELECT tis_id, tis_descripcion, created_at, updated_at, deleted_at FROM dba_tipo_suelo WHERE deleted_at IS NULL ORDER BY created_at ASC';
    $respuesta = $conn->prepare($sql);
    $respuesta->execute();
    return ($respuesta->rowCount() > 0 ) ? $respuesta->fetchAll(PDO::FETCH_OBJ) : false;
  }

  /**
   * Retorna un elemento de la tabla buscado por un id especifico
   * @version 1.0.0
   * @param integer $id
   * @return [stdClass | boolean]
   */
  public function getById($id = null) {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT tis_id, tis_descripcion, created_at, updated_at, deleted_at FROM dba_tipo_suelo WHERE deleted_at IS NULL AND tis_id = :id';
    $params = array(
        ':tis_id' => ($id !== null) ? $id : $this->getId()
    );
    $respuesta = $conn->prepare($sql);
    $respuesta->execute($params);
    return ($respuesta->rowCount() > 0 ) ? $respuesta->fetchAll(PDO::FETCH_OBJ) : false;
  }

  /**
   * Registra los datos del objeto en la tabla
   * @version 1.0.0
   * @return integer
   */
  public function save() {
    $conn = $this->getConnection($this->config);
    $sql = 'INSERT INTO dba_tipo_suelo (tis_descripcion) VALUES'
            . '(:tis_descripcion)';
    $params = array(
        ':tis_descripcion' => $this->getDescripcion(),
    );
    $respuesta = $conn->prepare($sql);
    $respuesta->execute($params);
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
    $sql = 'UPDATE dba_tipo_suelo SET tis_descripcion = :tis_descripcion WHERE tis_id = :tis_id';
    $params = array(
        ':tis_id' => $this->getId(),
        ':tis_descripcion' => $this->getDescripcion()
    );
    $respuesta = $conn->prepare($sql);
    $respuesta->execute($params);
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
        ':tis_id' => $this->getId()
    );
    switch ($deleteLogical) {
      case true:
        $sql = 'UPDATE dba_tipo_suelo SET deleted_at = now() WHERE tis_id = :tis_id';
        break;
      case false:
        $sql = 'DELETE FROM dba_tipo_suelo WHERE tis_id = :tis_id';
        break;
      default:
        throw new PDOException('Por favor borre de verdad, no sea mañoso');
    }
    $respuesta = $conn->prepare($sql);
    $respuesta->execute($params);
    return true;
  }

}
