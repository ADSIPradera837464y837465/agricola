<?php

use FStudio\model\base\entradaSalidaBodegaBaseTable;

/**
 * Description of entradaSalidaBodegaTable
 * @author Jordan Marles <jordanmarles@hotmail.es>
 * @package FStudio
 * @subpackage model
 * @subpackage table
 * @version 1.0.0
 */
class entradaSalidaBodegaTable extends entradaSalidaBodegaBaseTable {

  /**
   * Obtiene todos los datos de la tabla
   * @return mixed [stdClass | boolean]
   */
  public function getAll() {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT esb_id AS id, ter_id_elabora AS tercero_id_elabora, ter_id_solicita AS tercero_id_solicita, tpd_id AS tipo_documento_id, esb_fecha AS fecha, esb_observacion AS observacion, esb_created_at AS created_at, esb_updated_at AS updated_at, esb_deleted_at AS deleted_at FROM bda_entrada_salida_bodega WHERE esb_deleted_at IS NULL ORDER BY esb_created_at ASC';
    $answer = $conn->prepare($sql);
    $answer->execute();
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }

  /**
   * Retorna un elemento de la tabla buscado por un id especifico
   * @param integer $id
   * @version 1.0.0
   * @return mixed [stdClass | boolean]
   */
  public function getById($id = null) {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT esb_id AS id, ter_id_elabora AS tercero_id_elabora, ter_id_solicita AS tercero_id_solicita, tpd_id AS tipo_documento_id, esb_fecha AS fecha, esb_observacion AS observacion, esb_created_at AS created_at, esb_updated_at AS updated_at, esb_deleted_at AS deleted_at FROM bda_entrada_salida_bodega WHERE esb_deleted_at IS NULL AND id = :id';
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
   * @version 1.0.0
   */
  public function save() {
    $conn = $this->getConnection($this->config);
    $sql = 'INSERT INTO bda_entrada_salida_bodega (ter_id_elabora, ter_id_solicita, tpd_id, esb_fecha, esb_observacion) VALUES (:tercero_id_elabora, :tercero_id_solicita, :tipo_documento_id, :fecha, :observacion)';
    $params = array(
        ':tercero_id_elabora' => $this->getTerceroIdElabora(),
        ':tercero_id_solicita' => $this->getTerceroIdSolicita(),
        ':tipo_documento_id' => $this->getTipoDocumentoId(),
        ':fecha' => $this->getFecha(),
        ':observacion' => $this->getObservacion()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    $this->setId($conn->lastInsertId(self::_SEQUENCE));
    return true;
  }

  /**
   * Actualiza un registro de la tabla
   * @return boolean
   * @version 1.0.0
   */
  public function update() {
    $conn = $this->getConnection($this->config);
    $sql = 'UPDATE bda_entrada_salida_bodega SET ter_id_elabora = :tercero_id_elabora, ter_id_solicita = :tercero_id_solicita, tpd_id = :tipo_documento_id, esb_fecha = :fecha, esb_observacion = :observacion WHERE esb_id = :id';
    $params = array(
        ':tercero_id_elabora' => $this->getTerceroIdElabora(),
        ':tercero_id_solicita' => $this->getTerceroIdSolicita(),
        ':tipo_documento_id' => $this->getTipoDocumentoId(),
        ':fecha' => $this->getFecha(),
        ':observacion' => $this->getObservacion(),
        ':created_at' => $this->getCreatedAt(),
        ':updated_at' => $this->getUpdatedAt(),
        ':deleted_at' => $this->getDeletedAt(),
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
   * @version 1.0.0
   * @throws PDOException
   */
  public function delete($deleteLogical = true) {
    $conn = $this->getConnection($this->config);
    $params = array(
        ':id' => $this->getId()
    );
    switch ($deleteLogical) {
      case true:
        $sql = 'UPDATE bda_entrada_salida_bodega SET esb_deleted_at = now() WHERE esb_id = :id';
        break;
      case false:
        $sql = 'DELETE FROM bda_entrada_salida_bodega WHERE esb_id = :id';
        break;
      default:
        throw new PDOException('Por favor indique un dato coherente para el borrado lógico (true) o físico (false)');
    }
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return true;
  }

}
