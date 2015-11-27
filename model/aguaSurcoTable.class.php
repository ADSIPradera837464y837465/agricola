<?php

use FStudio\model\base\aguaSurcoTableBase;
/**
 * Description of aguaSurcoTable
 * @author Johanna G <ladyjkaulitz@hotmail.com>
 * @package
 * @subpackage model
 * @subpackage table
 * @version 1.0.0
 */
class aguaSurcoTable extends aguaSurcoTableBase { 
  
  /**
   * Obtiene todos los datos de la tabla
   * @version 1.0.0
   * @return [stdClass|boolean]
   */
  
  public function getAll() {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT deaas_id, deaas_item, deaas_cantidad_surco, fore_num_documento,created_at, updated_at,  deleted_at FROM aguaSurco ORDER BY created_at ASC';
    $answer = $conn->prepare($sql);
    $answer->execute();
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
}

  /**
   * Retorna un elemento de la tabla buscado por un ID especifico
   * @version 1.0.0
   * @param integer $id 
   * @return mixed [stdClass | boolean]
   */

 public function getById($id) {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT deaas_id, deaas_item, deaas_cantidad_surco, fore_num_documento,created_at, updated_at,  deleted_at '
            . 'FROM aguaSurco '
            . 'AND deaas_id = :deaas_id';
    $params = array(
        ':deaas_id' => ($id !==null)? $id:
            $this->getById()
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
    $sql = 'INSERT INTO aguaSurco (deaas_item, deaas_cantidad_surco,fore_num_documento) VALUES (:deaas_item, :deaas_cantidad_surco, :fore_num_documento)';
    $params = array(
        ':deaas_item' => $this->getItem(),
        ':deaas_cantidad_surco' => $this->getCantidadSurco(),
        ':fore_num_documento' => $this->getNumDocumento(),
       
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    $this->setId ($conn->lastInsertId(self::_SEQUENCE));
    return true;
  }
  
  /**
   * Actualiza o modifica un registro de la tabla
   * @version 1.0.0
   * @return boolean
   */
public function update() {
    $conn = $this->getConnection($this->config);
    $sql = 'UPDATE aguaSurco SET deaas_item = :deaas_item, deaas_cantidad_surco = :deaas_cantidad_surco, fore_num_documento = :fore_num_documento WHERE deaas_id = :deaas_id';
    $params = array(
     ':deaas_item' => $this->getItem(),
        ':deaas_cantidad_surco' => $this->getCantidadSurco(),
        ':fore_num_documento' => $this->getNumDocumento(),
        ':deaas_id' => $this->getId()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return true;
  }
  
  
  /**
   * Borra en forma logica o fisica un registro de la tabla
   * @version 1.0.0
   * @param boolean $deleteLogical
   * @return boolean
   * @throws PDOException
   */
  
    public function delete() {
    $conn = $this->getConnection($this->config);
    $sql = 'DELETE FROM aguaSurco WHERE deaas_id = :deaas_id';
    $params = array(
        ':deaas_id' => $this->getId()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return true;
  }
  }