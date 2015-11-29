<?php

use FStudio\model\base\laborTableBase;

/**
 * Clase para manejar la tabla labor
 * @author Emanuel Castillo Mosquera <corcel125@outlook.com>
 * @package FStudio
 * @subpackage model
 * @subpackage table 
 * @version 1.0.0
 */
class laborTable extends laborTableBase {

  /**
   * Obtiene todos los datos de la tabla
   * @version 1.0.0
   * @return mixed [stdClass | boolean]
   */
  public function getAll() {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT lab_id AS id, lab_descripcion AS descripcion, lab_valor AS valor, lab_estado AS estado,lab_created_at AS createdAt,lab_updated_at AS updatedAt,lab_deleted_at AS deletedAt FROM bda_labor WHERE lab_deleted_at IS NULL ORDER BY pro_created_at ASC';
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
    $sql = 'SELECT lab_id AS id, lab_descripcion AS descripcion, lab_valor AS valor, lab_estado AS estado,lab_created_at AS createdAt,lab_updated_at'
            . 'FROM bda_labor WHERE lab_deleted_at IS NULL '
            . 'AND lab_id = :id';
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
    $sql = 'INSERT INTO bda_labor (lab_descripcion, lab_valor, lab_estado) VALUES (:descripcion, :valor, :estado)';
    $params = array(
        ':descripcion' => $this->getDescripcion(),
        ':tipo_producto' => $this->getValor(),
        ':marca' => $this->getEstado()        
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
    $sql = 'UPDATE bda_labor SET lab_descripcion = :descripcion,lab_valor = :valor, lab_estado = :estado WHERE lab_id = :id';
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
