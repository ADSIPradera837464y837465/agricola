<?php

namespace FStudio\model\base;

use FStudio\fsModel as model;
use FStudio\myConfig as config;

/**
 * Description of controlSalidaCanaBaseTable
 *
 * @author nombre completo <su@correo.com>
 * @package FStudio
 * @subpackage model
 * @subpackage base
 * @version 1.0.0
 */
class controlSalidaCanaBaseTable extends model {

  const ID = 'csc_id';
  const FECHA = 'csc_fecha';
  const TOTAL_VAGONES = 'csc_total_vagones';
  const NOTAS = 'csc_notas';
  const NOTAS_LENGTH = 2048;
  const TOTAL_TRENES = 'csc_total_trenes';
  const TURNO_ID = 'tur_id';
  const SUERTE_ID = 'sue_id';
  const TERCERO_ID = 'ter_id';
  const CREATED_AT = 'csc_created_at';
  const UPDATED_AT = 'csc_updated:at';
  const DELETED_AT = 'csc_deleted_at';
  const _SEQUENCE = 'bda_control_salida_cana_csc_id_seq';
  const _TABLE = 'bda_control_salida_cana';

  /**
   * Configuración del sistema
   * @var config
   */
  protected $config;
  private $id;
  private $fecha;
  private $total_vagones;
  private $notas;
  private $total_trenes;
  private $turno_id;
  private $suerte_id;
  private $tercero_id;
  private $created_at;
  private $updated_at;
  private $deleted_at;

  public function __construct(config $config, $id = null, $fecha = null, $total_vagones = null, $notas = null, $total_trenes = null, $turno_id = null, $suerte_id = null, $tercero_id = null, $created_at = null, $updated_at = null, $deleted_at = null) {
    $this->config = $config;
    $this->id = $id;
    $this->fecha = $fecha;
    $this->total_vagones = $total_vagones;
    $this->notas = $notas;
    $this->total_trenes = $total_trenes;
    $this->turno_id = $turno_id;
    $this->suerte_id = $suerte_id;
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

  public function getTotalVagones() {
    return $this->total_vagones;
  }

  public function getNotas() {
    return $this->notas;
  }

  public function getTotalTrenes() {
    return $this->total_trenes;
  }

  public function getTurnoId() {
    return $this->turno_id;
  }

  public function getSuerteId() {
    return $this->suerte_id;
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

  public function setTotalVagones($total_vagones) {
    $this->total_vagones = $total_vagones;
  }

  public function setNotas($notas) {
    $this->notas = $notas;
  }

  public function setTotalTrenes($total_trenes) {
    $this->total_trenes = $total_trenes;
  }

  public function setTurnoId($turno_id) {
    $this->turno_id = $turno_id;
  }

  public function setSuerteId($suerte_id) {
    $this->suerte_id = $suerte_id;
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
