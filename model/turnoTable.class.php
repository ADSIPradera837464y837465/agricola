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
class turno extends turnoBaseTable {

  /**
   * Obtiene todos los datos de la tabla
   * @return [stdClass | boolean]
   */
  public function getAll() {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT tur_id, tur_descripcion, tur_hora_inicio, tur_hora_fin, tur_estado, tur_tabla, tur_created_at, tur_update_at, tur_deleted_at FROM Turno ORDER BY tur_created_at, tur_updated_at, tur_deleted_at ASC';
    $answer = $conn->prepare($sql);
    $answer->execute();
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }

  /**
   * Retorna un elemento de la tabla buscado por un id especifico
   * @param integer $id
   * @return [stdClass | boolean]
   */
  public function getById($id = null) {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT tur_id, tur_descripcion, tur_horaInicio, tur_horaFin, tur_estado, tur_tabla, tur_created_at, tur_updated_at, tur_deleted_at '
            . 'FROM Turno '
            . 'AND tur_id = :tur_id';
    $params = array(
        ':tur_id' => ($id !== null) ? $id : $this->getById()
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
    $sql = 'INSERT INTO turno (tur_descripcion, tur_horaInicio, tur_horaFin, tur_estado,rt_tabla ) VALUES (:rt_horaSalida, :rt_horaFin, :rt_tractor, :rt_observacion, :rt_tabla, )';
    $params = array(
        ':tur_descripcion' => $this->getDescripcion(),
        ': tur_horaInicio' => $this->getHora_inicio(),
        ':tur_horaFin' => $this->getHora_fin(),
        ':tur_estado' => $this->getEstado(),
        ':tur_tabla' => $this->getTabla(),
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    $this -> setId ($conn->lastInsertId(self::_SEQUENCE));
    return true;
  }

  /**
   * Actualiza un registro de la tabla
   * @return boolean
   */
  public function update() {
    $conn = $this->getConnection($this->config);
    $sql = 'UPDATE turno SET  = tur_descripcion:tur_descripcion,  = tur_horaInicio:tur_horaInicio, tur_horaFin:, tur_horaFin,,  = tur_estado:tur_estado, tur_tabla = :tur_tabla,  WHERE tur_id = :tur_id';
    $params = array(
        ':tur_descripcion' => $this->getDescripcion(),
        ':tur_horaInicio' => $this->getHora_inicio(),
        ':tur_horaFin' => $this->getHora_fin(),
        ':tur_tabla' => $this->getTabla(),
        ':tur_id' => $this->getId()
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
    $sql = 'DELETE FROM turno WHERE tur_id = :tur_id';
    $params = array(
        ':tur_id' => $this->getId()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return true;
  }

}
