<?php

namespace FStudio\model\base;

use FStudio\fsModel as model;
use FStudio\myConfig as config;

/**
 * Description of suerteBaseTable
 *
 * @author nombre completo <su@correo.com>
 * @package FStudio
 * @subpackage model
 * @subpackage base
 * @version 1.0.0
 */
class suerteBaseTable extends model {

  const ID = 'sue_id';
  const DESCRIPCION = 'sue_descripcion';
  const DESCRIPCION_LENGTH = 80;
  const AREA = 'sue_area';
  const TIPO_SUELO_ID = 'tis_id';
  const CREATED_AT = 'sue_created_at';
  const UPDATED_AT = 'sue_updated_at';
  const DELETED_AT = 'sue_deleted_at';
  const _SEQUENCE = 'bda_suerte_sue_id_seq';
  const _TABLE = 'bda_suerte';

  /**
   * Configuración del sistema
   * @var config
   */
  protected $config;
  private $id;
  private $descripcion;
  private $area;
  private $tipo_suelo_id;
  private $created_at;
  private $updated_at;
  private $deleted_at;

  public function __construct(config $config, $id = null, $descripcion = null, $area = null, $tipo_suelo_id = null, $created_at = null, $updated_at = null, $deleted_at = null) {
    $this->config = $config;
    $this->id = $id;
    $this->descripcion = $descripcion;
    $this->area = $area;
    $this->tipo_suelo_id = $tipo_suelo_id;
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

  public function getArea() {
    return $this->area;
  }

  public function getTipoSueloId() {
    return $this->tipo_suelo_id;
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

  public function setArea($area) {
    $this->area = $area;
  }

  public function setTipoSueloId($tipo_suelo_id) {
    $this->tipo_suelo_id = $tipo_suelo_id;
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
