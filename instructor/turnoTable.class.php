<?php

use FStudio\model\base\turnoBaseTable;

/**
 * Description of turnoTable
 *
 * @author nombre completo <su@correo.com>
 * @package FStudio
 * @subpackage model
 * @subpackage table
 * @version 1.0.0
 */
class turnoTable extends turnoBaseTable {

  public function getAll() {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT tur_id AS id, tur_descripcion AS descripcion, tur_hora_inicio AS hora_inicio, tur_hora_fin AS hora_fin, tur_estado AS estado, tur_created_at AS created_at, tur_updated_at AS updated_at, tur_deleted_at AS deleted_at FROM bda_turno WHERE tur_deleted_at IS NULL ORDER BY tur_created_at ASC';
    $answer = $conn->prepare($sql);
    $answer->execute();
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }

  public function getById($id = null) {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT tur_id AS id, tur_descripcion AS descripcion, tur_hora_inicio AS hora_inicio, tur_hora_fin AS hora_fin, tur_estado AS estado, tur_created_at AS created_at, tur_updated_at AS updated_at, tur_deleted_at AS deleted_at FROM bda_turno WHERE tur_deleted_at IS NULL AND id = :id';
    $params = array(
        ':id' => ($id !== null) ? $id : $this->getId()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }

  public function save() {
    $conn = $this->getConnection($this->config);
    $sql = 'INSERT INTO bda_turno (tur_descripcion, tur_hora_inicio, tur_hora_fin, tur_estado) VALUES (:descripcion, :hora_inicio, :hora_fin, :estado)';
    $params = array(
        ':descripcion' => $this->getDescripcion(),
        ':hora_inicio' => $this->getHoraInicio(),
        ':hora_fin' => $this->getHoraFin(),
        ':estado' => $this->getEstado()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    $this->setId($conn->lastInsertId(self::_SEQUENCE));
    return true;
  }

  public function update() {
    $conn = $this->getConnection($this->config);
    $sql = 'UPDATE bda_turno SET tur_descripcion = :descripcion, tur_hora_inicio = :hora_inicio, tur_hora_fin = :hora_fin, tur_estado = :estado WHERE tur_id = :id';
    $params = array(
        ':descripcion' => $this->getDescripcion(),
        ':hora_inicio' => $this->getHoraInicio(),
        ':hora_fin' => $this->getHoraFin(),
        ':estado' => $this->getEstado(),
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
        $sql = 'UPDATE bda_turno SET tur_deleted_at = now() WHERE tur_id = :id';
        break;
      case false:
        $sql = 'DELETE FROM bda_turno WHERE tur_id = :id';
        break;
      default:
        throw new PDOException('Por favor indique un dato coherente para el borrado lógico (true) o físico (false)');
    }
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return true;
  }

}
