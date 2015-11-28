
<?php

use FStudio\model\base\implementoTableBase;

/**
 * clase para manejar la tabla implemento
 * @author maribel zamora <mazagi86@hotmail.com>
 * @package fStudio
 * @subpackage model
 * @subpackage table
 * @version 1.0.0
 */
class implementoTable extends implementoTableBase {

  /**
   * obtiene todos los datos de la tabla
   * @version 1.0.0
   * @return [stdClass | boolean]
   */
  public function getAll() {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT imp_id, imp_descripcion,imp_created_at, imp_updated_at, imp_deleted_at
    FROM bda_implemento ORDER BY created_at ASC';
    $answer = $conn->prepare($sql);
    $answer->execute();
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) :
            false;
  }

  /**
   * retorna un elemento de la tabla buscado por un id especifico
   * @version 1.0.0
   * @param integer $id
   *  @return [stdClass | boolean]
   */
  public function getById($id = null) {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT imp_id, imp_descripcion, imp_created_at, imp_updated_at, imp_deleted_at '
            . 'FROM bda_implemento WHERE deleted_at IS NULL '
            . 'AND id = :id';
    $params = array(
        ':id' => ($id !== null) ? $id : $this->getId()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) :
            false;
  }

  /**
   * registra los datos en la tabla
   * @version 1.0.0
   * @return integer
   */
  public function save() {
    $conn = $this->getConnection($this->config);
    $sql = 'INSERT INTO bda_implemento (imp_descripcion) VALUES (:usuario_id, :ip_address, :hash_cookie)';
    $params = array(
        ':descripcion' => $this->getDescripcion(),
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    $this->setId($conn->lastInsertId(self::SEQUENCE));
    return true;
  }

  /**
   * actualiza un registro en la tabla
   * @version 1.0.0
   * @return [stdClass | boolean]
   */
  public function update() {
    $conn = $this->getConnection($this->config);
    $sql = 'UPDATE bda_implemento SET imp_descripcion = :descripcion,
    WHERE imp_id = :id';
    $params = array(
        ':id' => $this->getId()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return true;
  }

  /**
   * borrar en forma logica o fisica un registro de la tabla
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
        $sql = 'UPDATE bda_implemento SET imp_deleted_at = now() WHERE imp_id = :id';
        break;
      case false:
        $sql = 'DELETE FROM bda_implemento WHERE imp_id = :id';
        break;
      default:
        throw new PDOException('indique un dato coherente para el borrado  (true) o físico (false)');
    }
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return true;
  }

}
