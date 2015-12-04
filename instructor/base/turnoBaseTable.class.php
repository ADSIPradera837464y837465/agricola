<?php

namespace FStudio\model\base;

use FStudio\fsModel as model;
use FStudio\myConfig as config;

/**
 * Description of turnoBaseTable
 *
 * @author nombre completo <su@correo.com>
 * @package FStudio
 * @subpackage model
 * @subpackage base
 * @version 1.0.0
 */
class turnoBaseTable extends model {

  const ID = 'tur_id';
  const DESCRIPCION = 'tur_descripcion';
  const DESCRIPCION_LENGTH = 80;
  const HORA_INICIO = 'tur_hora_inicio';
  const HORA_FIN = 'tur_hora_fin';
  const ESTADO = 'tur_estado';
  const ESTADO_LENGTH = 80;
  const CREATED_AT = 'tur_created_at';
  const UPDATED_AT = 'tur_updated_at';
  const DELETED_AT = 'tur_deleted_at';
  const _SEQUENCE = 'bda_turno_tur_id_seq';
  const _TABLE = 'bda_turno';

  /**
   * Configuración del sistema
   * @var config
   */
  protected $config;
  private $id;
  private $descripcion;
  private $hora_inicio;
  private $hora_fin;
  private $estado;
  private $created_at;
  private $updated_at;
  private $deleted_at;

  public function __construct(config $config, $id = null, $descripcion = null, $hora_inicio = null, $hora_fin = null, $estado = null, $created_at = null, $updated_at = null, $deleted_at = null) {
    $this->config = $config;
    $this->id = $id;
    $this->descripcion = $descripcion;
    $this->hora_inicio = $hora_inicio;
    $this->hora_fin = $hora_fin;
    $this->estado = $estado;
    $this->created_at = $created_at;
    $this->updated_at = $updated_at;
    $this->deleted_at = $deleted_at;
  }

  public function getId() {
    return $this->id;
  }

  public function getDescripcion() {
    return $this->descripcion;
  }

  public function getHoraInicio() {
    return $this->hora_inicio;
  }

  public function getHoraFin() {
    return $this->hora_fin;
  }

  public function getEstado() {
    return $this->estado;
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

  public function setDescripcion($descripcion) {
    $this->descripcion = $descripcion;
  }

  public function setHoraInicio($hora_inicio) {
    $this->hora_inicio = $hora_inicio;
  }

  public function setHoraFin($hora_fin) {
    $this->hora_fin = $hora_fin;
  }

  public function setEstado($estado) {
    $this->estado = $estado;
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
