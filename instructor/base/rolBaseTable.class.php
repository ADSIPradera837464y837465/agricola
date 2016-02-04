<?php

namespace FStudio\model\base;

use FStudio\fsModel as model;
use FStudio\myConfig as config;

/**
 * Description of rolBaseTable
 *
 * @author nombre completo <su@correo.com>
 * @package FStudio
 * @subpackage model
 * @subpackage base
 * @version 1.0.0
 */
class rolBaseTable extends model {

  const ID = 'rol_id';
  const NOMBRE = 'rol_nombre';
  const NOMBRE_LENGTH = 80;
  const CREATED_AT = 'rol_created_at';
  const UPDATED_AT = 'rol_updated_at';
  const DELETED_AT = 'rol_deleted_at';
  const _SEQUENCE = 'bda_rol_rol_id_seq';
  const _TABLE = 'bda_rol';

  /**
   * Configuración del sistema
   * @var config
   */
  protected $config;
  private $id;
  private $nombre;
  private $created_at;
  private $updated_at;
  private $deleted_at;

  public function __construct(config $config, $id = null, $nombre = null, $created_at = null, $updated_at = null, $deleted_at = null) {
    $this->config = $config;
    $this->id = $id;
    $this->nombre = $nombre;
    $this->created_at = $created_at;
    $this->updated_at = $updated_at;
    $this->deleted_at = $deleted_at;
  }

  public function getId() {
    return $this->id;
  }

  public function getNombre() {
    return $this->nombre;
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

  public function setNombre($nombre) {
    $this->nombre = $nombre;
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
