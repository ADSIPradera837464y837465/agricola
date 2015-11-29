<?php

use FStudio\model\base\unidadMedidaTableBase;

/**
 * clase para manejar la tabla unidadMedida
 * Description of unidadMedidaTable
 *  @author Angela Cardona Molina <angela04cardona@hotmail.com>
 * @package FStudio
 * @subpackage model
 * @subpackage table
 * @version 1.0.0
 */
class unidadMedidaTable extends unidadMedidaTableBase {

  /**
   * Obtiene todos los datos de la tabla
   *  @version 1.0.0
   * @return @return [stdClass | boolean]
   */
  public function getAll() {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT unm_id, unm_descripcion, created_at FROM unidad_medida ORDER BY created_at ASC';
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
    $sql = 'SELECT unm_id AS id, unm_descripcion AS descripcion, unm_created_at AS createdAt, unm_updated_at AS updatedAt, unm_deleted_at AS deletedAt FROM bda_unidad_medida WHERE unm_deleted_at IS NULL ORDER BY unm_created_at ASC';
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
    $sql = 'INSERT INTO unidad_medida (unm_descripcion) VALUES (:unm_descripcion)';
    $params = array(
        ':unm_descripcion' => $this->getDescripcion(),
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
    $sql = 'UPDATE unidad_medida SET unm_descripcion =:unm_descripcion)';
    $params = array(
        ':unm_descripcion' => $this->getDescripcion(),
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
        ':unm_id' => $this->getId()
    );
    switch ($deleteLogical) {
      case true:
        $sql = 'UPDATE bda_unidad_medida SET unm_deleted_at = now() WHERE unm_id = :id';
        break;
      case false:
        $sql = 'DELETE FROM bda_unidad_medida WHERE unm_id = :id';
        break;
      default:
        throw new PDOException('Por favor indique un dato coherente para el borrado lógico (true) o físico (false)');
    }
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return true;
  }

}
