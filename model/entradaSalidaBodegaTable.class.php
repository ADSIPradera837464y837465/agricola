<?php

use FStudio\model\base\entradaSalidaBodegaTableBase;

/**
 * Description of entradaSalidaBodegaTable
 * @author Jordan Marles <jordanmarles@hotmail.es>
 * @package FStudio
 * @subpackage model
 * @subpackage base
 * @version 1.0.0
 */
class entradaSalidaBodegaTable extends entradaSalidaBodegaTableBase {

  /**
   * Obtiene todos los datos de la tabla
   * @return mixed [stdClass | boolean]
   */
  public function getAll() {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT esb_id, ter_id_elabora, ter_id_solicita, tpd_id, esb_fecha, esb_observacion, esb_created_at, esb_updated_at, esb_deleted_at FROM bda_entrada_salida_bodega WHERE esb_deleted_at IS NULL ORDER BY esb_created_at ASC';
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
    $sql = 'SELECT esb_id, ter_id_elabora, ter_id_solicita, tpd_id, esb_fecha, esb_observacion, esb_created_at, esb_updated_at, esb_deleted_at FROM bda_entrada_salida_bodega WHERE esb_deleted_at IS NULL '
            . 'AND esb_id = :esb_id';
    $params = array(
        ':esb_id' => ($id !== null) ? $id : $this->getId()
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
    $sql = 'INSERT INTO bda_entrada_salida_bodega (ter_id_elabora, ter_id_solicita, tpd_id, esb_fecha, esb_observacion) VALUES (:ter_id_elabora, :ter_id_solicita, :tpd_id, esb_fecha, :esb_observacion)';
    $params = array(
        ':ter_id_elabora' => $this->getTerIdElabora(),
        ':ter_id_solicita' => $this->getTerIdSolicita(),
        ':tpd_id' => $this->getTpdId(),
        ':esb_fecha' => $this->getEsbFecha(),
        ':esb_observacion' => $this->getEsbObservacion()
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
    $sql = 'UPDATE bda_entrada_salida_bodega SET ter_id_elabora = :ter_id_elabora, ter_id_solicita = :ter_id_solicita, tpd_id = :tpd_id, esb_fecha = :esb_fecha, esb_observacion = :esb_observacion WHERE esb_id = :esb_id';
    $params = array(
        ':esb_id' => $this->getId()
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
        ':esb_id' => $this->getId()
    );
    switch ($deleteLogical) {
      case true:
        $sql = 'UPDATE bda_entrada_salida_bodega SET esb_deleted_at = now() WHERE esb_id = :esb_id';
        break;
      case false:
        $sql = 'DELETE FROM bda_entrada_salida_bodega WHERE esb_id = :esb_id';
        break;
      default:
        throw new PDOException('Por favor borre de verdad, no sea mañoso');
    }
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return true;
  }

}
