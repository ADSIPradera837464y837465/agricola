<?php

namespace FStudio\model\base;

use FStudio\fsModel as model;
use FStudio\myConfig as config;

/**
 * Description of servicioMaquinaBaseTable
 *
 * @author nombre completo <su@correo.com>
 * @package FStudio
 * @subpackage model
 * @subpackage base
 * @version 1.0.0
 */
class servicioMaquinaBaseTable extends model {

  const ID = 'ser_id';
  const DESCRIPCION = 'ser_descripcion';
  const DESCRIPCION_LENGTH = 80;
  const ESTADO = 'ser_estado';
  const ESTADO_LENGTH = 30;
  const CREATED_AT = 'ser_created_at';
  const UPDATED_AT = 'ser_updated_at';
  const DELETED_AT = 'ser_deleted_at';
  const _SEQUENCE = 'bda_servicio_maquina_seq';
  const _TABLE = 'bda_servicio_maquina';

  /**
   * Configuración del sistema
   * @var config
   */
  protected $config;
  private $id;
  private $descripcion;
  private $estado;
  private $created_at;
  private $updated_at;
  private $deleted_at;

  public function __construct(config $config, $id = null, $descripcion = null, $estado = null, $created_at = null, $updated_at = null, $deleted_at = null) {
    $this->config = $config;
    $this->id = $id;
    $this->descripcion = $descripcion;
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
