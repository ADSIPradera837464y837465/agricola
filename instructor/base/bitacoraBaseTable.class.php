<?php

namespace FStudio\model\base;

use FStudio\fsModel as model;
use FStudio\myConfig as config;

/**
 * Description of bitacoraBaseTable
 *
 * @author nombre completo <su@correo.com>
 * @package FStudio
 * @subpackage model
 * @subpackage base
 * @version 1.0.0
 */
class bitacoraBaseTable extends model {

  const ID = 'bit_id';
  const USUARIO_ID = 'usr_id';
  const ACCION = 'bit_accion';
  const ACCION_LENGTH = 80;
  const TABLA = 'bit_tabla';
  const TABLA_LENGTH = 80;
  const REGISTRO = 'bit_registro';
  const OBSERVACION = 'bit_observacion';
  const OBSERVACION_LENGTH = 1024;
  const FECHA = 'bit_fecha';
  const _SEQUENCE = 'bda_bitacora_bit_id_seq';
  const _TABLE = 'bda_bitacora';

  /**
   * Configuración del sistema
   * @var config
   */
  protected $config;
  private $id;
  private $usuario_id;
  private $accion;
  private $tabla;
  private $registro;
  private $observacion;
  private $fecha;

  public function __construct(config $config, $id = null, $usuario_id = null, $accion = null, $tabla = null, $registro = null, $observacion = null, $fecha = null) {
    $this->config = $config;
    $this->id = $id;
    $this->usuario_id = $usuario_id;
    $this->accion = $accion;
    $this->tabla = $tabla;
    $this->registro = $registro;
    $this->observacion = $observacion;
    $this->fecha = $fecha;
  }

  public function getId() {
    return $this->id;
  }

  public function getUsuarioId() {
    return $this->usuario_id;
  }

  public function getAccion() {
    return $this->accion;
  }

  public function getTabla() {
    return $this->tabla;
  }

  public function getRegistro() {
    return $this->registro;
  }

  public function getObservacion() {
    return $this->observacion;
  }

  public function getFecha() {
    return $this->fecha;
  }

  public function setId($id) {
    $this->id = $id;
  }

  public function setUsuarioId($usuario_id) {
    $this->usuario_id = $usuario_id;
  }

  public function setAccion($accion) {
    $this->accion = $accion;
  }

  public function setTabla($tabla) {
    $this->tabla = $tabla;
  }

  public function setRegistro($registro) {
    $this->registro = $registro;
  }

  public function setObservacion($observacion) {
    $this->observacion = $observacion;
  }

  public function setFecha($fecha) {
    $this->fecha = $fecha;
  }

}
