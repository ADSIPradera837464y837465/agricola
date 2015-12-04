<?php

use FStudio\model\base\ordenEjecucionBaseTable;

/**
 * Description of ordenEjecucionTable
 *
 * @author nombre completo <su@correo.com>
 * @package FStudio
 * @subpackage model
 * @subpackage table
 * @version 1.0.0
 */
class ordenEjecucionTable extends ordenEjecucionBaseTable {

  public function getAll() {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT ore_id AS id, ter_id_elabora AS tercero_id_elabora, ors_id AS orden_salida_id, maq_id AS maquina_id, ore_fecha AS fecha, ore_observacion AS observacion, ore_created_at AS created_at, ore_updated_at AS updated_at, ore_deleted_at AS deleted_at FROM bda_orden_ejecucion WHERE ore_deleted_at IS NULL ORDER BY ore_created_at ASC';
    $answer = $conn->prepare($sql);
    $answer->execute();
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }

  public function getById($id = null) {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT ore_id AS id, ter_id_elabora AS tercero_id_elabora, ors_id AS orden_salida_id, maq_id AS maquina_id, ore_fecha AS fecha, ore_observacion AS observacion, ore_created_at AS created_at, ore_updated_at AS updated_at, ore_deleted_at AS deleted_at FROM bda_orden_ejecucion WHERE ore_deleted_at IS NULL AND id = :id';
    $params = array(
        ':id' => ($id !== null) ? $id : $this->getId()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }

  public function save() {
    $conn = $this->getConnection($this->config);
    $sql = 'INSERT INTO bda_orden_ejecucion (ter_id_elabora, ors_id, maq_id, ore_fecha, ore_observacion) VALUES (:tercero_id_elabora, :orden_salida_id, :maquina_id, :fecha, :observacion)';
    $params = array(
        ':tercero_id_elabora' => $this->getTerceroIdElabora(),
        ':orden_salida_id' => $this->getOrdenSalidaId(),
        ':maquina_id' => $this->getMaquinaId(),
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
    $sql = 'UPDATE bda_orden_ejecucion SET ter_id_elabora = :tercero_id_elabora, ors_id = :orden_salida_id, maq_id = :maquina_id, ore_fecha = :fecha, ore_observacion = :observacion WHERE ore_id = :id';
    $params = array(
        ':tercero_id_elabora' => $this->getTerceroIdElabora(),
        ':orden_salida_id' => $this->getOrdenSalidaId(),
        ':maquina_id' => $this->getMaquinaId(),
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
        $sql = 'UPDATE bda_orden_ejecucion SET ore_deleted_at = now() WHERE ore_id = :id';
        break;
      case false:
        $sql = 'DELETE FROM bda_orden_ejecucion WHERE ore_id = :id';
        break;
      default:
        throw new PDOException('Por favor indique un dato coherente para el borrado lógico (true) o físico (false)');
    }
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return true;
  }

}
