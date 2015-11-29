<?php

use FStudio\model\base\tipoDocumentoTableBase;

/**
 * clase para manejar la tabla tipoDocumento
 * Description of tipoDocumentoTable
 *  @author Angela Cardona Molina <angela04cardona@hotmail.com>
 * @package FStudio
 * @subpackage model
 * @subpackage table
 * @version 1.0.0
 */
class tipoDocumentoTable extends tipoDocumentoTableBase {

  /**
   * Obtiene todos los datos de la tabla
   *  @version 1.0.0
   * @return  [stdClass | boolean]
   */
  public function getAll() {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT tip_id, tpd_descripcion, tpd_tipo_movimiento, tpd_estado, created_at FROM tipo_documento ORDER BY created_at ASC';
    $answer = $conn->prepare($sql);
    $answer->execute();
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }

  /**
   * Retorna un elemento de la tabla buscado por un ID especifico
   * @version 1.0.0
   * @param integer $id ID a buscar
   * @return mixed [stdClass | boolean]
   */
  public function getById($id = null) {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT tip_id AS id, tpd_descripcion AS descripcion, tpd_tipo_movimiento As tipo_movimiento, tpd_estado As estado, tpd_created_at AS createdAt, tpd_updated_at AS updatedAt, tpd_deleted_at AS deletedAt FROM bda_tipo_documento WHERE tpd_deleted_at IS NULL ORDER BY tpd_created_at ASC';
    $params = array(
        ':tip_id' => ($id !== null) ? $id : $this->getId()
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
    $sql = 'INSERT INTO tipo_documento (tpd_descripcion, tpd_tipo_movimiento, tpd_estado) VALUES (:tpd_descripcion, :tpd_tipo_movimiento, :tpd_estado)';
    $params = array(
        ':tipo_descripcion' => $this->getDescripcion(),
        ':tpd_tipo_movimiento' => $this->getMovimiento(),
        ':tpd_estado' => $this->getEstado(),
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    $this->setId($conn->lastInsertId(self::_SEQUENCE));
    return boolean;
  }

  /**
   * Actualiza un registro de la tabla
   * @version 1.0.0
   * @return boolean
   */
  public function update() {
    $conn = $this->getConnection($this->config);
    $sql = 'UPDATE tipo_documento SET tpd_descripcion =:tpd_descripcion,tpd_tipo_movimiento = :tpd_tipo_movimiento,tpd_estado = :tpd_estado)';
    $params = array(
        ':tpd_descripcion' => $this->getDescripcion(),
        ':tpd_tipo_movimiento' => $this->getMovimiento(),
        ':tpd_estado' => $this->getEstado(),
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return true;
  }

  /**
   * Borra en forma logica o fisica un registro de la tabla
   * @version 1.0.0
   * @param boolean $deleteLogical Especifica el borrado logico (true o false)
   * @return boolean
   * @throws PDOException
   */
  public function delete($deleteLogical = true) {
    $conn = $this->getConnection($this->config);
    $params = array(
        ':tpd_id' => $this->getId()
    );
    switch ($deleteLogical) {
      case true:
        $sql = 'UPDATE bda_tipo_documento SET tpd_deleted_at = now() WHERE tip_id = :id';
        break;
      case false:
        $sql = 'DELETE FROM bda_tipo_documento WHERE tip_id = :id';
        break;
      default:
        throw new PDOException('Por favor indique un dato coherente para el borrado lógico (true) o físico (false)');
    }
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return true;
  }

}
