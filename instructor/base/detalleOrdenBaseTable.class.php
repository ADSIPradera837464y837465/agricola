<?php

namespace FStudio\model\base;

use FStudio\fsModel as model;
use FStudio\myConfig as config;

/**
 * Description of detalleOrdenBaseTable
 *
 * @author nombre completo <su@correo.com>
 * @package FStudio
 * @subpackage model
 * @subpackage base
 * @version 1.0.0
 */
class detalleOrdenBaseTable extends model {

  const ID = 'deo_id';
  const ORDEN_SERVICIO_ID = 'ors_id';
  const SERVICIO_ID = 'ser_id';
  const ESTADO = 'deo_estado';
  const CREATED_AT = 'deo_created_at';
  const UPDATED_AT = 'deo_updated_at';
  const DELETED_AT = 'deo_deleted_at';
  const _SEQUENCE = 'bda_detalle_orden_deo_id_seq';
  const _TABLE = 'bda_detalle_orden';

  /**
   * Configuración del sistema
   * @var config
   */
  protected $config;
  private $id;
  private $orden_servicio_id;
  private $servicio_id;
  private $estado;
  private $created_at;
  private $updated_at;
  private $deleted_at;

  public function __construct(config $config, $id = null, $orden_servicio_id = null, $servicio_id = null, $estado = null, $created_at = null, $updated_at = null, $deleted_at = null) {
    $this->config = $config;
    $this->id = $id;
    $this->orden_servicio_id = $orden_servicio_id;
    $this->servicio_id = $servicio_id;
    $this->estado = $estado;
    $this->created_at = $created_at;
    $this->updated_at = $updated_at;
    $this->deleted_at = $deleted_at;
  }

  public function getId() {
    return $this->id;
  }

  public function getOrdenServicioId() {
    return $this->orden_servicio_id;
  }

  public function getServicioId() {
    return $this->servicio_id;
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

  public function setOrdenServicioId($orden_servicio_id) {
    $this->orden_servicio_id = $orden_servicio_id;
  }

  public function setServicioId($servicio_id) {
    $this->servicio_id = $servicio_id;
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
