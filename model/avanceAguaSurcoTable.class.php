<?php

use FStudio\model\base\avanceAguaSurcoBaseTable;

/**
 * Description of avanceAguaSurcoTable
 *
 * @author Julian Andrés Lasso Figueroa <ingeniero.julianlasso@gmail.com>
 * @package FStudio
 * @subpackage model
 * @subpackage table
 * @version 1.0.0
 */
class avanceAguaSurcoTable extends avanceAguaSurcoBaseTable {

  public function getAll() {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT aas_item AS id, car_num_documento AS control_administrativo_riego_id, aas_surco_id AS surco_id, aas_created_at AS created_at, aas_updated_at AS updated_at, aas_deleted_at AS deleted_at FROM bda_avance_agua_surco WHERE aas_deleted_at IS NULL ORDER BY aas_created_at ASC';
    $answer = $conn->prepare($sql);
    $answer->execute();
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }

  public function getById($id = null) {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT aas_item AS id, car_num_documento AS control_administrativo_riego_id, aas_surco_id AS surco_id, aas_created_at AS created_at, aas_updated_at AS updated_at, aas_deleted_at AS deleted_at FROM bda_avance_agua_surco WHERE aas_deleted_at IS NULL AND aas_item = :id';
    $params = array(
        ':id' => ($id !== null) ? $id : $this->getId()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }

  public function save() {
    $conn = $this->getConnection($this->config);
    $sql = 'INSERT INTO bda_avance_agua_surco (car_num_documento, aas_surco_id) VALUES (:control_administrativo_riego_id, :surco_id)';
    $params = array(
        ':control_administrativo_riego_id' => $this->getControlAdministrativoRiegoId(),
        ':surco_id' => $this->getSurcoId()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    $this->setId($conn->lastInsertId(self::_SEQUENCE));
    return true;
  }

  public function update() {
    $conn = $this->getConnection($this->config);
    $sql = 'UPDATE bda_avance_agua_surco SET car_num_documento = :control_administrativo_riego_id, aas_surco_id = :surco_id WHERE aas_item = :id';
    $params = array(
        ':control_administrativo_riego_id' => $this->getControlAdministrativoRiegoId(),
        ':surco_id' => $this->getSurcoId(),
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
        $sql = 'UPDATE bda_avance_agua_surco SET aas_deleted_at = now() WHERE aas_item = :id';
        break;
      case false:
        $sql = 'DELETE FROM bda_avance_agua_surco WHERE aas_item = :id';
        break;
      default:
        throw new PDOException('Por favor indique un dato coherente para el borrado lógico (true) o físico (false)');
    }
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return true;
  }

}
