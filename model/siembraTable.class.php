<?php

use FStudio\model\base\siembraBaseTable;

/**
 * Description of siembraTable
 *
 * @author Diana Meneses <meneses_d@rocketmail.com>
 * @package FStudio
 * @subpackage model
 * @subpackage table
 * @version 1.0.0
 */
class siembraTable extends siembraBaseTable {

  /**
   * Obtiene todos los datos de la tabla
   * @version 1.0.0
   * @return [stdClass|boolean]
   */
  public function getAll() {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT sie_id AS id, sue_id AS suerte_id, tic_id AS tipo_cana_id, sie_dia AS dia, sie_presupuesto_empresa AS presupuesto_empresa, sie_kilos_lote AS kilos_lote, sie_total_kilos_planta AS total_kilos_planta, sie_fecha AS fecha, sie_fecha_fin_levante AS fecha_fin_levante, sie_fecha_inicio_ciclo AS fecha_inicio_ciclo, sie_fecha_fin_ciclo AS fecha_fin_ciclo, sie_fecha_poda AS fecha_poda, sie_fecha_produccion AS fecha_produccion, sie_num_hectarea AS num_hectarea, sie_num_planta_levante AS num_planta_levante, sie_num_plantas_productivas AS num_plantas_productivas, sie_num_plantas_erradica AS num_plantas_erradica, sie_created_at AS created_at, sie_updated_at AS updated_at, sie_deleted_at AS deleted_at FROM bda_siembra WHERE sie_deleted_at IS NULL ORDER BY sie_created_at ASC';
    $answer = $conn->prepare($sql);
    $answer->execute();
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }

