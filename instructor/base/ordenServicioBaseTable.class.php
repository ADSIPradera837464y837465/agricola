<?php

namespace FStudio\model\base;

use FStudio\fsModel as model;
use FStudio\myConfig as config;

/**
 * Description of ordenServicioBaseTable
 *
 * @author nombre completo <su@correo.com>
 * @package FStudio
 * @subpackage model
 * @subpackage base
 * @version 1.0.0
 */
class ordenServicioBaseTable extends model {

  const ID = 'ors_id';
  const MAQUINA_ID = 'maq_id';
  const TIPO_MANTENIMIENTO_ID = 'tma_id';
  const TERCERO_ID_ELABORA = 'ter_id_elabora';
  const TERCERO_ID_REALIZA = 'ter_id_realiza';
  const FECHA = 'ors_fecha';
  const OBSERVACION = 'ors_observacion';
  const OBSERVACION_LENGTH = 1024;
  const CREATED_AT = 'ors_created_at';
  const UPDATED_AT = 'ors_updated_at';
  const DELETED_AT = 'ors_deleted_at';
  const _SEQUENCE = 'bda_orden_servicio_ors_id_seq';
  const _TABLE = 'bda_orden_servicio';

  /**
   * Configuración del sistema
   * @var config
   */
  protected $config;
  private $id;
  private $maquina_id;
  private $tipo_mantenimiento_id;
  private $tercero_id_elabora;
  private $tercero_id_realiza;
  private $fecha;
  private $observacion;
  private $created_at;
  private $updated_at;
  private $deleted_at;

  public function __construct(config $config, $id = null, $maquina_id = null, $tipo_mantenimiento_id = null, $tercero_id_elabora = null, $tercero_id_realiza = null, $fecha = null, $observacion = null, $created_at = null, $updated_at = null, $deleted_at = null) {
    $this->config = $config;
    $this->id = $id;
    $this->maquina_id = $maquina_id;
    $this->tipo_mantenimiento_id = $tipo_mantenimiento_id;
    $this->tercero_id_elabora = $tercero_id_elabora;
    $this->tercero_id_realiza = $tercero_id_realiza;
    $this->fecha = $fecha;
    $this->observacion = $observacion;
    $this->created_at = $created_at;
    $this->updated_at = $updated_at;
    $this->deleted_at = $deleted_at;
  }

  public function getId() {
    return $this->id;
  }

  public function getMaquinaId() {
    return $this->maquina_id;
  }

  public function getTipoMantenimientoId() {
    return $this->tipo_mantenimiento_id;
  }

  public function getTerceroIdElabora() {
    return $this->tercero_id_elabora;
  }

  public function getTerceroIdRealiza() {
    return $this->tercero_id_realiza;
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

  public function setMaquinaId($maquina_id) {
    $this->maquina_id = $maquina_id;
  }

  public function setTipoMantenimientoId($tipo_mantenimiento_id) {
    $this->tipo_mantenimiento_id = $tipo_mantenimiento_id;
  }

  public function setTerceroIdElabora($tercero_id_elabora) {
    $this->tercero_id_elabora = $tercero_id_elabora;
  }

  public function setTerceroIdRealiza($tercero_id_realiza) {
    $this->tercero_id_realiza = $tercero_id_realiza;
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
