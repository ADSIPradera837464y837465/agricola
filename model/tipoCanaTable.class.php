<?php

use FStudio\model\base\tipoCanaBaseTable;

/**
 * Description of tipoCanaTable
 * 
 * @author Julian Andrés Lasso Figueroa <ingeniero.julianlasso@gmail.com>
 * @package FStudio
 * @subpackage model
 * @subpackage table
 * @version 1.0.0
 */
class tipoCanaTable extends tipoCanaBaseTable {

  public function getAll() {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT tic_id AS id, tic_descripcion AS descripcion, tic_created_at AS created_at, tic_updated_at AS updated_at, tic_deleted_at AS deleted_at FROM bda_tipo_cana WHERE tic_deleted_at IS NULL ORDER BY tic_created_at ASC';
    $answer = $conn->prepare($sql);
    $answer->execute();
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }

  public function getById($id = null) {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT tic_id AS id, tic_descripcion AS descripcion, tic_created_at AS created_at, tic_updated_at AS updated_at, tic_deleted_at AS deleted_at FROM bda_tipo_cana WHERE tic_deleted_at IS NULL AND id = :id';
    $params = array(
        ':id' => ($id !== null) ? $id : $this->getId()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }

  public function save() {
    $conn = $this->getConnection($this->config);
    $sql = 'INSERT INTO bda_tipo_cana (tic_descripcion) VALUES (:descripcion)';
    $params = array(
        ':descripcion' => $this->getDescripcion()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    $this->setId($conn->lastInsertId(self::_SEQUENCE));
    return true;
  }

  public function update() {
    $conn = $this->getConnection($this->config);
    $sql = 'UPDATE bda_tipo_cana SET tic_descripcion = :descripcion WHERE tic_id = :id';
    $params = array(
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
        $sql = 'UPDATE bda_tipo_cana SET tic_deleted_at = now() WHERE tic_id = :id';
        break;
      case false:
        $sql = 'DELETE FROM bda_tipo_cana WHERE tic_id = :id';
        break;
      default:
        throw new PDOException('Por favor indique un dato coherente para el borrado lógico (true) o físico (false)');
    }
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return true;
  }

}
