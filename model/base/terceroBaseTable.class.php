<?php

namespace FStudio\model\base;

use FStudio\fsModel as model;
use FStudio\myConfig as config;

/**
 * Description of terceroBaseTable
 * 
 * @author Duvier Marin Escobar <duvierm24@gmail.com>
 * @package FStudio
 * @subpackage model
 * @subpackage base
 * @version 1.0.0
 */
class terceroBaseTable extends model {

  /**
   * ID de la tabla
   */
  const ID = 'ter_id';

  /**
   * nombre del tercero
   */
  const NOMBRE = 'ter_nombre';

  /**
   * longitud del nombre
   */
  const NOMBRE_LENGTH = 80;

  /**
   * apellido del tercero
   */
  const APELLIDO = 'ter_apellido';

  /**
   * Longitud del apellido
   */
  const APELLIDO_LENGTH = 80;

  /**
   * telefono del tercero
   */
  const TELEFONO = 'ter_telefono';

  /**
   * Longitud del telefono
   */
  const TELEFONO_LENGTH = 20;

  /**
   * direccion del tercero
   */
  const DIRECCION = 'ter_direccion';

  /**
   * Longitud de la dirección
   */
  const DIRECCION_LENGTH = 100;

  /**
   * correo del tercero
   */
  const CORREO = 'ter_correo';

  /**
   * Longitud del correo
   */
  const CORREO_LENGTH = 100;

  /**
   * Foranea de la tabla  cargo
   */
  const CARGO_ID = 'car_id';

  /**
   * Foranea de la tabla  tipo_id
   */
  const TIPO_ID = 'tpi_id';

  /**
   * foranea de tipo terxcero
   */
  const TIPO_TERCERO_ID = 'tit_id';

  /**
   * Fecha de creacion del registro
   */
  const CREATED_AT = 'ter_created_at';

  /**
   * Fecha de actualizacion del registro
   */
  const UPDATED_AT = 'ter_updated_at';

  /**
   * Fecha de eliminacion del registro
   */
  const DELETED_AT = 'ter_deleted_at';

  /**
   * Secuencia de la tabla para la llave primaria
   */
  const _SEQUENCE = 'bda_tercero_ter_id_seq';

  /**
   * Nombre de la tabla
   */
  const _TABLE = 'bda_tercero';

  /**
   * Configuración del sistema
   * @var config
   */
  protected $config;

  /**
   * id de la tabla
   * @var integer
   */
  private $id;

  /**
   * nombre del tercero
   * @var string
   */
  private $nombre;

  /**
   * apellido del tercero
   * @var string
   */
  private $apellido;

  /**
   * telefono del tercero
   * @var string
   */
  private $telefono;

  /**
   * direccion del tercero
   * @vaar string
   */
  private $direccion;

  /**
   * correo del tercero
   * @var string
   */
  private $correo;

  /**
   * Foranea de la tabla  cargo
   * @var integer
   */
  private $cargo_id;

  /**
   * Foranea de la tabla tipo_id
   * @var integer
   */
  private $tipo_id;

  /**
   * Foranea de la tabla  tipo_tercero
   * @var integer
   */
  private $tipo_tercero_id;

  /**
   * Fecha de creacion del registro
   * @var date_time
   */
  private $created_at;

  /**
   * Fecha de actualización del registro
   * @var date_time
   */
  private $updated_at;

  /**
   * Fecha de eliminación del registro
   * @var date_time
   */
  private $deleted_at;

  /**
   * Constructor de la tabla tercero
   * @version 1.0.0
   * @param config $config
   * @param integer $id
   * @param string $nombre
   * @param string $apellido
   * @param string $telefono
   * @param string $direccion
   * @param string $correo
   * @param integer $tipoTercero
   * @param integer $CargoId
   * @param integer $tipoId
   * @param date_time $createdAt
   * @param date_time $updatedAt
   * @param date_time $deletedAt
   */
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

  /**
   * Retorna el id del registro
   * @version 1.0.0
   * @return integer
   */
  public function getId() {
    return $this->id;
  }

