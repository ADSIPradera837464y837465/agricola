<?php

namespace FStudio\model\base;

use FStudio\fsModel as model;
use FStudio\myConfig as config;

/**
 * Description of maquinaBaseTable
 *
 * @author nombre completo <su@correo.com>
 * @package FStudio
 * @subpackage model
 * @subpackage base
 * @version 1.0.0
 */
class maquinaBaseTable extends model {

  const ID = 'maq_id';
  const ESTADO = 'maq_estado';
  const ESTADO_LENGTH = 30;
  const VALOR = 'maq_valor';
  const FECHA_COMPRA = 'maq_fecha_compra';
  const NUMERO_CHASIS = 'maq_numero_chasis';
  const NUMERO_CHASIS_LENGTH = 80;
  const TIPO_ACCESORIO = 'maq_tipo_accesorio';
  const TIPO_ACCESORIO_LENGTH = 80;
  const HORAS_TRABAJADAS = 'maq_horas_trabajadas';
  const TIEMPO_MANTENIMIENTO_HORA = 'maq_tiempo_mantenimiento_hora';
  const NUMERO_SERIE = 'maq_numero_serie';
  const NUMERO_SERIE_LENGTH = 80;
  const MODELO = 'maq_modelo';
  const MODELO_LENGTH = 80;
  const HORAS_ACTIVIDAD = 'maq_horas_actividad';
  const VALOR_HORA = 'maq_valor_hora';
  const CREATED_AT = 'maq_created_at';
  const UPDATED_AT = 'maq_updated_at';
  const DELETED_AT = 'maq_deleted_at';
  const _SEQUENCE = 'bda_maquina_maq_id_seq';
  const _TABLE = 'bda_maquina';

  /**
   * Configuración del sistema
   * @var config
   */
  protected $config;
  private $id;
  private $estado;
  private $valor;
  private $fecha_compra;
  private $numero_chasis;
  private $tipo_accesorio;
  private $horas_trabajadas;
  private $tiempo_mantenimiento_hora;
  private $numero_serie;
  private $modelo;
  private $horas_actividad;
  private $valor_hora;
  private $created_at;
  private $updated_at;
  private $deleted_at;

  public function __construct(config $config, $id = null, $estado = null, $valor = null, $fecha_compra = null, $numero_chasis = null, $tipo_accesorio = null, $horas_trabajadas = null, $tiempo_mantenimiento_hora = null, $numero_serie = null, $modelo = null, $horas_actividad = null, $valor_hora = null, $created_at = null, $updated_at = null, $deleted_at = null) {
    $this->config = $config;
    $this->id = $id;
    $this->estado = $estado;
    $this->valor = $valor;
    $this->fecha_compra = $fecha_compra;
    $this->numero_chasis = $numero_chasis;
    $this->tipo_accesorio = $tipo_accesorio;
    $this->horas_trabajadas = $horas_trabajadas;
    $this->tiempo_mantenimiento_hora = $tiempo_mantenimiento_hora;
    $this->numero_serie = $numero_serie;
    $this->modelo = $modelo;
    $this->horas_actividad = $horas_actividad;
    $this->valor_hora = $valor_hora;
    $this->created_at = $created_at;
    $this->updated_at = $updated_at;
    $this->deleted_at = $deleted_at;
  }

  public function getId() {
    return $this->id;
  }

  public function getEstado() {
    return $this->estado;
  }

  public function getValor() {
    return $this->valor;
  }

  public function getFechaCompra() {
    return $this->fecha_compra;
  }

  public function getNumeroChasis() {
    return $this->numero_chasis;
  }

  public function getTipoAccesorio() {
    return $this->tipo_accesorio;
  }

  public function getHorasTrabajadas() {
    return $this->horas_trabajadas;
  }

  public function getTiempoMantenimientoHora() {
    return $this->tiempo_mantenimiento_hora;
  }

  public function getNumeroSerie() {
    return $this->numero_serie;
  }

  public function getModelo() {
    return $this->modelo;
  }

  public function getHorasActividad() {
    return $this->horas_actividad;
  }

  public function getValorHora() {
    return $this->valor_hora;
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

  public function setEstado($estado) {
    $this->estado = $estado;
  }

  public function setValor($valor) {
    $this->valor = $valor;
  }

  public function setFechaCompra($fecha_compra) {
    $this->fecha_compra = $fecha_compra;
  }

  public function setNumeroChasis($numero_chasis) {
    $this->numero_chasis = $numero_chasis;
  }

  public function setTipoAccesorio($tipo_accesorio) {
    $this->tipo_accesorio = $tipo_accesorio;
  }

  public function setHorasTrabajadas($horas_trabajadas) {
    $this->horas_trabajadas = $horas_trabajadas;
  }

  public function setTiempoMantenimientoHora($tiempo_mantenimiento_hora) {
    $this->tiempo_mantenimiento_hora = $tiempo_mantenimiento_hora;
  }

  public function setNumeroSerie($numero_serie) {
    $this->numero_serie = $numero_serie;
  }

  public function setModelo($modelo) {
    $this->modelo = $modelo;
  }

  public function setHorasActividad($horas_actividad) {
    $this->horas_actividad = $horas_actividad;
  }

  public function setValorHora($valor_hora) {
    $this->valor_hora = $valor_hora;
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
