<?php

use FStudio\model\base\productoBaseTable;

/**
 * Clase para manejar la tabla producto
 * @author Julian Andrés Lasso Figueroa <ingeniero.julianlasso@gmail.com>
 * @package FStudio
 * @subpackage model
 * @subpackage table 
 * @version 1.0.0
 */
class productoTable extends productoBaseTable {

  /**
   * Obtiene todos los datos de la tabla
   * @version 1.0.0
   * @return mixed [stdClass | boolean]
   */
  public function getAll() {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT pro_id AS id, pro_descripcion AS descripcion, tpr_id AS tipoProductoId, mar_id AS marcaId, unm_id AS unidadMedidaId, pro_created_at AS createdAt, pro_updated_at AS updatedAt, pro_deleted_at AS deletedAt FROM bda_producto WHERE pro_deleted_at IS NULL ORDER BY pro_created_at ASC';
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
  public function getById($id) {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT pro_id AS id, pro_descripcion AS descripcion, tpr_id AS tipoProductoId, mar_id AS marcaId, unm_id AS unidadMedidaId, pro_created_at AS createdAt, pro_updated_at AS updatedAt, pro_deleted_at AS deletedAt '
            . 'FROM bda_producto WHERE pro_deleted_at IS NULL '
            . 'AND pro_id = :id';
    $params = array(
        ':id' => $id
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
    $sql = 'INSERT INTO bda_producto (pro_descripcion, tpr_id, mar_id, unm_id) VALUES (:descripcion, :tipo_producto, :marca, :unidad_medida)';
    $params = array(
        ':descripcion' => $this->getDescripcion(),
        ':tipo_producto' => $this->getTipoProductoId(),
        ':marca' => $this->getMarcaId(),
        ':unidad_medida' => $this->getUnidadMedidaId()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return $conn->lastInsertId(self::_SEQUENCE);
  }

  /**
   * Actualiza un registro de la tabla
   * @version 1.0.0
   * @return boolean
   */
  public function update() {
    $conn = $this->getConnection($this->config);
    $sql = 'UPDATE bda_producto SET pro_descripcion = :descripcion, tpr_id = :tipo_producto, mar_id = :marca, unm_id = :unidad_medida WHERE pro_id = :id';
    $params = array(
        ':descripcion' => $this->getDescripcion(),
        ':tipo_producto' => $this->getTipoProductoId(),
        ':marca' => $this->getMarcaId(),
        ':unidad_medida' => $this->getUnidadMedidaId(),
        ':id' => $this->getId()
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
        ':id' => $this->getId()
    );
    switch ($deleteLogical) {
      case true:
        $sql = 'UPDATE bda_producto SET pro_deleted_at = now() WHERE pro_id = :id';
        break;
      case false:
        $sql = 'DELETE FROM bda_producto WHERE pro_id = :id';
        break;
      default:
        throw new PDOException('Por favor indique un dato coherente para el borrado lógico (true) o físico (false)');
    }
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return true;
  }

}


//gnu