  /**
   * retorna el nombre del tercero registrado
   * @version 1.0.0
   * @return string
   */
  public function getNombre() {
    return $this->nombre;
  }

  /**
   * Retorna el apellido del tercero registrado
   * @version 1.0.0
   * @return string
   */
  public function getApellido() {
    return $this->apellido;
  }

  /**
   * Retorna el telefono registrado
   * @version 1.0.0
   * @return string
   */
  public function getTelefono() {
    return $this->telefono;
  }

  /**
   * Retorna la direccion registrada
   * @version 1.0.0
   * @return string
   */
  public function getDireccion() {
    return $this->direccion;
  }

  /**
   * Retorna el correo registrado
   * @version 1.0.0
   * @return string
   */
  public function getCorreo() {
    return $this->correo;
  }

  /**
   * Retorna el id del cargo
   * @version 1.0.0
   * @return integer
   */
  public function getCargoId() {
    return $this->cargo_id;
  }

  /**
   * Retona el id de tipo_id
   * @version 1.0.0
   * @return integer
   */
  public function getTipoId() {
    return $this->tipo_id;
  }

  /**
   * Retorna el id del tipo de tercero
   * @version 1.0.0
   * @return integer
   */
  public function getTipoTerceroId() {
    return $this->tipo_tercero_id;
  }

  /**
   * Tetorna la fecha de creacion del registro
   * @version 1.0.0
   * @return date_time
   */
  public function getCreatedAt() {
    return $this->created_at;
  }

  /**
   * Tetorna la fecha de actualización del registro
   * @version 1.0.0
   * @return date_time
   */
  public function getUpdatedAt() {
    return $this->updated_at;
  }

  /**
   * Tetorna la fecha de eliminación del registro
   * @version 1.0.0
   * @return date_time
   */
  public function getDeletedAt() {
    return $this->deleted_at;
  }

  /**
   * Fija el id para el registro en la tabla
   * @param integer $id
   */
  public function setId($id) {
    $this->id = $id;
  }

  /**
   * Fija el nombre para el tercero a registrar
   * @param string $nombre
   */
  public function setNombre($nombre) {
    $this->nombre = $nombre;
  }

  /**
   * Fija el apellido del tercero
   * @param string $apellido
   */
  public function setApellido($apellido) {
    $this->apellido = $apellido;
  }

  /**
   * Fija el telefono del tercero
   * @param string $telefono
   */
  public function setTelefono($telefono) {
    $this->telefono = $telefono;
  }

  /**
   * Fija la dirección del tercero
   * @param string $direccion
   */
  public function setDireccion($direccion) {
    $this->direccion = $direccion;
  }

  /**
   * Fija el correo del tercero
   * @param string $correo
   */
  public function setCorreo($correo) {
    $this->correo = $correo;
  }

  /**
   * Fija el tipo de cargo del tercero
   * @param integer $cargo_id
   */
  public function setCargoId($cargo_id) {
    $this->cargo_id = $cargo_id;
  }

  /**
   * Fija el tipo de identificación del tercero
   * @param integer $tipo_id
   */
  public function setTipoId($tipo_id) {
    $this->tipo_id = $tipo_id;
  }

  /**
   * Fija el tipo de tercero
   * @param integer $tipo_tercero_id
   */
  public function setTipoTerceroId($tipo_tercero_id) {
    $this->tipo_tercero_id = $tipo_tercero_id;
  }

  /**
   * Fija la fecha de creació del registro
   * @param date_time $created_at
   */
  public function setCreatedAt($created_at) {
    $this->created_at = $created_at;
  }

  /**
   * Fija la fecha de actualización del registro
   * @param date_time $updated_at
   */
  public function setUpdatedAt($updated_at) {
    $this->updated_at = $updated_at;
  }

  /**
   * Fija la fecha de eliminacio del registro
   * @param date_time $deleted_at
   */
  public function setDeletedAt($deleted_at) {
    $this->deleted_at = $deleted_at;
  }

}
