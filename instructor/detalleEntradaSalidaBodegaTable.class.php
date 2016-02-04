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
    $sql = 'SELECT des_id AS id, esb_id AS entrada_salida_bodega_id, pro_id AS producto_id, unm_id AS unidad_medida_id, des_cantidad AS cantidad, des_precio AS precio, des_created_at AS created_at, des_updated_at AS updated_at, des_deleted_at AS deleted_at FROM bda_detalle_entrada_salida_bodega WHERE des_deleted_at IS NULL ORDER BY des_created_at ASC';
    $answer = $conn->prepare($sql);
    $answer->execute();
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }

  public function getById($id = null) {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT des_id AS id, esb_id AS entrada_salida_bodega_id, pro_id AS producto_id, unm_id AS unidad_medida_id, des_cantidad AS cantidad, des_precio AS precio, des_created_at AS created_at, des_updated_at AS updated_at, des_deleted_at AS deleted_at FROM bda_detalle_entrada_salida_bodega WHERE des_deleted_at IS NULL AND id = :id';
    $params = array(
        ':id' => ($id !== null) ? $id : $this->getId()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }

  public function save() {
    $conn = $this->getConnection($this->config);
    $sql = 'INSERT INTO bda_detalle_entrada_salida_bodega (esb_id, pro_id, unm_id, des_cantidad, des_precio) VALUES (:entrada_salida_bodega_id, :producto_id, :unidad_medida_id, :cantidad, :precio)';
    $params = array(
        ':entrada_salida_bodega_id' => $this->getEntradaSalidaBodegaId(),
        ':producto_id' => $this->getProductoId(),
        ':unidad_medida_id' => $this->getUnidadMedidaId(),
        ':cantidad' => $this->getCantidad(),
        ':precio' => $this->getPrecio()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    $this->setId($conn->lastInsertId(self::_SEQUENCE));
    return true;
  }

  public function update() {
    $conn = $this->getConnection($this->config);
    $sql = 'UPDATE bda_detalle_entrada_salida_bodega SET esb_id = :entrada_salida_bodega_id, pro_id = :producto_id, unm_id = :unidad_medida_id, des_cantidad = :cantidad, des_precio = :precio WHERE des_id = :id';
    $params = array(
        ':entrada_salida_bodega_id' => $this->getEntradaSalidaBodegaId(),
        ':producto_id' => $this->getProductoId(),
        ':unidad_medida_id' => $this->getUnidadMedidaId(),
        ':cantidad' => $this->getCantidad(),
        ':precio' => $this->getPrecio(),
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
        $sql = 'UPDATE bda_detalle_entrada_salida_bodega SET des_deleted_at = now() WHERE des_id = :id';
        break;
      case false:
        $sql = 'DELETE FROM bda_detalle_entrada_salida_bodega WHERE des_id = :id';
        break;
      default:
        throw new PDOException('Por favor indique un dato coherente para el borrado lógico (true) o físico (false)');
    }
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return true;
  }

}
