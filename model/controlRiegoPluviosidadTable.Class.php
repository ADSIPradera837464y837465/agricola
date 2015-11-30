<?php

/**
 * Description of bitacoraTable
 * @author linaVanessaMontaño <linamontano-1995@hotmail.es>
 * @package
 * @subpackage model
 * @subpackage table
 * @version 1.0.0
 */
class controlRiegoPluviosidadTable extends controlRiegoPluviosidadTableBase {

  /**
   * Obtiene todos los datos de la tabla
   * @return [stdClass | boolean]
   */
  public function getAll() {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT crp_id, crp_fecha, crp_hora_inicio, crp_hora_fin, crp_cantidad_m3_hora, crp_observacion, sue_id,hac_id, ter_id, crp_created_at, crp_updated_at, crp_deleted_at FROM controlRiegoPluviosidad WHERE deleted_at IS NULL ORDER BY created_at ASC';
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
    $sql = 'SELECT crp_id, crp_fecha, crp_hora_inicio, crp_hora_fin, crp_cantidad_m3_hora, crp_observacion, sue_id, hac_id, ter_id FROM bitacora AND id = :id';
    $params = array(
        ':id' => ($id !== null) ? $id : $this->getId()
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
    $sql = 'INSERT INTO controlRiegoPLuviosidad (fecha, hora_inicio, hora_fin, cantidad_m3_hora, observacion, sue_id, hac_id, ter_id) VALUES (:fecha, :hora_inicio, :hora_fin, :cantidad_m3_hora, :observacion, :sue_id, :hac_id, :ter_id)';
    $params = array(
        ':fecha' => $this->get(),
        ':hora_inicio' => $this->gethora_inicio(),
        ':hora_fin' => $this->gethoraFin(),
        ':cantidad_m3_hora' => $this->getcantidad_m3_hora(),
        ':observacion' => $this->getobservacion(),
        ':sue_id' => $this->getsueId(),
        ':hac_id' => $this->gethacId(),
        ':ter_id' => $this->getterId(),
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    $this -> setId($conn->lastInsertId(self::_SEQUENCE));
    return true;
  }

  /**
   * Actualiza un registro de la tabla
   * @return boolean
   */
  public function update() {
    $conn = $this->getConnection($this->config);
    $sql = 'UPDATE controlRiegoPluviosidad SET fecha = :fecha, hora_inicio = :hora_inicio, hora_fin = :hora_fin, cantidad_m3_hora = :cantidad_m3_hora, observacion = :observacion, sue_id :sue_id, hac_id :hac_id, :ter_id, ter_id WHERE id = :id';
    $params = array(
        ':fecha' => $this->getfecha(),
        ':hora_inicio' => $this->gethoraInicio(),
        ':hora_fin' => $this->gethoraFin(),
        ':cantidad_m3_hora' => $this->getcantidadM3Hora(),
        ':observacion' => $this->getobservacion(),
        ':sue_id' => $this->getsueId(),
        ':hac_id' => $this->gethacId(),
        ':ter_id' => $this->getterId()
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
    $sql = 'DELETE FROM controlRiegoPluviosidad WHERE id = :id';
    $params = array(
        ':id' => $this->getId()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return true;
  }

}
