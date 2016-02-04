<?php

use FStudio\model\base\controlRiegoPluviosidadBaseTable;

/**
 * Description of controlRiegoPluviosidadTable
 *
 * @author nombre completo <su@correo.com>
 * @package FStudio
 * @subpackage model
 * @subpackage table
 * @version 1.0.0
 */
class controlRiegoPluviosidadTable extends controlRiegoPluviosidadBaseTable {

  public function getAll() {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT crp_id AS id, crp_fecha AS fecha, crp_hora_inicio AS hora_inicio, crp_hora_fin AS hora_fin, crp_cantidad_m3_hora AS cantidad_m3_hora, crp_observacion AS observacion, sue_id AS suerte_id, hac_id AS hacienda_id, ter_id AS tercero_id, crp_created_at AS created_at, crp_updated_at AS updated_at, crp_deleted_at AS deleted_at FROM bda_control_riego_pluviosidad WHERE crp_deleted_at IS NULL ORDER BY crp_created_at ASC';
    $answer = $conn->prepare($sql);
    $answer->execute();
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }

  public function getById($id = null) {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT crp_id AS id, crp_fecha AS fecha, crp_hora_inicio AS hora_inicio, crp_hora_fin AS hora_fin, crp_cantidad_m3_hora AS cantidad_m3_hora, crp_observacion AS observacion, sue_id AS suerte_id, hac_id AS hacienda_id, ter_id AS tercero_id, crp_created_at AS created_at, crp_updated_at AS updated_at, crp_deleted_at AS deleted_at FROM bda_control_riego_pluviosidad WHERE crp_deleted_at IS NULL AND id = :id';
    $params = array(
        ':id' => ($id !== null) ? $id : $this->getId()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }

  public function save() {
    $conn = $this->getConnection($this->config);
    $sql = 'INSERT INTO bda_control_riego_pluviosidad (crp_fecha, crp_hora_inicio, crp_hora_fin, crp_cantidad_m3_hora, crp_observacion, sue_id, hac_id, ter_id) VALUES (:fecha, :hora_inicio, :hora_fin, :cantidad_m3_hora, :observacion, :suerte_id, :hacienda_id, :tercero_id)';
    $params = array(
        ':fecha' => $this->getFecha(),
        ':hora_inicio' => $this->getHoraInicio(),
        ':hora_fin' => $this->getHoraFin(),
        ':cantidad_m3_hora' => $this->getCantidadM3Hora(),
        ':observacion' => $this->getObservacion(),
        ':suerte_id' => $this->getSuerteId(),
        ':hacienda_id' => $this->getHaciendaId(),
        ':tercero_id' => $this->getTerceroId()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    $this->setId($conn->lastInsertId(self::_SEQUENCE));
    return true;
  }

  public function update() {
    $conn = $this->getConnection($this->config);
    $sql = 'UPDATE bda_control_riego_pluviosidad SET crp_fecha = :fecha, crp_hora_inicio = :hora_inicio, crp_hora_fin = :hora_fin, crp_cantidad_m3_hora = :cantidad_m3_hora, crp_observacion = :observacion, sue_id = :suerte_id, hac_id = :hacienda_id, ter_id = :tercero_id WHERE crp_id = :id';
    $params = array(
        ':fecha' => $this->getFecha(),
        ':hora_inicio' => $this->getHoraInicio(),
        ':hora_fin' => $this->getHoraFin(),
        ':cantidad_m3_hora' => $this->getCantidadM3Hora(),
        ':observacion' => $this->getObservacion(),
        ':suerte_id' => $this->getSuerteId(),
        ':hacienda_id' => $this->getHaciendaId(),
        ':tercero_id' => $this->getTerceroId(),
        ':id' => $this->getId()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return true;
  }

  public function delete($deleteLogical = true) {
    $conn = $this->getConnection($this->config);
    $params = array(
        ':id' => $this->getId()
    );
    switch ($deleteLogical) {
      case true:
        $sql = 'UPDATE bda_control_riego_pluviosidad SET crp_deleted_at = now() WHERE crp_id = :id';
        break;
      case false:
        $sql = 'DELETE FROM bda_control_riego_pluviosidad WHERE crp_id = :id';
        break;
      default:
        throw new PDOException('Por favor indique un dato coherente para el borrado lógico (true) o físico (false)');
    }
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return true;
  }

}
