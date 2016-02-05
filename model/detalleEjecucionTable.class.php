<?php

use FStudio\model\base\detalleEjecucionBaseTable;

/**
 * Description of detalleEjecucionTable
 *
 * @author
 * @package FStudio
 * @subpackage model
 * @subpackage table
 * @version 1.0.0
 */
class detalleEjecucionTable extends detalleEjecucionBaseTable {

  /**
   * Obtiene todos los datos de la tabla
   * @return [stdClass | boolean]
   */
  public function getAll() {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT dee_id AS id, ore_id AS orden_ejecucion_id, ter_id AS tercero_id, ser_id AS servicio_maquina_id, pro_id AS producto_id, dee_cantidad AS cantidad, dee_precio AS precio, dee_created_at AS created_at, dee_updated_at AS updated_at, dee_deleted_at AS deleted_at FROM bda_detalle_ejecucion ORDER BY dee_created_at ASC';
    $answer = $conn->prepare($sql);
    $answer->execute();
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }

  /**
   * Retorna un elemento de la tabla buscado por un id especifico
   * @param integer $id
   * @return [stdClass | boolean]
   */
  public function getById($id = null) {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT dee_id AS id, ore_id AS orden_ejecucion_id, ter_id AS tercero_id, ser_id AS servicio_maquina_id, pro_id AS producto_id, dee_cantidad AS cantidad, dee_precio AS precio, dee_created_at AS created_at, dee_updated_at AS updated_at, dee_deleted_at AS deleted_at FROM bda_detalle_ejecucion AND id = :id';
    $params = array(
        ':id' => ($id !== null) ? $id : $this->getId()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }

  /**
   * Registra los datos del objeto en la tabla
   * @return integer
   */
  public function save() {
    $conn = $this->getConnection($this->config);
    $sql = 'INSERT INTO bda_detalle_ejecucion (ore_id, ter_id, ser_id, pro_id, dee_cantidad, dee_precio, dee_updated_at, dee_deleted_at) VALUES (:orden_ejecucion_id, :tercero_id, :servicio_maquina_id, :producto_id, :cantidad, :precio, :updated_at, :deleted_at)';
    $params = array(
        ':orden_ejecucion_id' => $this->getOrdenEjecucionId(),
        ':tercero_id' => $this->getTerceroId(),
        ':servicio_maquina_id' => $this->getServicioMaquinaId(),
        ':producto_id' => $this->getProductoId(),
        ':cantidad' => $this->getCantidad(),
        ':precio' => $this->getPrecio(),
        ':updated_at' => $this->getUpdatedAt(),
        ':deleted_at' => $this->getDeletedAt()
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
    $sql = 'UPDATE bda_detalle_ejecucion SET ore_id = :orden_ejecucion_id, ter_id = :tercero_id, ser_id = :servicio_maquina_id, pro_id = :producto_id, dee_cantidad = :cantidad, dee_precio = :precio, dee_updated_at = :updated_at, dee_deleted_at = :deleted_at WHERE dee_id = :id';
    $params = array(
        ':orden_ejecucion_id' => $this->getOrdenEjecucionId(),
        ':tercero_id' => $this->getTerceroId(),
        ':servicio_maquina_id' => $this->getServicioMaquinaId(),
        ':producto_id' => $this->getProductoId(),
        ':cantidad' => $this->getCantidad(),
        ':precio' => $this->getPrecio(),
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
   * @throws PDOException
   */
  public function delete() {
    $conn = $this->getConnection($this->config);
    $sql = 'DELETE FROM bda_detalle_ejecucion WHERE dee_id = :id';
    $params = array(
        ':id' => $this->getId()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return true;
  }

}
