<?php

namespace FStudio\model\base;

use FStudio\fsModel as model;
use FStudio\myConfig as config;

/**
 * Description of detalleRegistroBaseTable
 *
 * @author nombre completo <su@correo.com>
 * @package FStudio
 * @subpackage model
 * @subpackage base
 * @version 1.0.0
 */
class detalleRegistroBaseTable extends model {

  const ITEM = 'der_item';
  const REALME_NUMERO = 'relme_numero';
  const TERCERO_ID = 'ter_id';
  const LABOR_ID = 'lab_id';
  const SUERTE_ID = 'sue_id';
  const PRODUCTO_ID = 'pro_id';
  const UNIDAD_DE_MEDIDA_ID = 'unm_id';
  const MAQUINA_ID = 'maq_id';
  const TIEMPO_MUERTO = 'der_tiempo_muerto';
  const TOTAL_HORAS_TRABAJADAS = 'der_total_horas_trabajadas';
  const HORA_INICIO = 'der_hora_inicio';
  const HORA_FIN = 'der_hora_fin';
  const CANTIDAD = 'der_cantidad';
  const CREATED_AT = 'der_created_at';
  const UPDATED_AT = 'der_updated_at';
  const DELETED_AT = 'der_deleted_at';
  const _SEQUENCE = 'bda_detalle_registro_der_item_seq';
  const _TABLE = 'bda_detalle_registro';

  /**
   * Configuración del sistema
   * @var config
   */
  protected $config;
  private $item;
  private $realme_numero;
  private $tercero_id;
  private $labor_id;
  private $suerte_id;
  private $producto_id;
  private $unidad_de_medida_id;
  private $maquina_id;
  private $tiempo_muerto;
  private $total_horas_trabajadas;
  private $hora_inicio;
  private $hora_fin;
  private $cantidad;
  private $created_at;
  private $updated_at;
  private $deleted_at;

  public function __construct(config $config, $item = null, $realme_numero = null, $tercero_id = null, $labor_id = null, $suerte_id = null, $producto_id = null, $unidad_de_medida_id = null, $maquina_id = null, $tiempo_muerto = null, $total_horas_trabajadas = null, $hora_inicio = null, $hora_fin = null, $cantidad = null, $created_at = null, $updated_at = null, $deleted_at = null) {
    $this->config = $config;
    $this->item = $item;
    $this->realme_numero = $realme_numero;
    $this->tercero_id = $tercero_id;
    $this->labor_id = $labor_id;
    $this->suerte_id = $suerte_id;
    $this->producto_id = $producto_id;
    $this->unidad_de_medida_id = $unidad_de_medida_id;
    $this->maquina_id = $maquina_id;
    $this->tiempo_muerto = $tiempo_muerto;
    $this->total_horas_trabajadas = $total_horas_trabajadas;
    $this->hora_inicio = $hora_inicio;
    $this->hora_fin = $hora_fin;
    $this->cantidad = $cantidad;
    $this->created_at = $created_at;
    $this->updated_at = $updated_at;
    $this->deleted_at = $deleted_at;
  }

  public function getItem() {
    return $this->item;
  }

  public function getRealmeNumero() {
    return $this->realme_numero;
  }

  public function getTerceroId() {
    return $this->tercero_id;
  }

  public function getLaborId() {
    return $this->labor_id;
  }

  public function getSuerteId() {
    return $this->suerte_id;
  }

  public function getProductoId() {
    return $this->producto_id;
  }

  public function getUnidadDeMedidaId() {
    return $this->unidad_de_medida_id;
  }

  public function getMaquinaId() {
    return $this->maquina_id;
  }

  public function getTiempoMuerto() {
    return $this->tiempo_muerto;
  }

  public function getTotalHorasTrabajadas() {
    return $this->total_horas_trabajadas;
  }

  public function getHoraInicio() {
    return $this->hora_inicio;
  }

  public function getHoraFin() {
    return $this->hora_fin;
  }

  public function getCantidad() {
    return $this->cantidad;
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

  public function setItem($item) {
    $this->item = $item;
  }

  public function setRealmeNumero($realme_numero) {
    $this->realme_numero = $realme_numero;
  }

  public function setTerceroId($tercero_id) {
    $this->tercero_id = $tercero_id;
  }

  public function setLaborId($labor_id) {
    $this->labor_id = $labor_id;
  }

  public function setSuerteId($suerte_id) {
    $this->suerte_id = $suerte_id;
  }

  public function setProductoId($producto_id) {
    $this->producto_id = $producto_id;
  }

  public function setUnidadDeMedidaId($unidad_de_medida_id) {
    $this->unidad_de_medida_id = $unidad_de_medida_id;
  }

  public function setMaquinaId($maquina_id) {
    $this->maquina_id = $maquina_id;
  }

  public function setTiempoMuerto($tiempo_muerto) {
    $this->tiempo_muerto = $tiempo_muerto;
  }

  public function setTotalHorasTrabajadas($total_horas_trabajadas) {
    $this->total_horas_trabajadas = $total_horas_trabajadas;
  }

  public function setHoraInicio($hora_inicio) {
    $this->hora_inicio = $hora_inicio;
  }

  public function setHoraFin($hora_fin) {
    $this->hora_fin = $hora_fin;
  }

  public function setCantidad($cantidad) {
    $this->cantidad = $cantidad;
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
