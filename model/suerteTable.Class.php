<?php

/**
 * Description of suerteTable
 * @author Jordan Marles <jordanmarles@hotmail.es>
 * @package 
 * @subpackage model
 * @subpackage base
 * @version 1.0.0
 */
class suerteTable extends suerteTableBase {

  /**
   * Obtiene todos los datos de la tabla
   * @version 1.0.0
   * @return [stdClass | boolean]
   */
  static public function getAll() {
    $conn = $this->getConexion($this->config);
    $sql = 'SELECT sue_id, sue_descripcion, sue_area, created_at, updated_at, deleted_at, tis_id FROM bda_suerte WHERE deleted_at IS NULL ORDER BY created_at ASC';
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
  static public function getById($id) {
    $conn = getConexion($this->config);
    $sql = 'SELECT sue_id, sue_descripcion, sue_area, created_at, updated_at, deleted_at, tis_id FROM bda_suerte WHERE deleted_at IS NULL AND sue_id = :id';
    $params = array(
        ':sue_id' => $id
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
    $conn = getConexion($this->config);
    $sql = 'INSERT INTO bda_suerte (sue_descripcion, sue_area, tis_id) VALUES'
            . '(:sue_descripcion, :sue_area, :tis_id)';
    $params = array(
        ':sue_descripcion' => $this->getDescripcion(),
        ':sue_area' => $this->getArea(),
        ':tis_id' => $this->getTipoSueloId()
    );
    $respuesta = $conn->prepare($sql);
    $respuesta->execute($params);
    return $conn->lastInsertId(self::SECUENCIA);
  }

  /**
   * Actualiza un registro de la tabla
   * @version 1.0.0
   * @return boolean
   */
  public function update() {
    $conn = getConexion($this->config);
    $sql = 'UPDATE bda_suerte SET sue_descripcion = :sue_descripcion, sue_area = :sue_area, tis_id = :tis_id WHERE sue_id = :sue_id';
    $params = array(
        ':sue_descripcion' => $this->getDescripcion(),
        ':sue_area' => $this->getArea(),
        ':tis_id' => $this->getTipoSueloId()
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
    $conn = getConexion($this->config);
    switch ($deleteLogical) {
      case true:
        $sql = 'UPDATE bda_suerte SET deleted_at = now() WHERE sue_id = :sue_id';
        $params = array (
        ':sue_id' => $this->getId()
        );
        break;
      case false:
        $sql = 'DELETE FROM bda_suerte WHERE sue_id = :sue_id';
        break;
      default:
        throw new PDOException('Por favor borre de verdad, no sea mañoso');
    }
    $respuesta = $conn->prepare($sql);
    $respuesta->execute($params);
  }

}
