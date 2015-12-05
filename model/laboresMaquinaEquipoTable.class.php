
<?php

use FStudio\model\base\laboresMaquinaEquipoBaseTable;

/**
 * clase para manejar la tabla laboresMaquinaEquipo
 * 
 * @author Maribel Zamora <mazagi86@hotmail.com>
 * @package FStudio
 * @subpackage model
 * @subpackage table
 * @version 1.0.0
 */
class laboresMaquinaEquipoTable extends laboresMaquinaEquipoBaseTable {

  /**
   * obtiene todos los datos de la tabla
   * @version 1.0.0
   * @return [stdClass | boolean]
   */
  public function getAll() {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT lme_numero AS id, hac_id AS hacienda_id, ter_id AS tercero_id, tpd_id AS tipo_documento_id, imp_id AS implemento_id, lme_fecha AS fecha, lme_estado AS estado, lme_tiempo AS tiempo, lme_total_horas_trabajadas AS total_horas_trabajadas, lme_created_at AS created_at, lme_updated_at AS updated_at, lme_deleted_at AS deleted_at FROM bda_labores_maqina_equipo WHERE lme_deleted_at IS NULL ORDER BY lme_created_at ASC';
    $answer = $conn->prepare($sql);
    $answer->execute();
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }

  /**
   * retorna un elemento de la tabla buscado por un numero especifico
   * @version 1.0.0
   * @param integer $numero
   *  @return [stdClass | boolean]
   */
  public function getById($id = null) {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT lme_numero AS id, hac_id AS hacienda_id, ter_id AS tercero_id, tpd_id AS tipo_documento_id, imp_id AS implemento_id, lme_fecha AS fecha, lme_estado AS estado, lme_tiempo AS tiempo, lme_total_horas_trabajadas AS total_horas_trabajadas, lme_created_at AS created_at, lme_updated_at AS updated_at, lme_deleted_at AS deleted_at FROM bda_labores_maqina_equipo WHERE lme_deleted_at IS NULL AND id = :id';
    $params = array(
        ':id' => ($id !== null) ? $id : $this->getId()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }

  /**
   * registra los datos en la tabla
   * @version 1.0.0
   * @return integer
   */
  public function save() {
    $conn = $this->getConnection($this->config);
    $sql = 'INSERT INTO bda_labores_maqina_equipo (hac_id, ter_id, tpd_id, imp_id, lme_fecha, lme_estado, lme_tiempo, lme_total_horas_trabajadas) VALUES (:hacienda_id, :tercero_id, :tipo_documento_id, :implemento_id, :fecha, :estado, :tiempo, :total_horas_trabajadas)';
    $params = array(
        ':hacienda_id' => $this->getHaciendaId(),
        ':tercero_id' => $this->getTerceroId(),
        ':tipo_documento_id' => $this->getTipoDocumentoId(),
        ':implemento_id' => $this->getImplementoId(),
        ':fecha' => $this->getFecha(),
        ':estado' => $this->getEstado(),
        ':tiempo' => $this->getTiempo(),
        ':total_horas_trabajadas' => $this->getTotalHorasTrabajadas()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    $this->setId($conn->lastInsertId(self::_SEQUENCE));
    return true;
  }

  /**
   * actualiza un registro en la tabla
   * @version 1.0.0
   * @return [stdClass | boolean]
   */
  public function update() {
    $conn = $this->getConnection($this->config);
    $sql = 'UPDATE bda_labores_maqina_equipo SET hac_id = :hacienda_id, ter_id = :tercero_id, tpd_id = :tipo_documento_id, imp_id = :implemento_id, lme_fecha = :fecha, lme_estado = :estado, lme_tiempo = :tiempo, lme_total_horas_trabajadas = :total_horas_trabajadas WHERE lme_numero = :id';
    $params = array(
        ':hacienda_id' => $this->getHaciendaId(),
        ':tercero_id' => $this->getTerceroId(),
        ':tipo_documento_id' => $this->getTipoDocumentoId(),
        ':implemento_id' => $this->getImplementoId(),
        ':fecha' => $this->getFecha(),
        ':estado' => $this->getEstado(),
        ':tiempo' => $this->getTiempo(),
        ':total_horas_trabajadas' => $this->getTotalHorasTrabajadas(),
        ':id' => $this->getId()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return true;
  }

  /**
   * borrar en forma logica o fisica un registro de la tabla
   * @version 1.0.0
   * @param boolean $deleteLogical Especifica el borrado logico (true o false)
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
        $sql = 'UPDATE bda_labores_maqina_equipo SET lme_deleted_at = now() WHERE lme_numero = :id';
        break;
      case false:
        $sql = 'DELETE FROM bda_labores_maqina_equipo WHERE lme_numero = :id';
        break;
      default:
        throw new PDOException('Por favor indique un dato coherente para el borrado lógico (true) o físico (false)');
    }
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return true;
  }

}
