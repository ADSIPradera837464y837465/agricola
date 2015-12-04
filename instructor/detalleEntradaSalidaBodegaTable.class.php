<?php

use FStudio\model\base\detalleEntradaSalidaBodegaBaseTable;

/**
 * Description of detalleEntradaSalidaBodegaTable
 *
 * @author nombre completo <su@correo.com>
 * @package FStudio
 * @subpackage model
 * @subpackage table
 * @version 1.0.0
 */
class detalleEntradaSalidaBodegaTable extends detalleEntradaSalidaBodegaBaseTable {

  public function getAll() {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT des_id AS id, esb_id AS entrada_salida_bodega_id, pro_id AS producto_id, unm_id AS unidad_medida_id, des_cantidad AS cantidad, des_precio AS precio, des_created_at AS created_at, des_updated_at AS updated_at, des_deleted_at AS deleted_at FROM bda_detalle_entrada_salida_bodega ORDER BY des_created_at ASC';
    $answer = $conn->prepare($sql);
    $answer->execute();
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }

  public function getById($id = null) {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT des_id AS id, esb_id AS entrada_salida_bodega_id, pro_id AS producto_id, unm_id AS unidad_medida_id, des_cantidad AS cantidad, des_precio AS precio, des_created_at AS created_at, des_updated_at AS updated_at, des_deleted_at AS deleted_at FROM bda_detalle_entrada_salida_bodega AND id = :id';
    $params = array(
        ':id' => ($id !== null) ? $id : $this->getId()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }

  public function save() {
    $conn = $this->getConnection($this->config);
    $sql = 'INSERT INTO bda_detalle_entrada_salida_bodega (esb_id, pro_id, unm_id, des_cantidad, des_precio, des_updated_at, des_deleted_at) VALUES (:entrada_salida_bodega_id, :producto_id, :unidad_medida_id, :cantidad, :precio, :updated_at, :deleted_at)';
    $params = array(
        ':entrada_salida_bodega_id' => $this->getEntradaSalidaBodegaId(),
        ':producto_id' => $this->getProductoId(),
        ':unidad_medida_id' => $this->getUnidadMedidaId(),
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

  public function update() {
    $conn = $this->getConnection($this->config);
    $sql = 'UPDATE bda_detalle_entrada_salida_bodega SET esb_id = :entrada_salida_bodega_id, pro_id = :producto_id, unm_id = :unidad_medida_id, des_cantidad = :cantidad, des_precio = :precio, des_updated_at = :updated_at, des_deleted_at = :deleted_at WHERE des_id = :id';
    $params = array(
        ':entrada_salida_bodega_id' => $this->getEntradaSalidaBodegaId(),
        ':producto_id' => $this->getProductoId(),
        ':unidad_medida_id' => $this->getUnidadMedidaId(),
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

  public function delete() {
    $conn = $this->getConnection($this->config);
    $sql = 'DELETE FROM bda_detalle_entrada_salida_bodega WHERE des_id = :id';
    $params = array(
        ':id' => $this->getId()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return true;
  }

}