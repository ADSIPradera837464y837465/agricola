<?php

namespace FStudio\model\base;

use FStudio\fsModel as model;
use FStudio\myConfig as config;

/**
 * Description of terceroBaseTable
 *
 * @author nombre completo <su@correo.com>
 * @package FStudio
 * @subpackage model
 * @subpackage base
 * @version 1.0.0
 */
class terceroBaseTable extends model {

  const ID = 'ter_id';
  const NOMBRE = 'ter_nombre';
  const NOMBRE_LENGTH = 80;
  const APELLIDO = 'ter_apellido';
  const APELLIDO_LENGTH = 80;
  const TELEFONO = 'ter_telefono';
  const TELEFONO_LENGTH = 20;
  const DIRECCION = 'ter_direccion';
  const DIRECCION_LENGTH = 100;
  const CORREO = 'ter_correo';
  const CORREO_LENGTH = 100;
  const CARGO_ID = 'car_id';
  const TIPO_ID = 'tpi_id';
  const TIPO_TERCERO_ID = 'tit_id';
  const CREATED_AT = 'ter_created_at';
  const UPDATED_AT = 'ter_updated_at';
  const DELETED_AT = 'ter_deleted_at';
  const _SEQUENCE = 'bda_tercero_ter_id_seq';
  const _TABLE = 'bda_tercero';

  /**
   * Configuración del sistema
   * @var config
   */
  protected $config;
  private $id;
  private $nombre;
  private $apellido;
  private $telefono;
  private $direccion;
  private $correo;
  private $cargo_id;
  private $tipo_id;
  private $tipo_tercero_id;
  private $created_at;
  private $updated_at;
  private $deleted_at;

  public function __construct(config $config, $id = null, $nombre = null, $apellido = null, $telefono = null, $direccion = null, $correo = null, $cargo_id = null, $tipo_id = null, $tipo_tercero_id = null, $created_at = null, $updated_at = null, $deleted_at = null) {
    $this->config = $config;
    $this->id = $id;
    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->telefono = $telefono;
    $this->direccion = $direccion;
    $this->correo = $correo;
    $this->cargo_id = $cargo_id;
    $this->tipo_id = $tipo_id;
    $this->tipo_tercero_id = $tipo_tercero_id;
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

  public function getApellido() {
    return $this->apellido;
  }

  public function getTelefono() {
    return $this->telefono;
  }

  public function getDireccion() {
    return $this->direccion;
  }

  public function getCorreo() {
    return $this->correo;
  }

  public function getCargoId() {
    return $this->cargo_id;
  }

  public function getTipoId() {
    return $this->tipo_id;
  }

  public function getTipoTerceroId() {
    return $this->tipo_tercero_id;
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

  public function setApellido($apellido) {
    $this->apellido = $apellido;
  }

  public function setTelefono($telefono) {
    $this->telefono = $telefono;
  }

  public function setDireccion($direccion) {
    $this->direccion = $direccion;
  }

  public function setCorreo($correo) {
    $this->correo = $correo;
  }

  public function setCargoId($cargo_id) {
    $this->cargo_id = $cargo_id;
  }

  public function setTipoId($tipo_id) {
    $this->tipo_id = $tipo_id;
  }

  public function setTipoTerceroId($tipo_tercero_id) {
    $this->tipo_tercero_id = $tipo_tercero_id;
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
