<?php

use FStudio\model\base\turnoBaseTable;

/**
 * Description of registroTractorTable
 * @author yuri adriana hurtado rojas <yurodri.1996@gmail.com>
 * @package
 * @subpackage model
 * @subpackage table
 * @version 1.0.0
 */
class turnoTable extends turnoBaseTable {

  /**
   * Obtiene todos los datos de la tabla
   * @return [stdClass | boolean]
   */
  public function getAll() {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT tur_id AS id, tur_descripcion AS descripcion, tur_hora_inicio AS hora_inicio, tur_hora_fin AS hora_fin, tur_estado AS estado, tur_created_at AS created_at, tur_updated_at AS updated_at, tur_deleted_at AS deleted_at FROM bda_turno WHERE tur_deleted_at IS NULL ORDER BY tur_created_at ASC';
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
    $sql = 'SELECT tur_id AS id, tur_descripcion AS descripcion, tur_hora_inicio AS hora_inicio, tur_hora_fin AS hora_fin, tur_estado AS estado, tur_created_at AS created_at, tur_updated_at AS updated_at, tur_deleted_at AS deleted_at FROM bda_turno WHERE tur_deleted_at IS NULL AND id = :id';
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

  /**
   * Actualiza un registro de la tabla
   * @return boolean
   */
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

  /**
   * Borra en forma logica o fisica un registro de la tabla
   * @param boolean $deleteLogical
   * @return boolean
   * @throws PDOException
   */
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