  /**
   * Retorna un elemento de la tabla buscado por un ID especifico
   * @version 1.0.0
   * @param integer $id ID a buscar
   * @return mixed [stdClass | boolean]
   */
  public function getById($id = null) {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT sie_id AS id, sue_id AS suerte_id, tic_id AS tipo_cana_id, sie_dia AS dia, sie_presupuesto_empresa AS presupuesto_empresa, sie_kilos_lote AS kilos_lote, sie_total_kilos_planta AS total_kilos_planta, sie_fecha AS fecha, sie_fecha_fin_levante AS fecha_fin_levante, sie_fecha_inicio_ciclo AS fecha_inicio_ciclo, sie_fecha_fin_ciclo AS fecha_fin_ciclo, sie_fecha_poda AS fecha_poda, sie_fecha_produccion AS fecha_produccion, sie_num_hectarea AS num_hectarea, sie_num_planta_levante AS num_planta_levante, sie_num_plantas_productivas AS num_plantas_productivas, sie_num_plantas_erradica AS num_plantas_erradica, sie_created_at AS created_at, sie_updated_at AS updated_at, sie_deleted_at AS deleted_at FROM bda_siembra WHERE sie_deleted_at IS NULL AND id = :id';
    $params = array(
        ':id' => ($id !== null) ? $id : $this->getId()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }

  /**
   * Registra los datos del objeto en la tabla
   * @version 1.0.0
   * @return integer
   */
  public function save() {
    $conn = $this->getConnection($this->config);
    $sql = 'INSERT INTO bda_siembra (sue_id, tic_id, sie_dia, sie_presupuesto_empresa, sie_kilos_lote, sie_total_kilos_planta, sie_fecha, sie_fecha_fin_levante, sie_fecha_inicio_ciclo, sie_fecha_fin_ciclo, sie_fecha_poda, sie_fecha_produccion, sie_num_hectarea, sie_num_planta_levante, sie_num_plantas_productivas, sie_num_plantas_erradica) VALUES (:suerte_id, :tipo_cana_id, :dia, :presupuesto_empresa, :kilos_lote, :total_kilos_planta, :fecha, :fecha_fin_levante, :fecha_inicio_ciclo, :fecha_fin_ciclo, :fecha_poda, :fecha_produccion, :num_hectarea, :num_planta_levante, :num_plantas_productivas, :num_plantas_erradica)';
    $params = array(
        ':suerte_id' => $this->getSuerteId(),
        ':tipo_cana_id' => $this->getTipoCanaId(),
        ':dia' => $this->getDia(),
        ':presupuesto_empresa' => $this->getPresupuestoEmpresa(),
        ':kilos_lote' => $this->getKilosLote(),
        ':total_kilos_planta' => $this->getTotalKilosPlanta(),
        ':fecha' => $this->getFecha(),
        ':fecha_fin_levante' => $this->getFechaFinLevante(),
        ':fecha_inicio_ciclo' => $this->getFechaInicioCiclo(),
        ':fecha_fin_ciclo' => $this->getFechaFinCiclo(),
        ':fecha_poda' => $this->getFechaPoda(),
        ':fecha_produccion' => $this->getFechaProduccion(),
        ':num_hectarea' => $this->getNumHectarea(),
        ':num_planta_levante' => $this->getNumPlantaLevante(),
        ':num_plantas_productivas' => $this->getNumPlantasProductivas(),
        ':num_plantas_erradica' => $this->getNumPlantasErradica()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    $this->setId($conn->lastInsertId(self::_SEQUENCE));
    return true;
  }

  /**
   * Actualiza o modifica un registro de la tabla
   * @version 1.0.0
   * @return boolean
   */
  public function update() {
    $conn = $this->getConnection($this->config);
    $sql = 'UPDATE bda_siembra SET sue_id = :suerte_id, tic_id = :tipo_cana_id, sie_dia = :dia, sie_presupuesto_empresa = :presupuesto_empresa, sie_kilos_lote = :kilos_lote, sie_total_kilos_planta = :total_kilos_planta, sie_fecha = :fecha, sie_fecha_fin_levante = :fecha_fin_levante, sie_fecha_inicio_ciclo = :fecha_inicio_ciclo, sie_fecha_fin_ciclo = :fecha_fin_ciclo, sie_fecha_poda = :fecha_poda, sie_fecha_produccion = :fecha_produccion, sie_num_hectarea = :num_hectarea, sie_num_planta_levante = :num_planta_levante, sie_num_plantas_productivas = :num_plantas_productivas, sie_num_plantas_erradica = :num_plantas_erradica WHERE sie_id = :id';
    $params = array(
        ':suerte_id' => $this->getSuerteId(),
        ':tipo_cana_id' => $this->getTipoCanaId(),
        ':dia' => $this->getDia(),
        ':presupuesto_empresa' => $this->getPresupuestoEmpresa(),
        ':kilos_lote' => $this->getKilosLote(),
        ':total_kilos_planta' => $this->getTotalKilosPlanta(),
        ':fecha' => $this->getFecha(),
        ':fecha_fin_levante' => $this->getFechaFinLevante(),
        ':fecha_inicio_ciclo' => $this->getFechaInicioCiclo(),
        ':fecha_fin_ciclo' => $this->getFechaFinCiclo(),
        ':fecha_poda' => $this->getFechaPoda(),
        ':fecha_produccion' => $this->getFechaProduccion(),
        ':num_hectarea' => $this->getNumHectarea(),
        ':num_planta_levante' => $this->getNumPlantaLevante(),
        ':num_plantas_productivas' => $this->getNumPlantasProductivas(),
        ':num_plantas_erradica' => $this->getNumPlantasErradica(),
        ':id' => $this->getId()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return true;
  }

  /**
   * Borra en forma logica o fisica un registro de la tabla
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
        $sql = 'UPDATE bda_siembra SET sie_deleted_at = now() WHERE sie_id = :id';
        break;
      case false:
        $sql = 'DELETE FROM bda_siembra WHERE sie_id = :id';
        break;
      default:
        throw new PDOException('Por favor indique un dato coherente para el borrado lógico (true) o físico (false)');
    }
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return true;
  }

}
