
<?php

use FStudio\model\base\registroLaboresMaquinaEquipoTableBase;

/**
 * clase para manejar la tabla registroLaboresMaquinaEquipo
 * @author maribel zamora <mazagi86@hotmail.com>
 * @package fStudio
 * @subpackage model
 * @subpackage table
 * @version 1.0.0
 */
class registroLaboresMaquinaEquipoTable extends registroLaboresMaquinaEquipoTableBase {

  /**
   * obtiene todos los datos de la tabla
   * @version 1.0.0
   * @return [stdClass | boolean]
   */
  public function getAll() {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT relme_numero, hac_id, ter_id, tpd_id, imp_id,relme_fecha, relme_estado, relme_tiempo,relme_total_horas_trabajadas, relme_created_at, relme_updated_at, relme_deleted_at
    FROM bda_registroLaboresMaquinaEquipo WHERE deleted_at IS NULL ORDER BY created_at ASC';
    $answer = $conn->prepare($sql);
    $answer->execute();
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) :
            false;
  }

  /**
   * retorna un elemento de la tabla buscado por un numero especifico
   * @version 1.0.0
   * @param integer $numero
   *  @return [stdClass | boolean]
   */
  public function getById($numero = null) {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT relme_numero, hac_id, ter_id, tpd_id, imp_id,relme_fecha, relme_estado, relme_tiempo,relme_total_horas_trabajadas, relme_created_at, relme_updated_at, relme_deleted_at 
            FROM bda_registro_labores_maquina_equipo WHERE deleted_at IS NULL '
            . 'AND numero = :numero';
    $params = array(
        ':numero' => ($numero !== null) ? $numero : $this->getNumero()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) :
            false;
  }

  /**
   * registra los datos en la tabla
   * @version 1.0.0
   * @return integer
   */
  public function save() {
    $conn = $this->getConnection($this->config);
    $sql = 'INSERT INTO bda_registroLaboresMaquinaEquipo (hac_id, ter_id,tpd_id,imp_id,relme_fecha,relme_estado,relme_tiempo,total_horas_trabajadas) VALUES (:usuario_id, :ip_address, :hash_cookie)';
    $params = array(
        ':hac_id' => $this->getHacId(),
        ':ter_id' => $this->getTerId(),
        ':tpd_id' => $this->getTpdId(),
        ':imp_id' => $this->getImpId(),
        ':relme_fecha' => $this->getFecha(),
        ':relme_estado' => $this->getEstado(),
        ':relme_tiempo' => $this->getTiempo(),
        ':relme_total_horas_trabajadas' => $this->getTotalHorasTrabajadas()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    $this->setNumero($conn->lastInsertNumero(self::SEQUENCE));
    return true;
  }

  /**
   * actualiza un registro en la tabla
   * @version 1.0.0
   * @return [stdClass | boolean]
   */
  public function update() {
    $conn = $this->getConnection($this->config);
    $sql = 'UPDATE bda_registroLaboresMaquinaEquipo SET hac_id = :hac_id, ter_id = :ter_id,
: tpd_id = :tpd_id,imp_id = :imp_id,relme_fecha = :relme_fecha,relme_estado = :relme_estado,relme_tiempo = :relme_tiempo,relme_total_horas_trabajadas = :relme_total_horas_trabajadas  WHERE relme_numero = :numero';
    $params = array(
        ':hac_id' => $this->getHacId(),
        ':ter_id' => $this->getTerId(),
        ':tpd_id' => $this->getTpdId(),
        ':imp_id' => $this->getImpId(),
        ':relme_fecha' => $this->getFecha(),
        ':relme_estado' => $this->getEstado(),
        ':relme_tiempo' => $this->getTiempo(),
        ':relme_total_horas_trabajadas' => $this->getTotalHorasTrabajadas(),
        ':numero' => $this->getNumero()
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
        ':numero' => $this->getNumero()
    );
    switch ($deleteLogical) {
      case true:
        $sql = 'UPDATE bda_registro_labores_maquina_equipo SET relme_deleted_at = now() WHERE relme_numero = :numero';
        break;
      case false:
        $sql = 'DELETE FROM bda_registro_labores_maquina_equipo WHERE relme_numero = :numero';
        break;
      default:
        throw new PDOException('indique un dato coherente para el borrado  (true) o físico (false)');
    }
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return true;
  }

}
