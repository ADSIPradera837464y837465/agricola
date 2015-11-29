<?php

use FStudio\model\base\tipoDocumentoBaseTable;

/**
 * clase para manejar la tabla tipoDocumento
 * Description of tipoProductoTable
 *  @author Angela Cardona Molina <angela04cardona@hotmail.com>
 * @package FStudio
 * @subpackage model
 * @subpackage table
 * @version 1.0.0
 */
class tipoProductoTable extends tipoDocumentoBaseTable {

  /**
   * Obtiene todos los datos de la tabla
   *  @version 1.0.0
   * @return @return [stdClass | boolean]
   */
  public function getAll() {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT tpr_id, tpr_descripcion, created_at FROM tipoProductoTable ORDER BY created_at ASC';
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
    $sql = 'SELECT tpr_id, tpr_descripcion, created_at, update_at, deleted_at '
            . 'FROM tipoProducto '
            . 'AND id = :id';
    $params = array(
        ':mar_id' => ($id !== null) ? $id : $this->getId()
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
    $sql = 'INSERT INTO tipoProducto (tpr_descripcion) VALUES (:tpr_descripcion)';
    $params = array(
        ':tpr_descripcion' => $this->getDescripcion(),
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
    $sql = 'UPDATE tipProducto SET tpr_descripcion =:tpr_descripcion)';
    $params = array(
        ':tpr_descripcion' => $this->getDescripcion(),
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
        ':tpr_id' => $this->getId()
    );
    switch ($deleteLogical) {
      case true:
        $sql = 'UPDATE bda_tipo_producto SET tpr_deleted_at = now() WHERE tpr_id = :id';
        break;
      case false:
        $sql = 'DELETE FROM bda_tipo_producto WHERE tpr_id = :id';
        break;
      default:
        throw new PDOException('Por favor indique un dato coherente para el borrado lógico (true) o físico (false)');
    }
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return true;
  }

}
