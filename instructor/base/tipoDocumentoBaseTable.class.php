<?php

namespace FStudio\model\base;

use FStudio\fsModel as model;
use FStudio\myConfig as config;

/**
 * Description of tipoDocumentoBaseTable
 *
 * @author nombre completo <su@correo.com>
 * @package FStudio
 * @subpackage model
 * @subpackage base
 * @version 1.0.0
 */
class tipoDocumentoBaseTable extends model {

  const ID = 'tpd_id';
  const DESCRIPCION = 'tpd_descripcion';
  const DESCRIPCION_LENGTH = 80;
  const TIPO_MOVIMIENTO = 'tpd_tipo_movimiento';
  const TIPO_MOVIMIENTO_LENGTH = 80;
  const ESTADO = 'tpd_estado';
  const CREATED_AT = 'tpd_created_at';
  const UPDATED_AT = 'tpd_updated_at';
  const DELETED_AT = 'tpd_deleted_at';
  const _SEQUENCE = 'bda_tipo_documento_tpd_id_seq';
  const _TABLE = 'bda_tipo_documento';

  /**
   * Configuración del sistema
   * @var config
   */
  protected $config;
  private $id;
  private $descripcion;
  private $tipo_movimiento;
  private $estado;
  private $created_at;
  private $updated_at;
  private $deleted_at;

  public function __construct(config $config, $id = null, $descripcion = null, $tipo_movimiento = null, $estado = null, $created_at = null, $updated_at = null, $deleted_at = null) {
    $this->config = $config;
    $this->id = $id;
    $this->descripcion = $descripcion;
    $this->tipo_movimiento = $tipo_movimiento;
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

  public function getTipoMovimiento() {
    return $this->tipo_movimiento;
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

  public function setTipoMovimiento($tipo_movimiento) {
    $this->tipo_movimiento = $tipo_movimiento;
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
