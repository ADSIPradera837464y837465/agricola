<?php

use FStudio\model\base\controlAdministrativoRiegoBaseTable;

/**
 * Description of controlRiego
 *
 * @author Mariam Montaño <nichesitap@hotmail.com>
 * @package FStudio
 * @subpackage model
 * @subpackage table
 * @version 1.0.0
 */
class controlAdministrativoRiegoTable extends controlAdministrativoRiegoBaseTable {

  public function getAll() {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT car_num_documento AS id, car_fecha AS fecha, met_rie_id AS metodo_riego_id, hac_id AS hacienda_id, sue_id AS suerte_id, car_caudal_riego AS caudal_riego, car_tiempo_riego AS tiempo_riego, car_tiempo_total_suspension AS tiempo_total_suspension, car_longitud_surco AS longitud_surco, car_espacio_surco AS espacio_surco, car_num_surco_regados AS num_surco_regados, car_estado_humedad AS estado_humedad, car_suelo_grieta AS suelo_grieta, car_facil_avance_agua AS facil_avance_agua, car_pendiente_dir_surco AS pendiente_dir_surco, car_agua_costado AS agua_costado, car_created_at AS created_at, car_updated:at AS updated_at, car_deleted_at AS deleted_at FROM bda_control_administrativo_riego WHERE car_deleted_at IS NULL ORDER BY car_created_at ASC';
    $answer = $conn->prepare($sql);
    $answer->execute();
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }

  public function getById($id = null) {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT car_num_documento AS id, car_fecha AS fecha, met_rie_id AS metodo_riego_id, hac_id AS hacienda_id, sue_id AS suerte_id, car_caudal_riego AS caudal_riego, car_tiempo_riego AS tiempo_riego, car_tiempo_total_suspension AS tiempo_total_suspension, car_longitud_surco AS longitud_surco, car_espacio_surco AS espacio_surco, car_num_surco_regados AS num_surco_regados, car_estado_humedad AS estado_humedad, car_suelo_grieta AS suelo_grieta, car_facil_avance_agua AS facil_avance_agua, car_pendiente_dir_surco AS pendiente_dir_surco, car_agua_costado AS agua_costado, car_created_at AS created_at, car_updated:at AS updated_at, car_deleted_at AS deleted_at FROM bda_control_administrativo_riego WHERE car_deleted_at IS NULL AND id = :id';
    $params = array(
        ':id' => ($id !== null) ? $id : $this->getId()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }

  public function save() {
    $conn = $this->getConnection($this->config);
    $sql = 'INSERT INTO bda_control_administrativo_riego (car_fecha, met_rie_id, hac_id, sue_id, car_caudal_riego, car_tiempo_riego, car_tiempo_total_suspension, car_longitud_surco, car_espacio_surco, car_num_surco_regados, car_estado_humedad, car_suelo_grieta, car_facil_avance_agua, car_pendiente_dir_surco, car_agua_costado) VALUES (:fecha, :metodo_riego_id, :hacienda_id, :suerte_id, :caudal_riego, :tiempo_riego, :tiempo_total_suspension, :longitud_surco, :espacio_surco, :num_surco_regados, :estado_humedad, :suelo_grieta, :facil_avance_agua, :pendiente_dir_surco, :agua_costado)';
    $params = array(
        ':fecha' => $this->getFecha(),
        ':metodo_riego_id' => $this->getMetodoRiegoId(),
        ':hacienda_id' => $this->getHaciendaId(),
        ':suerte_id' => $this->getSuerteId(),
        ':caudal_riego' => $this->getCaudalRiego(),
        ':tiempo_riego' => $this->getTiempoRiego(),
        ':tiempo_total_suspension' => $this->getTiempoTotalSuspension(),
        ':longitud_surco' => $this->getLongitudSurco(),
        ':espacio_surco' => $this->getEspacioSurco(),
        ':num_surco_regados' => $this->getNumSurcoRegados(),
        ':estado_humedad' => $this->getEstadoHumedad(),
        ':suelo_grieta' => $this->getSueloGrieta(),
        ':facil_avance_agua' => $this->getFacilAvanceAgua(),
        ':pendiente_dir_surco' => $this->getPendienteDirSurco(),
        ':agua_costado' => $this->getAguaCostado()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    $this->setId($conn->lastInsertId(self::_SEQUENCE));
    return true;
  }

  public function update() {
    $conn = $this->getConnection($this->config);
    $sql = 'UPDATE bda_control_administrativo_riego SET car_fecha = :fecha, met_rie_id = :metodo_riego_id, hac_id = :hacienda_id, sue_id = :suerte_id, car_caudal_riego = :caudal_riego, car_tiempo_riego = :tiempo_riego, car_tiempo_total_suspension = :tiempo_total_suspension, car_longitud_surco = :longitud_surco, car_espacio_surco = :espacio_surco, car_num_surco_regados = :num_surco_regados, car_estado_humedad = :estado_humedad, car_suelo_grieta = :suelo_grieta, car_facil_avance_agua = :facil_avance_agua, car_pendiente_dir_surco = :pendiente_dir_surco, car_agua_costado = :agua_costado WHERE car_num_documento = :id';
    $params = array(
        ':fecha' => $this->getFecha(),
        ':metodo_riego_id' => $this->getMetodoRiegoId(),
        ':hacienda_id' => $this->getHaciendaId(),
        ':suerte_id' => $this->getSuerteId(),
        ':caudal_riego' => $this->getCaudalRiego(),
        ':tiempo_riego' => $this->getTiempoRiego(),
        ':tiempo_total_suspension' => $this->getTiempoTotalSuspension(),
        ':longitud_surco' => $this->getLongitudSurco(),
        ':espacio_surco' => $this->getEspacioSurco(),
        ':num_surco_regados' => $this->getNumSurcoRegados(),
        ':estado_humedad' => $this->getEstadoHumedad(),
        ':suelo_grieta' => $this->getSueloGrieta(),
        ':facil_avance_agua' => $this->getFacilAvanceAgua(),
        ':pendiente_dir_surco' => $this->getPendienteDirSurco(),
        ':agua_costado' => $this->getAguaCostado(),
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
        $sql = 'UPDATE bda_control_administrativo_riego SET car_deleted_at = now() WHERE car_num_documento = :id';
        break;
      case false:
        $sql = 'DELETE FROM bda_control_administrativo_riego WHERE car_num_documento = :id';
        break;
      default:
        throw new PDOException('Por favor indique un dato coherente para el borrado lógico (true) o físico (false)');
    }
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return true;
  }

}
