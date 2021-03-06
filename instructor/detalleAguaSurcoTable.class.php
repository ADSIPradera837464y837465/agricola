<?php

use FStudio\model\base\detalleAguaSurcoBaseTable;

/**
 * Description of detalleAguaSurcoTable
 *
 * @author nombre completo <su@correo.com>
 * @package FStudio
 * @subpackage model
 * @subpackage table
 * @version 1.0.0
 */
class detalleAguaSurcoTable extends detalleAguaSurcoBaseTable {

  public function getAll() {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT deaas_id AS id, deaas_item AS item, deaas_cantidad_surco AS cantidad_surco, fore_num_documento AS control_administrativo_riego_id, deaas_created_at AS created_at, deaas_updated_at AS updated_at, deaas_deleted_at AS deleted_at FROM bda_detalle_agua_surco WHERE deaas_deleted_at IS NULL ORDER BY deaas_created_at ASC';
    $answer = $conn->prepare($sql);
    $answer->execute();
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }

  public function getById($id = null) {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT deaas_id AS id, deaas_item AS item, deaas_cantidad_surco AS cantidad_surco, fore_num_documento AS control_administrativo_riego_id, deaas_created_at AS created_at, deaas_updated_at AS updated_at, deaas_deleted_at AS deleted_at FROM bda_detalle_agua_surco WHERE deaas_deleted_at IS NULL AND id = :id';
    $params = array(
        ':id' => ($id !== null) ? $id : $this->getId()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }

  public function save() {
    $conn = $this->getConnection($this->config);
    $sql = 'INSERT INTO bda_detalle_agua_surco (deaas_item, deaas_cantidad_surco, fore_num_documento) VALUES (:item, :cantidad_surco, :control_administrativo_riego_id)';
    $params = array(
        ':item' => $this->getItem(),
        ':cantidad_surco' => $this->getCantidadSurco(),
        ':control_administrativo_riego_id' => $this->getControlAdministrativoRiegoId()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    $this->setId($conn->lastInsertId(self::_SEQUENCE));
    return true;
  }

  public function update() {
    $conn = $this->getConnection($this->config);
    $sql = 'UPDATE bda_detalle_agua_surco SET deaas_item = :item, deaas_cantidad_surco = :cantidad_surco, fore_num_documento = :control_administrativo_riego_id WHERE deaas_id = :id';
    $params = array(
        ':item' => $this->getItem(),
        ':cantidad_surco' => $this->getCantidadSurco(),
        ':control_administrativo_riego_id' => $this->getControlAdministrativoRiegoId(),
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
        $sql = 'UPDATE bda_detalle_agua_surco SET deaas_deleted_at = now() WHERE deaas_id = :id';
        break;
      case false:
        $sql = 'DELETE FROM bda_detalle_agua_surco WHERE deaas_id = :id';
        break;
      default:
        throw new PDOException('Por favor indique un dato coherente para el borrado lógico (true) o físico (false)');
    }
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return true;
  }

}
