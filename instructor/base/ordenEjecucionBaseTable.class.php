<?php

namespace FStudio\model\base;

use FStudio\fsModel as model;
use FStudio\myConfig as config;

/**
 * Description of ordenEjecucionBaseTable
 *
 * @author nombre completo <su@correo.com>
 * @package FStudio
 * @subpackage model
 * @subpackage base
 * @version 1.0.0
 */
class ordenEjecucionBaseTable extends model {

  const ID = 'ore_id';
  const TERCERO_ID_ELABORA = 'ter_id_elabora';
  const ORDEN_SALIDA_ID = 'ors_id';
  const MAQUINA_ID = 'maq_id';
  const FECHA = 'ore_fecha';
  const OBSERVACION = 'ore_observacion';
  const OBSERVACION_LENGTH = 1024;
  const CREATED_AT = 'ore_created_at';
  const UPDATED_AT = 'ore_updated_at';
  const DELETED_AT = 'ore_deleted_at';
  const _SEQUENCE = 'bda_orden_ejecucion_ore_id_seq';
  const _TABLE = 'bda_orden_ejecucion';

  /**
   * Configuración del sistema
   * @var config
   */
  protected $config;
  private $id;
  private $tercero_id_elabora;
  private $orden_salida_id;
  private $maquina_id;
  private $fecha;
  private $observacion;
  private $created_at;
  private $updated_at;
  private $deleted_at;

  public function __construct(config $config, $id = null, $tercero_id_elabora = null, $orden_salida_id = null, $maquina_id = null, $fecha = null, $observacion = null, $created_at = null, $updated_at = null, $deleted_at = null) {
    $this->config = $config;
    $this->id = $id;
    $this->tercero_id_elabora = $tercero_id_elabora;
    $this->orden_salida_id = $orden_salida_id;
    $this->maquina_id = $maquina_id;
    $this->fecha = $fecha;
    $this->observacion = $observacion;
    $this->created_at = $created_at;
    $this->updated_at = $updated_at;
    $this->deleted_at = $deleted_at;
  }

  public function getId() {
    return $this->id;
  }

  public function getTerceroIdElabora() {
    return $this->tercero_id_elabora;
  }

  public function getOrdenSalidaId() {
    return $this->orden_salida_id;
  }

  public function getMaquinaId() {
    return $this->maquina_id;
  }

  public function getFecha() {
    return $this->fecha;
  }

  public function getObservacion() {
    return $this->observacion;
  }

  public function getCreatedAt() {
    return $this->created_at;
  }

  public function getUpdatedAt() {
    return $this->updated_at;
  }

  public function getDeletedAt() {
    return $this->deleted_at;
  }

  public function setId($id) {
    $this->id = $id;
  }

  public function setTerceroIdElabora($tercero_id_elabora) {
    $this->tercero_id_elabora = $tercero_id_elabora;
  }

  public function setOrdenSalidaId($orden_salida_id) {
    $this->orden_salida_id = $orden_salida_id;
  }

  public function setMaquinaId($maquina_id) {
    $this->maquina_id = $maquina_id;
  }

  public function setFecha($fecha) {
    $this->fecha = $fecha;
  }

  public function setObservacion($observacion) {
    $this->observacion = $observacion;
  }

  public function setCreatedAt($created_at) {
    $this->created_at = $created_at;
  }

  public function setUpdatedAt($updated_at) {
    $this->updated_at = $updated_at;
  }

  public function setDeletedAt($deleted_at) {
    $this->deleted_at = $deleted_at;
  }

}
