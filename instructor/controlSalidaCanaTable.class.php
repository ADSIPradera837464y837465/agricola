<?php

use FStudio\model\base\controlSalidaCanaBaseTable;

/**
 * Description of controlSalidaCanaTable
 *
 * @author nombre completo <su@correo.com>
 * @package FStudio
 * @subpackage model
 * @subpackage table
 * @version 1.0.0
 */
class controlSalidaCanaTable extends controlSalidaCanaBaseTable {

  public function getAll() {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT csc_id AS id, csc_fecha AS fecha, csc_total_vagones AS total_vagones, csc_notas AS notas, csc_total_trenes AS total_trenes, tur_id AS turno_id, sue_id AS suerte_id, ter_id AS tercero_id, csc_created_at AS created_at, csc_updated:at AS updated_at, csc_deleted_at AS deleted_at FROM bda_control_salida_cana WHERE csc_deleted_at IS NULL ORDER BY csc_created_at ASC';
    $answer = $conn->prepare($sql);
    $answer->execute();
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }

  public function getById($id = null) {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT csc_id AS id, csc_fecha AS fecha, csc_total_vagones AS total_vagones, csc_notas AS notas, csc_total_trenes AS total_trenes, tur_id AS turno_id, sue_id AS suerte_id, ter_id AS tercero_id, csc_created_at AS created_at, csc_updated:at AS updated_at, csc_deleted_at AS deleted_at FROM bda_control_salida_cana WHERE csc_deleted_at IS NULL AND id = :id';
    $params = array(
        ':id' => ($id !== null) ? $id : $this->getId()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }

  public function save() {
    $conn = $this->getConnection($this->config);
    $sql = 'INSERT INTO bda_control_salida_cana (csc_fecha, csc_total_vagones, csc_notas, csc_total_trenes, tur_id, sue_id, ter_id) VALUES (:fecha, :total_vagones, :notas, :total_trenes, :turno_id, :suerte_id, :tercero_id)';
    $params = array(
        ':fecha' => $this->getFecha(),
        ':total_vagones' => $this->getTotalVagones(),
        ':notas' => $this->getNotas(),
        ':total_trenes' => $this->getTotalTrenes(),
        ':turno_id' => $this->getTurnoId(),
        ':suerte_id' => $this->getSuerteId(),
        ':tercero_id' => $this->getTerceroId()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    $this->setId($conn->lastInsertId(self::_SEQUENCE));
    return true;
  }

  public function update() {
    $conn = $this->getConnection($this->config);
    $sql = 'UPDATE bda_control_salida_cana SET csc_fecha = :fecha, csc_total_vagones = :total_vagones, csc_notas = :notas, csc_total_trenes = :total_trenes, tur_id = :turno_id, sue_id = :suerte_id, ter_id = :tercero_id WHERE csc_id = :id';
    $params = array(
        ':fecha' => $this->getFecha(),
        ':total_vagones' => $this->getTotalVagones(),
        ':notas' => $this->getNotas(),
        ':total_trenes' => $this->getTotalTrenes(),
        ':turno_id' => $this->getTurnoId(),
        ':suerte_id' => $this->getSuerteId(),
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
        $sql = 'UPDATE bda_control_salida_cana SET csc_deleted_at = now() WHERE csc_id = :id';
        break;
      case false:
        $sql = 'DELETE FROM bda_control_salida_cana WHERE csc_id = :id';
        break;
      default:
        throw new PDOException('Por favor indique un dato coherente para el borrado lógico (true) o físico (false)');
    }
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return true;
  }

}
