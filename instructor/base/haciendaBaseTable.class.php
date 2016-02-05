<?php

namespace FStudio\model\base;

use FStudio\fsModel as model;
use FStudio\myConfig as config;

/**
 * Description of haciendaBaseTable
 *
 * @author nombre completo <su@correo.com>
 * @package FStudio
 * @subpackage model
 * @subpackage base
 * @version 1.0.0
 */
class haciendaBaseTable extends model {

  const ID = 'hac_id';
  const DESCRIPCION = 'hac_descripcion';
  const DESCRIPCION_LENGTH = 80;
  const UBICACION = 'hac_ubicacion';
  const UBICACION_LENGTH = 100;
  const REPRESENTANTE_LEGAL = 'hac_representante_legal';
  const REPRESENTANTE_LEGAL_LENGTH = 100;
  const CREATED_AT = 'hac_created_at';
  const UPDATED_AT = 'hac_updated_at';
  const DELETED_AT = 'hac_deleted_at';
  const _SEQUENCE = 'bda_hacienda_hac_id_seq';
  const _TABLE = 'bda_hacienda';

  /**
   * Configuración del sistema
   * @var config
   */
  protected $config;
  private $id;
  private $descripcion;
  private $ubicacion;
  private $representante_legal;
  private $created_at;
  private $updated_at;
  private $deleted_at;

  public function __construct(config $config, $id = null, $descripcion = null, $ubicacion = null, $representante_legal = null, $created_at = null, $updated_at = null, $deleted_at = null) {
    $this->config = $config;
    $this->id = $id;
    $this->descripcion = $descripcion;
    $this->ubicacion = $ubicacion;
    $this->representante_legal = $representante_legal;
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

  public function getUbicacion() {
    return $this->ubicacion;
  }

  public function getRepresentanteLegal() {
    return $this->representante_legal;
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

  public function setUbicacion($ubicacion) {
    $this->ubicacion = $ubicacion;
  }

  public function setRepresentanteLegal($representante_legal) {
    $this->representante_legal = $representante_legal;
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
