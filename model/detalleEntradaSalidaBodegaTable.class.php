<?php

use FStudio\model\base\detalleEntradaSalidaBodegaBaseTable;

/**
 * Description of detalleEntradaSalidaBodegaTable
 * @author Itiani Moreno Rosero <itiani2811@gmail.com>
 * @package 
 * @subpackage model
 * @subpackage table
 * @version 1.0.0
 */
class detalleEntradaSalidaBodegaTable extends detalleEntradaSalidaBodegaBaseTable {

  /**
   * Obtiene todos los datos de la tabla
   * @version 1.0.0
   * @return mixed [stdClass | boolean]
   */
  public function getAll() {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT des_id AS id, esb_id AS entrada_salida_bodega_id, pro_id AS producto_id, unm_id AS unidad_medida_id, des_cantidad AS cantidad, des_precio AS precio, des_created_at AS created_at, des_updated_at AS updated_at, des_deleted_at AS deleted_at FROM bda_detalle_entrada_salida_bodega WHERE des_deleted_at IS NULL ORDER BY des_created_at ASC';
    $answer = $conn->prepare($sql);
    $answer->execute();
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }

  public function getById($id = null) {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT des_id AS id, esb_id AS entrada_salida_bodega_id, pro_id AS producto_id, unm_id AS unidad_medida_id, des_cantidad AS cantidad, des_precio AS precio, des_created_at AS created_at, des_updated_at AS updated_at, des_deleted_at AS deleted_at FROM bda_detalle_entrada_salida_bodega WHERE des_deleted_at IS NULL AND des_id = :id';
    $params = array(
        ':id' => ($id !== null) ? $id : $this->getId()
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

  /**
   * Actualiza un registro de la tabla
   * @version 1.0.0
   * @return boolean
   */
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
  
  

  public function pager($inicio, $fin) {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT des_id AS id, esb_id AS entrada_salida_bodega_id, pro_id AS producto_id, unm_id AS unidad_medida_id, des_cantidad AS cantidad, des_precio AS precio, des_created_at AS created_at, des_updated_at AS updated_at, des_deleted_at AS deleted_at FROM bda_detalle_entrada_salida_bodega WHERE des_deleted_at IS NULL ORDER BY des_created_at ASC LIMIT :inicio offset :fin';
    $params = array(
        ':inicio' => $inicio,
        ':fin' => $fin
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }

  public function total() {
    $conn = $this->getConnection($this->config);
    $sql = 'Select count(*) from bda_detalle_entrada_salida_bodega WHERE des_deleted_at IS NULL';
    $answer = $conn->prepare($sql);
    $answer->execute();
    return $answer->fetch();
  }
  
  public function filtro($indicio = null) {
    $conn = $this->getConnection($this->config);
    $sql = "SELECT des_id AS id, esb_id AS entrada_salida_bodega_id, pro_id AS producto_id, unm_id AS unidad_medida_id, des_cantidad AS cantidad, des_precio AS precio, des_created_at AS created_at, des_updated_at AS updated_at, des_deleted_at AS deleted_at FROM bda_detalle_entrada_salida_bodega WHERE des_id LIKE '%" . $indicio . "%' AND  des_deleted_at IS NULL limit 2";
    $answer = $conn->prepare($sql);
    $answer->execute();
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }

//  public function resultadoPaginador() {
//    $conn = $this->getConnection($this->config);
//    $sql = 'Select count(*) from bda_entrada_salida_bodega LIMIT 12';
//    $answer = $conn->prepare($sql);
//    $answer->execute();
//    return $answer->fetch();
//  }

//  public function filtro($criterio = null) {
//    $conn = $this->getConnection($this->config);
//    $sql = "SELECT esb_id AS id, ter_id_elabora AS tercero_id_elabora, ter_id_solicita AS tercero_id_solicita, tpd_id AS tipo_documento_id, esb_fecha AS fecha, esb_observacion AS observacion, esb_created_at AS created_at, esb_updated_at AS updated_at, esb_deleted_at AS deleted_at FROM bda_entrada_salida_bodega WHERE  esb_id like '%" . $criterio . "%' and delete_at IS NULL";
//    $answer = $conn->prepare($sql);
//    $answer->execute();
//    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
//  }

  public function reporte($reporte, $fecha1, $fecha2) {
    $conn = $this->getConnection($this->config);
    $sql = "SELECT esb_id AS id, ter_id_elabora AS tercero_id_elabora, ter_id_solicita AS tercero_id_solicita, tpd_id AS tipo_documento_id, esb_fecha AS fecha, esb_observacion AS observacion, esb_created_at AS created_at, esb_updated_at AS updated_at, esb_deleted_at AS deleted_at FROM bda_entrada_salida_bodega WHERE esb_created_at  BETWEEN '$fecha1' AND '$fecha2'";
    $answer = $conn->prepare($sql);
    $answer->execute();
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }
   

}
