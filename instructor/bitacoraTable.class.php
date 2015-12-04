<?php

use FStudio\model\base\bitacoraBaseTable;

/**
 * Description of bitacoraTable
 *
 * @author nombre completo <su@correo.com>
 * @package FStudio
 * @subpackage model
 * @subpackage table
 * @version 1.0.0
 */
class bitacoraTable extends bitacoraBaseTable {

  public function getAll() {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT bit_id AS id, usr_id AS usuario_id, bit_accion AS accion, bit_tabla AS tabla, bit_registro AS registro, bit_observacion AS observacion, bit_fecha AS fecha FROM bda_bitacora ORDER BY bit_fecha ASC';
    $answer = $conn->prepare($sql);
    $answer->execute();
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }

  public function getById($id = null) {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT bit_id AS id, usr_id AS usuario_id, bit_accion AS accion, bit_tabla AS tabla, bit_registro AS registro, bit_observacion AS observacion, bit_fecha AS fecha FROM bda_bitacora AND id = :id';
    $params = array(
        ':id' => ($id !== null) ? $id : $this->getId()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }

  public function save() {
    $conn = $this->getConnection($this->config);
    $sql = 'INSERT INTO bda_bitacora (usr_id, bit_accion, bit_tabla, bit_registro, bit_observacion) VALUES (:usuario_id, :accion, :tabla, :registro, :observacion)';
    $params = array(
        ':usuario_id' => $this->getUsuarioId(),
        ':accion' => $this->getAccion(),
        ':tabla' => $this->getTabla(),
        ':registro' => $this->getRegistro(),
        ':observacion' => $this->getObservacion()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    $this->setId($conn->lastInsertId(self::_SEQUENCE));
    return true;
  }

  public function update() {
    $conn = $this->getConnection($this->config);
    $sql = 'UPDATE bda_bitacora SET usr_id = :usuario_id, bit_accion = :accion, bit_tabla = :tabla, bit_registro = :registro, bit_observacion = :observacion WHERE bit_id = :id';
    $params = array(
        ':usuario_id' => $this->getUsuarioId(),
        ':accion' => $this->getAccion(),
        ':tabla' => $this->getTabla(),
        ':registro' => $this->getRegistro(),
        ':observacion' => $this->getObservacion(),
        ':id' => $this->getId()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return true;
  }

  public function delete() {
    $conn = $this->getConnection($this->config);
    $sql = 'DELETE FROM bda_bitacora WHERE bit_id = :id';
    $params = array(
        ':id' => $this->getId()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return true;
  }

}
