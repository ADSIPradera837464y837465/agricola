<?php

use FStudio\model\base\detalleRegistroTableBase;

/**
 * Description of detalleRegistroTable
 * @author Magda Chaux <lucia_chaux@hotmail.com>
 * @package FStudio
 * @subpackage model
 * @subpackage base
 * @version 1.0.0
 */
class detalleRegistroTable extends detalleRegistroTableBase {

  /**
   * Obtiene todos los datos de la tabla
   * @version 1.0.0
   * @return [stdClass | boolean]
   */
  public function getAll() {
    $conn = $this->getConexion($this->config);
    $sql = 'SELECT der_item, relme_numero, ter_id, lab_id, sue_id, pro_id, unm_id, maq_id, der_tiempo_muerto, der_total_horas_trabajadas, der_hora_inicio, der_hora_fin, der_cantidad, der_created_at, der_updated_at, der_deleted_at FROM bda_detalle_registro WHERE der_deleted_at IS NULL ORDER BY created_at ASC';
    $respuesta = $conn->prepare($sql);
    $respuesta->execute();
    return ($respuesta->rowCount() > 0 ) ? $respuesta->fetchAll(PDO::FETCH_OBJ) : false;
  }

  /**
   * Retorna un elemento de la tabla buscado por un item especifico
   * @version 1.0.0
   * @param integer der_item
   * @return [stdClass | boolean]
   */
  public function getById($item = null) {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT der_item, relme_numero, ter_id, lab_id, sue_id, pro_id, unm_id, maq_id, der_tiempo_muerto, der_total_horas_trabajadas, der_hora_inicio, der_hora_fin, der_cantidad, der_created_at, der_updated_at, der_deleted_at FROM bda_detalle_registro WHERE der_deleted_at IS NULL';
    $params = array(
        ':der_item' => ($item !== null) ? $item : $this->getItem(),
    );
    $respuesta = $conn->prepare($sql);
    $respuesta->execute($params);
    return ($respuesta->rowCount() > 0 ) ? $respuesta->fetchAll(PDO::FETCH_OBJ) : false;
  }

  /**
   * Registra los datos del objeto en la tabla
   * @version 1.0.0
   * @return integer
   */
  public function save() {
    $conn = $this->getConnection($this->config);
    $sql = 'INSERT INTO bda_detalle_registro (relme_numero, ter_id, lab_id, sue_id, pro_id, unm_id, maq_id, der_tiempo_muerto, der_total_horas_trabajadas, der_hora_inicio, der_hora_fin, der_cantidad) VALUES'
            . '(:relme_numero, :ter_id, :lab_id, :sue_id, :pro_id, :unm_id, maq_id, :der_tiempo_muerto, :der_total_horas_trabajadas, :der_hora_inicio, :der_hora_fin, :der_cantidad)';
    $params = array(
        ':relme_numero' => $this->getRelmeNumero(),
        ':ter_id' => $this->getTerId(),
        ':lab_id' => $this->getLabId(),
        ':sue_id' => $this->getSueId(),
        ':pro_id' => $this->getProId(),
        ':unm_id' => $this->getUnmId(),
        ':maq_id' => $this->getMaqId(),
        ':der_tiempo_muerto' => $this->getDerTiempoMuerto(),
        ':der_total_horas_trabajadas' => $this->getDerTotalHorasTrabajadas(),
        ':der_hora_inicio' => $this->getDerHoraInicio(),
        ':der_hora_fin' => $this->getDerHoraFin(),
        ':der_cantidad' => $this->getDerCantidad());
    $respuesta = $conn->prepare($sql);
    $respuesta->execute($params);
    $this->setId($conn->lastInsertId(self::_SEQUENCE));
    return true;
  }

  /**
   * Actualiza un registro de la tabla
   * @version 1.0.0
   * @return boolean
   */
  public function update() {
    $conn = $this->getConnection($this->config);
    $sql = 'UPDATE bda_detalle_registro SET relme_numero = :relme_numero, ter_id = :ter_id, lab_id = :lab_id, sue_id = :sue_id, pro_id = :pro_id, unm_id = :unm_id,'
            . 'maq_id = :maq_id, der_tiempo_muerto = :der_tiempo_muerto, der_total_horas_trabajadas = :der_total_horas_trabajadas, der_hora_inicio = :der_hora_inicio, der_hora_fin = :der_hora_fin, der_cantidad = :der_cantidad WHERE der_item = :der_item';
    $params = array(
        ':der_item' => $this->getItem()
    );
    $respuesta = $conn->prepare($sql);
    $respuesta->execute($params);
    return true;
  }

  /**
   * Borra en forma logica o fisica un registro de la tabla
   * @version 1.0.0
   * @param boolean $deleteLogical
   * @return boolean
   * @throws PDOException
   */
  public function delete($deleteLogical = true) {
    $conn = $this->getConnection($this->config);
    $params = array(
        ':der_item' => $this->getItem()
    );
    switch ($deleteLogical) {
      case true:
        $sql = 'UPDATE bda_detalle_registro SET der_deleted_at = now() WHERE der_item = :der_item';
        break;
      case false:
        $sql = 'DELETE FROM bda_detalle_registro WHERE der_item = :der_item';
        break;
      default:
        throw new PDOException('Por favor borre de manera logica');
    }
    $respuesta = $conn->prepare($sql);
    $respuesta->execute($params);
    return true;
  }

}
