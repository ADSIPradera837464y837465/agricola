<?php

namespace FStudio\model\base;

use FStudio\fsModel as model;
use FStudio\myConfig as config;

/**
 * Description of inventarioBaseTable
 *
 * @author nombre completo <su@correo.com>
 * @package FStudio
 * @subpackage model
 * @subpackage base
 * @version 1.0.0
 */
class inventarioBaseTable extends model {

  const ID = 'inv_id';
  const PRODUCTO_ID = 'pro_id';
  const TIPO_DOCUMENTO_ID = 'tpd_id';
  const NUM_DOC = 'inv_num_doc';
  const FECHA = 'inv_fecha';
  const CANTIDAD = 'inv_cantidad';
  const MOVIMIENTO = 'inv_movimiento';
  const MOVIMIENTO_LENGTH = 80;
  const SALDO = 'inv_saldo';
  const DESCRIPCION = 'inv_descripcion';
  const DESCRIPCION_LENGTH = 80;
  const CREATED_AT = 'inv_created_at';
  const UPDATED_AT = 'inv_updated_at';
  const DELETED_AT = 'inv_deleted_at';
  const _SEQUENCE = 'bda_inventario_inv_id_seq';
  const _TABLE = 'bda_inventario';

  /**
   * Configuración del sistema
   * @var config
   */
  protected $config;
  private $id;
  private $producto_id;
  private $tipo_documento_id;
  private $num_doc;
  private $fecha;
  private $cantidad;
  private $movimiento;
  private $saldo;
  private $descripcion;
  private $created_at;
  private $updated_at;
  private $deleted_at;

  public function __construct(config $config, $id = null, $producto_id = null, $tipo_documento_id = null, $num_doc = null, $fecha = null, $cantidad = null, $movimiento = null, $saldo = null, $descripcion = null, $created_at = null, $updated_at = null, $deleted_at = null) {
    $this->config = $config;
    $this->id = $id;
    $this->producto_id = $producto_id;
    $this->tipo_documento_id = $tipo_documento_id;
    $this->num_doc = $num_doc;
    $this->fecha = $fecha;
    $this->cantidad = $cantidad;
    $this->movimiento = $movimiento;
    $this->saldo = $saldo;
    $this->descripcion = $descripcion;
    $this->created_at = $created_at;
    $this->updated_at = $updated_at;
    $this->deleted_at = $deleted_at;
  }

  public function getId() {
    return $this->id;
  }

  public function getProductoId() {
    return $this->producto_id;
  }

  public function getTipoDocumentoId() {
    return $this->tipo_documento_id;
  }

  public function getNumDoc() {
    return $this->num_doc;
  }

  public function getFecha() {
    return $this->fecha;
  }

  public function getCantidad() {
    return $this->cantidad;
  }

  public function getMovimiento() {
    return $this->movimiento;
  }

  public function getSaldo() {
    return $this->saldo;
  }

  public function getDescripcion() {
    return $this->descripcion;
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

  public function setProductoId($producto_id) {
    $this->producto_id = $producto_id;
  }

  public function setTipoDocumentoId($tipo_documento_id) {
    $this->tipo_documento_id = $tipo_documento_id;
  }

  public function setNumDoc($num_doc) {
    $this->num_doc = $num_doc;
  }

  public function setFecha($fecha) {
    $this->fecha = $fecha;
  }

  public function setCantidad($cantidad) {
    $this->cantidad = $cantidad;
  }

  public function setMovimiento($movimiento) {
    $this->movimiento = $movimiento;
  }

  public function setSaldo($saldo) {
    $this->saldo = $saldo;
  }

  public function setDescripcion($descripcion) {
    $this->descripcion = $descripcion;
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
