<?php

/**
 * Description of bitacoraTable
 * @author wilmer andres martinez chamorro <wilmerelmejor94@hotmail.com>
 * @package
 * @subpackage model
 * @subpackage table
 * @version 1.0.0
 */
class ordenEjecusionTable extends ordenEjecusionBaseTable {

  /**
   * obtiene los datos de la tabla}
   * @return type
   */
  public function getAll() {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT ore_id, ter_id_elabora, ors_id, maq_id, ore_fecha, ore_observacion,ore_created_at, ore_updated_at,ore_deleted_at '
            . 'FROM bda_orden_ejecusion ORDER BY ore_created_at ASC';
    $answer = $conn->prepare($sql);
    $answer->execute();
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }

  /**
   * retorna un elemento de la tabla buscando por un id especifico
   * @param integer $id
   * @return [stdClass | boolean]
   */
  public function getById($ore_id = null) {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT ore_id, ter_id_elabora, ors_id, maq_id, ore_fecha, ore_observacion,ore_created_at, ore_updated_at,ore_deleted_at '
            . 'FROM bda_orden_ejecusion '
            . 'AND ore_id = :ore_id';
    $params = array(
        ':ore_id' => ($ore_id !== null) ? $ore_id : $this->getById()
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
      $sql = 'INSERT INTO bda_orden_ejecusion (ore_observacion,ore_created_at, ore_updated_at,ore_deleted_at) VALUES (:ore_observacion,:ore_created_at, :ore_updated_at, :ore_deleted_at)';
      $params = array(
          ':nombre' => $this->getNombre()
      );
      $answer = $conn->prepare($sql);
      $answer->execute($params);
//    return $conn->lastInsertId(self::_SEQUENCE);
      $this->setId($conn->lastInsertId(self::_SEQUENCE));
      return true;
    }

  }

