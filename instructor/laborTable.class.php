<?php

use FStudio\model\base\laborBaseTable;

/**
 * Description of laborTable
 *
 * @author nombre completo <su@correo.com>
 * @package FStudio
 * @subpackage model
 * @subpackage table
 * @version 1.0.0
 */
class laborTable extends laborBaseTable {

  public function getAll() {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT lab_id AS id, lab_descripcion AS descripcion, lab_valor AS valor, lab_estado AS estado, lab_created_at AS created_at, lab_updated_at AS updated_at, lab_deleted_at AS deleted_at FROM bda_labor WHERE lab_deleted_at IS NULL ORDER BY lab_created_at ASC';
    $answer = $conn->prepare($sql);
    $answer->execute();
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }

  public function getById($id = null) {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT lab_id AS id, lab_descripcion AS descripcion, lab_valor AS valor, lab_estado AS estado, lab_created_at AS created_at, lab_updated_at AS updated_at, lab_deleted_at AS deleted_at FROM bda_labor WHERE lab_deleted_at IS NULL AND id = :id';
    $params = array(
        ':id' => ($id !== null) ? $id : $this->getId()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }

  public function save() {
    $conn = $this->getConnection($this->config);
    $sql = 'INSERT INTO bda_labor (lab_descripcion, lab_valor, lab_estado) VALUES (:descripcion, :valor, :estado)';
    $params = array(
        ':descripcion' => $this->getDescripcion(),
        ':valor' => $this->getValor(),
        ':estado' => $this->getEstado()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    $this->setId($conn->lastInsertId(self::_SEQUENCE));
    return true;
  }

  public function update() {
    $conn = $this->getConnection($this->config);
    $sql = 'UPDATE bda_labor SET lab_descripcion = :descripcion, lab_valor = :valor, lab_estado = :estado WHERE lab_id = :id';
    $params = array(
        ':descripcion' => $this->getDescripcion(),
        ':valor' => $this->getValor(),
        ':estado' => $this->getEstado(),
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
        $sql = 'UPDATE bda_labor SET lab_deleted_at = now() WHERE lab_id = :id';
        break;
      case false:
        $sql = 'DELETE FROM bda_labor WHERE lab_id = :id';
        break;
      default:
        throw new PDOException('Por favor indique un dato coherente para el borrado lógico (true) o físico (false)');
    }
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return true;
  }

}
