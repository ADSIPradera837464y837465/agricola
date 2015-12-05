<?php

use FStudio\model\base\inventarioBaseTable;

/**
 * Description of inventarioTable
 * 
 * @author Julian Andrés Lasso Figueroa <ingeniero.julianlasso@gmail.com>
 * @package FStudio
 * @subpackage model
 * @subpackage table
 * @version 1.0.0
 */
class inventarioTable extends inventarioBaseTable {

  public function getAll() {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT inv_id AS id, pro_id AS producto_id, tpd_id AS tipo_documento_id, inv_num_doc AS num_doc, inv_fecha AS fecha, inv_cantidad AS cantidad, inv_movimiento AS movimiento, inv_saldo AS saldo, inv_descripcion AS descripcion, inv_created_at AS created_at, inv_updated_at AS updated_at, inv_deleted_at AS deleted_at FROM bda_inventario WHERE inv_deleted_at IS NULL ORDER BY inv_created_at ASC';
    $answer = $conn->prepare($sql);
    $answer->execute();
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }

  public function getById($id = null) {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT inv_id AS id, pro_id AS producto_id, tpd_id AS tipo_documento_id, inv_num_doc AS num_doc, inv_fecha AS fecha, inv_cantidad AS cantidad, inv_movimiento AS movimiento, inv_saldo AS saldo, inv_descripcion AS descripcion, inv_created_at AS created_at, inv_updated_at AS updated_at, inv_deleted_at AS deleted_at FROM bda_inventario WHERE inv_deleted_at IS NULL AND id = :id';
    $params = array(
        ':id' => ($id !== null) ? $id : $this->getId()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }

  public function save() {
    $conn = $this->getConnection($this->config);
    $sql = 'INSERT INTO bda_inventario (pro_id, tpd_id, inv_num_doc, inv_fecha, inv_cantidad, inv_movimiento, inv_saldo, inv_descripcion) VALUES (:producto_id, :tipo_documento_id, :num_doc, :fecha, :cantidad, :movimiento, :saldo, :descripcion)';
    $params = array(
        ':producto_id' => $this->getProductoId(),
        ':tipo_documento_id' => $this->getTipoDocumentoId(),
        ':num_doc' => $this->getNumDoc(),
        ':fecha' => $this->getFecha(),
        ':cantidad' => $this->getCantidad(),
        ':movimiento' => $this->getMovimiento(),
        ':saldo' => $this->getSaldo(),
        ':descripcion' => $this->getDescripcion()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    $this->setId($conn->lastInsertId(self::_SEQUENCE));
    return true;
  }

  public function update() {
    $conn = $this->getConnection($this->config);
    $sql = 'UPDATE bda_inventario SET pro_id = :producto_id, tpd_id = :tipo_documento_id, inv_num_doc = :num_doc, inv_fecha = :fecha, inv_cantidad = :cantidad, inv_movimiento = :movimiento, inv_saldo = :saldo, inv_descripcion = :descripcion WHERE inv_id = :id';
    $params = array(
        ':producto_id' => $this->getProductoId(),
        ':tipo_documento_id' => $this->getTipoDocumentoId(),
        ':num_doc' => $this->getNumDoc(),
        ':fecha' => $this->getFecha(),
        ':cantidad' => $this->getCantidad(),
        ':movimiento' => $this->getMovimiento(),
        ':saldo' => $this->getSaldo(),
        ':descripcion' => $this->getDescripcion(),
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
        $sql = 'UPDATE bda_inventario SET inv_deleted_at = now() WHERE inv_id = :id';
        break;
      case false:
        $sql = 'DELETE FROM bda_inventario WHERE inv_id = :id';
        break;
      default:
        throw new PDOException('Por favor indique un dato coherente para el borrado lógico (true) o físico (false)');
    }
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return true;
  }

}
