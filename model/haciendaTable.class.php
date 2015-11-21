<?php

use FStudio\model\base\haciendaBaseTable;

/**
 * Description of haciendaTable
 * @author Victoria Cortes  <victoriacortes2014@hotmail.com>
 * @package
 * @subpackage model
 * @subpackage table
 * @version 1.0.0
 */
class haciendaTable extends haciendaBaseTable {

  /**
   * muestra todo los datos de la tabla
   * @return type
   */
  public function getAll() {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT hac_id, hac_descripcion, hac_ubicacion, hac_representante_legal, hac_created_at FROM bda_hacienda ORDER BY hac_created_at ASC';
    $answer = $conn->prepare($sql);
    $answer->execute();
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }

  /**
   * retorna un solo dato de la tabla
   * @param type $id
   * @return type
   */
  public function getById($id) {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT hac_id, hac_descripcion, hac_ubicacion, hac_representante_legal,  hac_created_at '
            . 'FROM bda_hacienda '
            . 'AND hac_id = :id';
    $params = array(
        ':id' => $id
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }

  /**
   * guarda el registro de un dato en la tabla
   * @return type
   */
  public function save() {
    $conn = $this->getConnection($this->config);
    $sql = 'INSERT INTO bda_hacienda (hac_descripcion, hac_ubicacion, hac_representante_legal) VALUES (:descripcion, :ubicacion, :representante_legal)';
    $params = array(
        ':descripcion' => $this->getDescripcion(),
        ':ubicacion' => $this->getUbicacion(),
        ':representante_legal' => $this->getRepresentante_legal(),
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return $conn->lastInsertId(self::_SEQUENCE);
  }

  /**
   * atualiza un registro de la tabla
   * @return boolean
   */
  public function update() {
    $conn = $this->getConnection($this->config);
    $sql = 'UPDATE bda_hacienda SET hac_descripcion = :descripcion, hac_ubicacion = :ubicacion, hac_representante_legal = :representante_legal, WHERE hac_id = :id';
    $params = array(
        ':descripcion' => $this->getDescripcion(),
        ':ubicacion' => $this->getUbicacion(),
        ':representante_legal' => $this->getRepresentante_legal(),
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return true;
  }

  /**
   * borra de forma logica o fisica un registro de una tabla
   * @return boolean
   */
  public function delete() {
    $conn = $this->getConnection($this->config);
    $sql = 'DELETE FROM bda_hacienda WHERE hac_id = :id';
    $params = array(
        ':id' => $this->getId()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return true;
  }

}
