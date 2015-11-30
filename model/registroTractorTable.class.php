<?php

use FStudio\model\base\productoBaseTable;

/**
 * Description of registroTractorTable
 * @author yuri adriana hurtado rojas <yurodri.1996@gmail.com>
 * @package
 * @subpackage model
 * @subpackage table
 * @version 1.0.0
 */
class registroTractor extends registroTractorBaseTable {
  /**
   * Obtiene todos los datos de la tabla
   * @return [stdClass | boolean]
   */

  public function getAll() {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT rt_item, csc_id, rt_horaSalida, rt_tractor, rt_observacion, rt_tabla, rt_created_at, rt_update_at, rt_deleted_at FROM registroTractor ORDER BY rt_created_at, rt_updated_at, rt_deletyed_at ASC';
    $answer = $conn->prepare($sql);
    $answer->execute();
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }
   /**
   * Retorna un elemento de la tabla buscado por un id especifico
   * @param integer $id
   * @return [stdClass | boolean]
   */

  public function getById($item = null) {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT rt_item, csc_id, rt_horaSalida, rt_tractor, rt_observacion, rt_tabla, rt_created_at,rt_ updated_at, rt_deleted_at '
            . 'FROM registroTractor '
            . 'AND rt_item = :rt_item';
    $params = array(
        ':rt_item' => ($item !== null) ? $item: $this->getByItem()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }
   /**
   * Registra los datos del objeto en la tabla
   * @return integer
   */

  public function save() {
    $conn = $this->getConnection($this->config);
    $sql = 'INSERT INTO registroTractor (rt_horaSalida, rt_tractor, rt_observacion, rt_tabla ) VALUES (:rt_horaSalida, :rt_tractor, :rt_observacion, :rt_tabla, )';
    $params = array(
        ':rt_horaSalida' => $this->gethoraSalida(),
        ':rt_tractor' => $this->gettractor(),
        ':rt_observacion' => $this->getObservacion(),
        ':tabla' => $this->getTabla(),
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    $this ->setItem ($conn->lastInsertItem(self::_SEQUENCE));
    return true;
  }
   /**
   * Actualiza un registro de la tabla
   * @return boolean
   */

  public function update() {
    $conn = $this->getConnection($this->config);
    $sql = 'UPDATE registroTractor SET rt_horaSalida = :rt_horaSalida, rt_tractor = :rt_tractor, rt_observacion = :rt_observacion, rt_tabla = :rt_tabla,  WHERE rt_item = :rt_item';
    $params = array(
        ':rt_horaSalisa' => $this->gethoraSalida(),
        ':rt_tractor' => $this->gettractor(),
        ':rt_observacion' => $this->getObservacion(),
        ':tabla' => $this->getTabla(),
        ':rt_item' => $this->getItem()
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

  public function delete() {
    $conn = $this->getConnection($this->config);
    $sql = 'DELETE FROM registroTractor WHERE rt_item = :rt_item';
    $params = array(
        ':rt_item' => $this->getIem()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return true;
  }

}
