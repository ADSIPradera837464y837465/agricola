<?php

use FStudio\model\base\metodoRiegoBaseTable;

/**
 * Description of metodoRiegoTable
 * 
 * @author Mariam Montaño <nichesitap@hotmail.com>
 * @package FStudio
 * @subpackage model
 * @subpackage table
 * @version 1.0.0
 */
class metodoRiegoTable extends metodoRiegoBaseTable {

  public function getAll() {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT met_rie_id AS id, met_rie_descripcion AS descripcion, met_created_at AS created_at, met_updated_at AS updated_at, met_deleted_at AS deleted_at FROM bda_metodo_riego WHERE met_deleted_at IS NULL ORDER BY met_created_at ASC';
    $answer = $conn->prepare($sql);
    $answer->execute();
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }

  public function getById($id = null) {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT met_rie_id AS id, met_rie_descripcion AS descripcion, met_created_at AS created_at, met_updated_at AS updated_at, met_deleted_at AS deleted_at FROM bda_metodo_riego WHERE met_deleted_at IS NULL AND met_rie_id = :id';
    $params = array(
        ':id' => ($id !== null) ? $id : $this->getId()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }

  public function save() {
    $conn = $this->getConnection($this->config);
    $sql = 'INSERT INTO bda_metodo_riego (met_rie_descripcion) VALUES (:descripcion)';
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
    $sql = 'UPDATE bda_metodo_riego SET met_rie_descripcion = :descripcion WHERE met_rie_id = :id';
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
        $sql = 'UPDATE bda_metodo_riego SET met_deleted_at = now() WHERE met_rie_id = :id';
        break;
      case false:
        $sql = 'DELETE FROM bda_metodo_riego WHERE met_rie_id = :id';
        break;
      default:
        throw new PDOException('Por favor indique un dato coherente para el borrado lógico (true) o físico (false)');
    }
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return true;
  }

}
