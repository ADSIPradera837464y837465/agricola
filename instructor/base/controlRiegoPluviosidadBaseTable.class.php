<?php

namespace FStudio\model\base;

use FStudio\fsModel as model;
use FStudio\myConfig as config;

/**
 * Description of controlRiegoPluviosidadBaseTable
 *
 * @author nombre completo <su@correo.com>
 * @package FStudio
 * @subpackage model
 * @subpackage base
 * @version 1.0.0
 */
class controlRiegoPluviosidadBaseTable extends model {

  const ID = 'crp_id';
  const FECHA = 'crp_fecha';
  const HORA_INICIO = 'crp_hora_inicio';
  const HORA_FIN = 'crp_hora_fin';
  const CANTIDAD_M3_HORA = 'crp_cantidad_m3_hora';
  const OBSERVACION = 'crp_observacion';
  const OBSERVACION_LENGTH = 2048;
  const SUERTE_ID = 'sue_id';
  const HACIENDA_ID = 'hac_id';
  const TERCERO_ID = 'ter_id';
  const CREATED_AT = 'crp_created_at';
  const UPDATED_AT = 'crp_updated:at';
  const DELETED_AT = 'crp_deleted_at';
  const _SEQUENCE = 'bda_contro_riego_pluviosidad_crp_id_seq';
  const _TABLE = 'bda_control_riego_pluviosidad';

  /**
   * Configuración del sistema
   * @var config
   */
  protected $config;
  private $id;
  private $fecha;
  private $hora_inicio;
  private $hora_fin;
  private $cantidad_m3_hora;
  private $observacion;
  private $suerte_id;
  private $hacienda_id;
  private $tercero_id;
  private $created_at;
  private $updated_at;
  private $deleted_at;

  public function __construct(config $config, $id = null, $fecha = null, $hora_inicio = null, $hora_fin = null, $cantidad_m3_hora = null, $observacion = null, $suerte_id = null, $hacienda_id = null, $tercero_id = null, $created_at = null, $updated_at = null, $deleted_at = null) {
    $this->config = $config;
    $this->id = $id;
    $this->fecha = $fecha;
    $this->hora_inicio = $hora_inicio;
    $this->hora_fin = $hora_fin;
    $this->cantidad_m3_hora = $cantidad_m3_hora;
    $this->observacion = $observacion;
    $this->suerte_id = $suerte_id;
    $this->hacienda_id = $hacienda_id;
    $this->tercero_id = $tercero_id;
    $this->created_at = $created_at;
    $this->updated_at = $updated_at;
    $this->deleted_at = $deleted_at;
  }

  public function getId() {
    return $this->id;
  }

  public function getFecha() {
    return $this->fecha;
  }

  public function getHoraInicio() {
    return $this->hora_inicio;
  }

  public function getHoraFin() {
    return $this->hora_fin;
  }

  public function getCantidadM3Hora() {
    return $this->cantidad_m3_hora;
  }

  public function getObservacion() {
    return $this->observacion;
  }

  public function getSuerteId() {
    return $this->suerte_id;
  }

  public function getHaciendaId() {
    return $this->hacienda_id;
  }

  public function getTerceroId() {
    return $this->tercero_id;
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

  public function setFecha($fecha) {
    $this->fecha = $fecha;
  }

  public function setHoraInicio($hora_inicio) {
    $this->hora_inicio = $hora_inicio;
  }

  public function setHoraFin($hora_fin) {
    $this->hora_fin = $hora_fin;
  }

  public function setCantidadM3Hora($cantidad_m3_hora) {
    $this->cantidad_m3_hora = $cantidad_m3_hora;
  }

  public function setObservacion($observacion) {
    $this->observacion = $observacion;
  }

  public function setSuerteId($suerte_id) {
    $this->suerte_id = $suerte_id;
  }

  public function setHaciendaId($hacienda_id) {
    $this->hacienda_id = $hacienda_id;
  }

  public function setTerceroId($tercero_id) {
    $this->tercero_id = $tercero_id;
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
