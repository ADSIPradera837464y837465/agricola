<?php

use FStudio\model\base\siembraTableBase;

/**
 * Description of siembraTable
 * @author Diana Meneses <meneses_d@rocketmail.com>
 *  @package
 * @subpackage model
 * @subpackage table
 * @version 1.0.0
 */
class siembraTable extends siembraTableBase {

  /**
   * Obtiene todos los datos de la tabla
   * @version 1.0.0
   * @return [stdClass|boolean]
   */
  public function getAll() {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT sie_id, sue_id, sie_dia, sie_presupuesto_empresa, sie_kilos_lote, sie_total_kilos_planta, sie_fecha, sie_fecha_fin_levante, sie_fecha_inicio_ciclo, sie_fecha_fin_ciclo, sie_fecha_poda, sie_fecha_produccion, sie_num_hectarea, sie_num_planta_levante, sie_num_plantas_productivas, sie_plantas_erradica, sie_created_at, sie_updated_at, sie_deleted_at FROM bda_siembra ORDER BY sie_created_at ASC';
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
    $sql = 'SELECT sie_id, sue_id, sie_dia, sie_presupuesto_empresa, sie_kilos_lote, sie_total_kilos_planta, sie_fecha, sie_fecha_fin_levante, sie_fecha_inicio_ciclo, sie_fecha_fin_ciclo, sie_fecha_poda, sie_fecha_produccion, sie_num_hectarea, sie_num_planta_levante, sie_num_plantas_productivas_ sie_plantas_erradica '
            . 'FROM bda_siembra '
            . 'AND sie_id = :sie_id';
    $params = array(
        ':sie_id' => ($id !== null) ? $id : $this->getId()
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
    $sql = 'INSERT INTO bda_siembra (sue_id, sie_dia, sie_presupuesto_empresa, sie_kilos_lote, sie_total_kilos_planta, sie_fecha, sie_fecha_fin_levante, sie_fecha_inicio_ciclo, sie_fecha_fin_ciclo, sie_fecha_poda, sie_fecha_produccion, sie_num_hectarea, sie_num_planta_levante, sie_num_plantas_productivas, sie_plantas_erradica) VALUES (:sue_id, :sie_dia, :sie_presupuesto_empresa, :sie_kilos_lote, :sie_total_kilos_planta, :sie_fecha, :sie_fecha_fin_levante, :sie_fecha_inicio_ciclo, :sie_fecha_fin_ciclo, :sie_fecha_poda, :sie_fecha_produccion, :sie_num_hectarea, :sie_num_planta_levante, :sie_num_plantas_productivas, :sie_plantas_erradica)';
    $params = array(
        ':sue_id' => $this->getId(),
        ':sie_presupuesto_empresa' => $this->getPresupuestoEmpresa(),
        ':sie_kilos_lote' => $this->getKilosLote(),
        ':sie_total_kilos_planta' => $this->getTotalKilosPlanta(),
        ':sie_fecha' => $this->getFecha(),
        ':sie_fecha_fin_levante' => $this->getFechaFinlevante(),
        ':sie_fecha_inicio_ciclo' => $this->getFechaInicioCiclo(),
        ':sie_fecha_fin_ciclo' => $this->getFechaFinCiclo(),
        ':sie_fecha_poda' => $this->getFechaPoda(),
        ':sie_fecha_produccion' => $this->getFechaProduccion(),
        ':sie_num_hectarea' => $this->getNumHectarea(),
        ':sie_num_planta_levante' => $this->getNumPlantaLevante(),
        ':sie_num_plantas_productivas' => $this->getNumPlantasProductivas(),
        ':sie_plantas_erradica' => $this->getNumPlantasErradica()
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
    $sql = 'UPDATE bda_siembra SET  sue_id :sue_id, sie_dia :sie_dia, sie_presupuesto_empresa :sie_presupuesto_empresa, sie_kilos_lote :sie_kilos_lote, sie_total_kilos_planta :sie_total_kilos_planta,sie_fecha :sie_fecha, sie_fecha_fin_levante :sie_fecha_fin_levante, sie_fecha_inicio_ciclo :sie_fecha_inicio_ciclo, sie_fecha_fin_ciclo :sie_fecha_fin_ciclo, sie_fecha_poda :sie_fecha_poda, sie_fecha_produccion :sie_fecha_produccion, sie_num_hectarea :sie_num_hectarea, sie_num_planta_levante :sie_num_planta_levante, sie_num_plantas_productivas :sie_num_plantas_productivas, sie_plantas_erradica :sie_plantas_erradica WHERE sie_id = :sie_id';
    $params = array(
        ':sue_id' => $this->getId(),
        ':sie_presupuesto_empresa' => $this->getPresupuestoEmpresa(),
        ':sie_kilos_lote' => $this->getKilosLote(),
        ':sie_total_kilos_planta' => $this->getTotalKilosPlanta(),
        ':sie_fecha' => $this->getFecha(),
        ':sie_fecha_fin_levante' => $this->getFechaFinlevante(),
        ':sie_fecha_inicio_ciclo' => $this->getFechaInicioCiclo(),
        ':sie_fecha_fin_ciclo' => $this->getFechaFinCiclo(),
        ':sie_fecha_poda' => $this->getFechaPoda(),
        ':sie_fecha_produccion' => $this->getFechaProduccion(),
        ':sie_num_hectarea' => $this->getNumHectarea(),
        ':sie_num_planta_levante' => $this->getNumPlantaLevante(),
        ':sie_num_plantas_productivas' => $this->getNumPlantasProductivas(),
        ':sie_plantas_erradica' => $this->getNumPlantasErradica(),
        ':sie_id' => $this->getId()   
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
        ':sie_id' => $this->getId()
    );
    switch ($deleteLogical) {
      case true:
        $sql = 'UPDATE bda_siembra SET sie_deleted_at = now() WHERE sie_id = :sie_id';
        break;
      case false:
        $sql = 'DELETE FROM bda_siembra WHERE sie_id = :sie_id';
        break;
      default:
        throw new PDOException('Por favor indique un dato coherente para el borrado lógico (true) o físico (false)');
    }
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return true;
  }

}
