<?php

use FStudio\model\base\productoBaseTable;

/**
 * Description of productoTable
 *
 * @author nombre completo <su@correo.com>
 * @package FStudio
 * @subpackage model
 * @subpackage table
 * @version 1.0.0
 */
class productoTable extends productoBaseTable {

  public function getAll() {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT pro_id AS id, pro_descripcion AS descripcion, tpr_id AS tipo_producto_id, mar_id AS marca_id, unm_id AS unidad_medida_id, pro_created_at AS created_at, pro_updated_at AS updated_at, pro_deleted_at_at AS deleted_at FROM bda_producto WHERE pro_deleted_at_at IS NULL ORDER BY pro_created_at ASC';
    $answer = $conn->prepare($sql);
    $answer->execute();
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }

  public function getById($id = null) {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT pro_id AS id, pro_descripcion AS descripcion, tpr_id AS tipo_producto_id, mar_id AS marca_id, unm_id AS unidad_medida_id, pro_created_at AS created_at, pro_updated_at AS updated_at, pro_deleted_at_at AS deleted_at FROM bda_producto WHERE pro_deleted_at_at IS NULL AND id = :id';
    $params = array(
        ':id' => ($id !== null) ? $id : $this->getId()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }

  public function save() {
    $conn = $this->getConnection($this->config);
    $sql = 'INSERT INTO bda_producto (pro_descripcion, tpr_id, mar_id, unm_id) VALUES (:descripcion, :tipo_producto_id, :marca_id, :unidad_medida_id)';
    $params = array(
        ':descripcion' => $this->getDescripcion(),
        ':tipo_producto_id' => $this->getTipoProductoId(),
        ':marca_id' => $this->getMarcaId(),
        ':unidad_medida_id' => $this->getUnidadMedidaId()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    $this->setId($conn->lastInsertId(self::_SEQUENCE));
    return true;
  }

  public function update() {
    $conn = $this->getConnection($this->config);
    $sql = 'UPDATE bda_producto SET pro_descripcion = :descripcion, tpr_id = :tipo_producto_id, mar_id = :marca_id, unm_id = :unidad_medida_id WHERE pro_id = :id';
    $params = array(
        ':descripcion' => $this->getDescripcion(),
        ':tipo_producto_id' => $this->getTipoProductoId(),
        ':marca_id' => $this->getMarcaId(),
        ':unidad_medida_id' => $this->getUnidadMedidaId(),
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
        $sql = 'UPDATE bda_producto SET pro_deleted_at_at = now() WHERE pro_id = :id';
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
