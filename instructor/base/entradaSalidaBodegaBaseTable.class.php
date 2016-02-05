<?php

namespace FStudio\model\base;

use FStudio\fsModel as model;
use FStudio\myConfig as config;

/**
 * Description of entradaSalidaBodegaBaseTable
 *
 * @author nombre completo <su@correo.com>
 * @package FStudio
 * @subpackage model
 * @subpackage base
 * @version 1.0.0
 */
class entradaSalidaBodegaBaseTable extends model {

  const ID = 'esb_id';
  const TERCERO_ID_ELABORA = 'ter_id_elabora';
  const TERCERO_ID_SOLICITA = 'ter_id_solicita';
  const TIPO_DOCUMENTO_ID = 'tpd_id';
  const FECHA = 'esb_fecha';
  const OBSERVACION = 'esb_observacion';
  const OBSERVACION_LENGTH = 1024;
  const CREATED_AT = 'esb_created_at';
  const UPDATED_AT = 'esb_updated_at';
  const DELETED_AT = 'esb_deleted_at';
  const _SEQUENCE = 'bda_entrada_salida_bodega_esb_id_seq';
  const _TABLE = 'bda_entrada_salida_bodega';

  /**
   * Configuración del sistema
   * @var config
   */
  protected $config;
  private $id;
  private $tercero_id_elabora;
  private $tercero_id_solicita;
  private $tipo_documento_id;
  private $fecha;
  private $observacion;
  private $created_at;
  private $updated_at;
  private $deleted_at;

  public function __construct(config $config, $id = null, $tercero_id_elabora = null, $tercero_id_solicita = null, $tipo_documento_id = null, $fecha = null, $observacion = null, $created_at = null, $updated_at = null, $deleted_at = null) {
    $this->config = $config;
    $this->id = $id;
    $this->tercero_id_elabora = $tercero_id_elabora;
    $this->tercero_id_solicita = $tercero_id_solicita;
    $this->tipo_documento_id = $tipo_documento_id;
    $this->fecha = $fecha;
    $this->observacion = $observacion;
    $this->created_at = $created_at;
    $this->updated_at = $updated_at;
    $this->deleted_at = $deleted_at;
  }

  public function getId() {
    return $this->id;
  }

  public function getTerceroIdElabora() {
    return $this->tercero_id_elabora;
  }

  public function getTerceroIdSolicita() {
    return $this->tercero_id_solicita;
  }

  public function getTipoDocumentoId() {
    return $this->tipo_documento_id;
  }

  public function getFecha() {
    return $this->fecha;
  }

  public function getObservacion() {
    return $this->observacion;
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

  public function setTerceroIdElabora($tercero_id_elabora) {
    $this->tercero_id_elabora = $tercero_id_elabora;
  }

  public function setTerceroIdSolicita($tercero_id_solicita) {
    $this->tercero_id_solicita = $tercero_id_solicita;
  }

  public function setTipoDocumentoId($tipo_documento_id) {
    $this->tipo_documento_id = $tipo_documento_id;
  }

  public function setFecha($fecha) {
    $this->fecha = $fecha;
  }

  public function setObservacion($observacion) {
    $this->observacion = $observacion;
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
