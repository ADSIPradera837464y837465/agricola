<?php

use FStudio\model\base\ordenServicioBaseTable;

/**
 * Description of ordenServicioTable
 *
 * @author nombre completo <su@correo.com>
 * @package FStudio
 * @subpackage model
 * @subpackage table
 * @version 1.0.0
 */
class ordenServicioTable extends ordenServicioBaseTable {

  public function getAll() {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT ors_id AS id, maq_id AS maquina_id, tma_id AS tipo_mantenimiento_id, ter_id_elabora AS tercero_id_elabora, ter_id_realiza AS tercero_id_realiza, ors_fecha AS fecha, ors_observacion AS observacion, ors_created_at AS created_at, ors_updated_at AS updated_at, ors_deleted_at AS deleted_at FROM bda_orden_servicio WHERE ors_deleted_at IS NULL ORDER BY ors_created_at ASC';
    $answer = $conn->prepare($sql);
    $answer->execute();
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }

  public function getById($id = null) {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT ors_id AS id, maq_id AS maquina_id, tma_id AS tipo_mantenimiento_id, ter_id_elabora AS tercero_id_elabora, ter_id_realiza AS tercero_id_realiza, ors_fecha AS fecha, ors_observacion AS observacion, ors_created_at AS created_at, ors_updated_at AS updated_at, ors_deleted_at AS deleted_at FROM bda_orden_servicio WHERE ors_deleted_at IS NULL AND id = :id';
    $params = array(
        ':id' => ($id !== null) ? $id : $this->getId()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }

  public function save() {
    $conn = $this->getConnection($this->config);
    $sql = 'INSERT INTO bda_orden_servicio (maq_id, tma_id, ter_id_elabora, ter_id_realiza, ors_fecha, ors_observacion) VALUES (:maquina_id, :tipo_mantenimiento_id, :tercero_id_elabora, :tercero_id_realiza, :fecha, :observacion)';
    $params = array(
        ':maquina_id' => $this->getMaquinaId(),
        ':tipo_mantenimiento_id' => $this->getTipoMantenimientoId(),
        ':tercero_id_elabora' => $this->getTerceroIdElabora(),
        ':tercero_id_realiza' => $this->getTerceroIdRealiza(),
        ':fecha' => $this->getFecha(),
        ':observacion' => $this->getObservacion()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    $this->setId($conn->lastInsertId(self::_SEQUENCE));
    return true;
  }

  public function update() {
    $conn = $this->getConnection($this->config);
    $sql = 'UPDATE bda_orden_servicio SET maq_id = :maquina_id, tma_id = :tipo_mantenimiento_id, ter_id_elabora = :tercero_id_elabora, ter_id_realiza = :tercero_id_realiza, ors_fecha = :fecha, ors_observacion = :observacion WHERE ors_id = :id';
    $params = array(
        ':maquina_id' => $this->getMaquinaId(),
        ':tipo_mantenimiento_id' => $this->getTipoMantenimientoId(),
        ':tercero_id_elabora' => $this->getTerceroIdElabora(),
        ':tercero_id_realiza' => $this->getTerceroIdRealiza(),
        ':fecha' => $this->getFecha(),
        ':observacion' => $this->getObservacion(),
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
        $sql = 'UPDATE bda_orden_servicio SET ors_deleted_at = now() WHERE ors_id = :id';
        break;
      case false:
        $sql = 'DELETE FROM bda_orden_servicio WHERE ors_id = :id';
        break;
      default:
        throw new PDOException('Por favor indique un dato coherente para el borrado lógico (true) o físico (false)');
    }
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return true;
  }

}
