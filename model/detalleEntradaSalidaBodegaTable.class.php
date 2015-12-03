<?php

use FStudio\model\base\detalleEntradaSalidaBodegaBaseTable;

/**
 * Description of detalleEntradaSalidaBodegaTable
 * @author Itiani Moreno Rosero <itiani2811@gmail.com>
 * @package 
 * @subpackage model
 * @subpackage base
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
    $sql = 'SELECT des_id AS id, esb_id AS id2, pro_id  AS id3, unm_id  As id4, des_cantidad  As cantidad ,des_precio AS precio, des_created_at As createdAt, des_updated_at As updatedAt, des_deleted_at As deletedAt FROM bda_detalle_entrada_salida_bodega  WHERE des_deleted_at IS NULL ORDER BY des_created_at ASC';
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
    $sql = 'SELECT des_id AS id, esb_id AS id2, pro_id  AS id3, unm_id  As id4, des_cantidad  As cantidad ,des_precio AS precio, des_created_at As createdAt, des_updated_at As updatedAt, des_deleted_at As deletedAt'
            . 'FROM bda_detalle_entrada_salida_bodega WHERE des_deleted_at IS NULL '
            . 'AND des_id = :id';
    $params = array(
        ':des_id' => ($id !== null) ? $id : $this->getById()
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
    $sql = 'INSERT INTO bda_detalle_entrada_salida_bodega (esb_id , pro_id , unm_id  , des_cantidad ,des_precio) VALUES (:esb_id , :pro_id , :unm_id  , :des_cantidad ,:des_precio)';
    $params = array(
        ':esb_id'=> $this->getEsbId(), 
        ':pro_id' => $this->getProId(),
        ':unm_id' => $this->getUmnId(),
        ':des_cantidad'=> $this->getCantidad(),
        ':des_precio'=> $this->getPrecio(),
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
    $sql = 'UPDATE bda_detalle_entrada_salida_bodega SET esb_id = :esb_id, pro_id = :pro_id , unm_id = :unm_id ,des_cantidad = :des_cantidad, des_precio = :des_precio WHERE id = :id';
    $params = array(
        ':esb_id'=> $this->getEsbId(), 
        ':pro_id' => $this->getProId(),
        ':unm_id' => $this->getUmnId(),
        ':des_cantidad'=> $this->getCantidad(),
        ':des_precio'=> $this->getPrecio(),
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
        ':des_id' => $this->getId()
    );
    switch ($deleteLogical) {
      case true:
        $sql = 'UPDATE bda_detalle_entrada_salida_bodega SET des_deleted_at = now() WHERE des_id = :des_id';
        break;
      case false:
        $sql = 'DELETE FROM bda_detalle_entrada_salida_bodega WHERE des_id = :des_id';
        break;
      default:
        throw new PDOException('Por favor indique un dato coherente para el borrado lógico (true) o físico (false)');
    }
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return true;
  }

}
