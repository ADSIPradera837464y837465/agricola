<?php

namespace FStudio\model\base;

use FStudio\fsModel as model;
use FStudio\myConfig as config;

/**
 * Description of datoUsuarioBaseTable
 *
 * @author nombre completo <su@correo.com>
 * @package FStudio
 * @subpackage model
 * @subpackage base
 * @version 1.0.0
 */
class datoUsuarioBaseTable extends model {

  const ID = 'dus_id';
  const USUARIO_ID = 'usr_id';
  const CEDULA = 'dus_cedula';
  const CEDULA_LENGTH = 20;
  const NOMBRE = 'dus_nombre';
  const NOMBRE_LENGTH = 80;
  const APELLIDOS = 'dus_apellidos';
  const APELLIDOS_LENGTH = 80;
  const MOVIL = 'dus_movil';
  const MOVIL_LENGTH = 12;
  const CORREO = 'dus_correo';
  const CORREO_LENGTH = 120;
  const IMAGEN = 'dus_imagen';
  const IMAGEN_LENGTH = 36;
  const SEXO = 'dus_sexo';
  const CREATED_AT = 'dus_created_at';
  const UPDATED_AT = 'dus_updated_at';
  const DELETED_AT = 'dus_deleted_at';
  const _TABLE = 'bda_dato_usuario';

  /**
   * Configuración del sistema
   * @var config
   */
  protected $config;
  private $id;
  private $usuario_id;
  private $cedula;
  private $nombre;
  private $apellidos;
  private $movil;
  private $correo;
  private $imagen;
  private $sexo;
  private $created_at;
  private $updated_at;
  private $deleted_at;

  public function __construct(config $config, $id = null, $usuario_id = null, $cedula = null, $nombre = null, $apellidos = null, $movil = null, $correo = null, $imagen = null, $sexo = null, $created_at = null, $updated_at = null, $deleted_at = null) {
    $this->config = $config;
    $this->id = $id;
    $this->usuario_id = $usuario_id;
    $this->cedula = $cedula;
    $this->nombre = $nombre;
    $this->apellidos = $apellidos;
    $this->movil = $movil;
    $this->correo = $correo;
    $this->imagen = $imagen;
    $this->sexo = $sexo;
    $this->created_at = $created_at;
    $this->updated_at = $updated_at;
    $this->deleted_at = $deleted_at;
  }

  public function getId() {
    return $this->id;
  }

  public function getUsuarioId() {
    return $this->usuario_id;
  }

  public function getCedula() {
    return $this->cedula;
  }

  public function getNombre() {
    return $this->nombre;
  }

  public function getApellidos() {
    return $this->apellidos;
  }

  public function getMovil() {
    return $this->movil;
  }

  public function getCorreo() {
    return $this->correo;
  }

  public function getImagen() {
    return $this->imagen;
  }

  public function getSexo() {
    return $this->sexo;
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

  public function setUsuarioId($usuario_id) {
    $this->usuario_id = $usuario_id;
  }

  public function setCedula($cedula) {
    $this->cedula = $cedula;
  }

  public function setNombre($nombre) {
    $this->nombre = $nombre;
  }

  public function setApellidos($apellidos) {
    $this->apellidos = $apellidos;
  }

  public function setMovil($movil) {
    $this->movil = $movil;
  }

  public function setCorreo($correo) {
    $this->correo = $correo;
  }

  public function setImagen($imagen) {
    $this->imagen = $imagen;
  }

  public function setSexo($sexo) {
    $this->sexo = $sexo;
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
