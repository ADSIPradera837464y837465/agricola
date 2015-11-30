<?php

use FStudio\model\base\terceroBaseTable;

/**
 * Description of terceroTable
 * @author Duvier Marin Escobar <duvierm24@gmail.com>
 * @package 
 * @subpackage model
 * @subpackage base
 * @version 1.0.0
 */
class terceroTable extends terceroBaseTable {

  /**
   * Obtiene todos los datos de la tabla
   * @return mixed [stdClass | boolean]
   */
  public function getAll() {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT ter_id, ter_nombre,ter_apellido,ter_telefono,ter_direccion,ter_correo,tit_id,car_id,tpi_id, created_at, updated_at, deleted_at FROM dba_tercero WHERE deleted_at IS NULL ORDER BY created_at ASC';
    $answer = $conn->prepare($sql);
    $answer->execute();
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }

  /**
   * Retorna un elemento de la tabla buscado por un id especifico
   * @param integer $id
   * @return mixed [stdClass | boolean]
   */
  public function getById($id = null) {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT ter_id, ter_nombre,ter_apellido,ter_telefono,ter_direccion,ter_correo,ter_correo,tit_id,car_id,tpi_id,created_at, updated_at, deleted_at FROM dba_tercero WHERE deleted_at IS NULL '
            . 'AND ter_id = :id';
    $params = array(        
        ':id' => ($id !== null) ? $id : $this->getId()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    $this->setId($conn->lastInsertId(self::_SEQUENCE));
    return true;
  }

  /**
   * Registra los datos del objeto en la tabla
   * @return boolean
   */
  public function save() {
    $conn = $this->getConnection($this->config);
    $sql = 'INSERT INTO dba_tercero (ter_nombre,ter_apellido,ter_telefono,ter_direccion,ter_correo) VALUES (:nombre,:apellido,:telefono,:direccion,:correo)';
    $params = array(
        ':nombre' => $this->getNombre(),
        ':apellido' => $this->getApellido(),
        ':telefono' => $this->getTelefono(),
        ':direccion' => $this->getDireccion(),
        ':correo' => $this->getCorreo(),
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return $conn->lastInsertId(self::_SEQUENCE);
  }

  /**
   * Actualiza un registro de la tabla
   * @return boolean
   */
  public function update() {
    $conn = $this->getConnection($this->config);
    $sql = 'UPDATE dba_tercero SET ter_nombre = :nombre,ter_apellido = :apellido,ter_telefono = :telefono, ter_direccion = :direccion, ter_correo = :correo   WHERE id = :id';
    $params = array(
        ':id' => $this->getId(),
        ':nombre' => $this->getNombre(),
        ':apellido' => $this->getApellido(),
        ':telefono' => $this->getTelefono(),
        ':direccion' => $this->getDireccion(),
        ':correo' => $this->getCorreo(),
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return true;
  }

  /**
   * Borra en forma logica o fisica un registro de la tabla
   * @param boolean $deleteLogical
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
        $sql = 'UPDATE dba_tercero SET deleted_at = now() WHERE id = :id';
        break;
      case false:
        $sql = 'DELETE FROM dba_tercero WHERE id = :id';
        break;
      default:
        throw new PDOException('Por favor indique un dato coherente para el borrado lógico o físico');
    }
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return true;
  }

}
