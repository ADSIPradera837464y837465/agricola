<?php

namespace FStudio\model\base;

use FStudio\fsModel as model;
use FStudio\myConfig as config;

/**
 * Description of laboresMaquinaEquipoBaseTable
 *
 * @author nombre completo <su@correo.com>
 * @package FStudio
 * @subpackage model
 * @subpackage base
 * @version 1.0.0
 */
class laboresMaquinaEquipoBaseTable extends model {

  const ID = 'lme_numero';
  const HACIENDA_ID = 'hac_id';
  const TERCERO_ID = 'ter_id';
  const TIPO_DOCUMENTO_ID = 'tpd_id';
  const IMPLEMENTO_ID = 'imp_id';
  const FECHA = 'lme_fecha';
  const ESTADO = 'lme_estado';
  const TIEMPO = 'lme_tiempo';
  const TOTAL_HORAS_TRABAJADAS = 'lme_total_horas_trabajadas';
  const CREATED_AT = 'lme_created_at';
  const UPDATED_AT = 'lme_updated_at';
  const DELETED_AT = 'lme_deleted_at';
  const _TABLE = 'bda_labores_maqina_equipo';

  /**
   * Configuración del sistema
   * @var config
   */
  protected $config;
  private $id;
  private $hacienda_id;
  private $tercero_id;
  private $tipo_documento_id;
  private $implemento_id;
  private $fecha;
  private $estado;
  private $tiempo;
  private $total_horas_trabajadas;
  private $created_at;
  private $updated_at;
  private $deleted_at;

  public function __construct(config $config, $id = null, $hacienda_id = null, $tercero_id = null, $tipo_documento_id = null, $implemento_id = null, $fecha = null, $estado = null, $tiempo = null, $total_horas_trabajadas = null, $created_at = null, $updated_at = null, $deleted_at = null) {
    $this->config = $config;
    $this->id = $id;
    $this->hacienda_id = $hacienda_id;
    $this->tercero_id = $tercero_id;
    $this->tipo_documento_id = $tipo_documento_id;
    $this->implemento_id = $implemento_id;
    $this->fecha = $fecha;
    $this->estado = $estado;
    $this->tiempo = $tiempo;
    $this->total_horas_trabajadas = $total_horas_trabajadas;
    $this->created_at = $created_at;
    $this->updated_at = $updated_at;
    $this->deleted_at = $deleted_at;
  }

  public function getId() {
    return $this->id;
  }

  public function getHaciendaId() {
    return $this->hacienda_id;
  }

  public function getTerceroId() {
    return $this->tercero_id;
  }

  public function getTipoDocumentoId() {
    return $this->tipo_documento_id;
  }

  public function getImplementoId() {
    return $this->implemento_id;
  }

  public function getFecha() {
    return $this->fecha;
  }

  public function getEstado() {
    return $this->estado;
  }

  public function getTiempo() {
    return $this->tiempo;
  }

  public function getTotalHorasTrabajadas() {
    return $this->total_horas_trabajadas;
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

  public function setHaciendaId($hacienda_id) {
    $this->hacienda_id = $hacienda_id;
  }

  public function setTerceroId($tercero_id) {
    $this->tercero_id = $tercero_id;
  }

  public function setTipoDocumentoId($tipo_documento_id) {
    $this->tipo_documento_id = $tipo_documento_id;
  }

  public function setImplementoId($implemento_id) {
    $this->implemento_id = $implemento_id;
  }

  public function setFecha($fecha) {
    $this->fecha = $fecha;
  }

  public function setEstado($estado) {
    $this->estado = $estado;
  }

  public function setTiempo($tiempo) {
    $this->tiempo = $tiempo;
  }

  public function setTotalHorasTrabajadas($total_horas_trabajadas) {
    $this->total_horas_trabajadas = $total_horas_trabajadas;
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
