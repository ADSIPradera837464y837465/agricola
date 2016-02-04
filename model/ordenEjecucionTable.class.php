<?php

/**
 * Description of bitacoraTable
 * @author wilmer andres martinez chamorro <wilmerelmejor94@hotmail.com>
 * @package
 * @subpackage model
 * @subpackage table
 * @version 1.0.0
 */
class ordenEjecucionTable extends ordenEjecucionBaseTable {

  /**
   * Obtiene todos los datos de la tabla
   * @version 1.0.0
   * @return mixed [stdClass | boolean]
   */
  public function getAll() {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT ore_id, ter_id_elabora, ors_id, maq_id, ore_fecha, ore_observacion,ore_created_at, ore_updated_at,ore_deleted_at '
            . 'FROM bda_orden_ejecusion WHERE ore_deleted_at IS NULL ORDER BY ore_created_at ASC';
    $answer = $conn->prepare($sql);
    $answer->execute();
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }

  /**
   * Retorna un elemento de la tabla buscado por un ID especifico
   * @version 1.0.0
   * @param integer $ore_id ID a buscar
   * @return mixed [stdClass | boolean]
   */
  public function getById($ore_id = null) {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT ore_id, ter_id_elabora, ors_id, maq_id, ore_fecha, ore_observacion,ore_created_at, ore_updated_at,ore_deleted_at '
            . 'FROM bda_orden_ejecusion WHERE ore_deleted_at IS NULL '
            . 'AND ore_id = :id';
    $params = array(
        ':ore_id' => $ore_id
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }

  /**
   * registra los datos del objeto en la tabla
   * @return integer
   */
  public function save() {
    $conn = $this->getConnection($this->config);
    $sql = 'INSERT INTO bda_orden_ejecusion (ore_id, ter_id_elabora, ors_id, maq_id, ore_fecha, ore_observacion) VALUES (:ore_id, :ter_id_elabora, :ors_id, :maq_id, :ore_fecha, :ore_observacion)';
    $params = array(
        ':ore_id' => $this->getOreObservacion(),
        ':ter_id_elabora' => $this->getOreCreate(),
        ':ors_id' => $this->getOrsId(),
        ':maq_id' => $this->getMaqId(),
        ':ore_fecha' => $this->getOreFecha(),
        ':ore_observacion' => $this->getOreObservacion()
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
    $sql = 'UPDATE bda_orden_ejecusion SET ore_id = :ore_id, ter_id_elabora = :ter_id_elabora, ors_id = :ors_id, maq_id = :maq_id, ore_fecha = :ore_fecha, ore_observacion = :ore_observacion, ore_create_at = :ore_create_at, ore_update_at = :ore_update_at, ore_deleted_at = :ore_deleted_at  WHERE id = :ore_id';
    $params = array(
        ':ore_id' => $this->getOreObservacion(),
        ':ter_id_elabora' => $this->getOreCreate(),
        ':ors_id' => $this->getOrsId(),
        ':maq_id' => $this->getMaqId(),
        ':ore_fecha' => $this->getOreFecha(),
        ':ore_observacion' => $this->getOreObservacion(),
        ':ore_id' => $this->getOreId()
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
        ':ore_id' => $this->getId()
    );

    switch ($deleteLogical) {
      case true:
        $sql = 'UPDATE bda_orden_ejecucion SET ore_deleted_at = now() WHERE ore_id = :id';
        break;
      case false:
        $sql = 'DELETE FROM bda_producto WHERE ore_id = :id';
        break;
      default:
        throw new PDOException('Por favor indique un dato coherente para el borrado lógico (true) o físico (false)');
    }
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return true;
  }

}
