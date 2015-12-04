<?php

namespace FStudio\model\base;

use FStudio\fsModel as model;
use FStudio\myConfig as config;

/**
 * Description of detalleEjecucionBaseTable
 *
 * @author nombre completo <su@correo.com>
 * @package FStudio
 * @subpackage model
 * @subpackage base
 * @version 1.0.0
 */
class detalleEjecucionBaseTable extends model {

  const ID = 'dee_id';
  const ORDEN_EJECUCION_ID = 'ore_id';
  const TERCERO_ID = 'ter_id';
  const SERVICIO_MAQUINA_ID = 'ser_id';
  const PRODUCTO_ID = 'pro_id';
  const CANTIDAD = 'dee_cantidad';
  const PRECIO = 'dee_precio';
  const CREATED_AT = 'dee_created_at';
  const UPDATED_AT = 'dee_updated_at';
  const DELETED_AT = 'dee_deleted_at';
  const _SEQUENCE = 'bda_detalle_ejecucion_dee_id_seq';
  const _TABLE = 'bda_detalle_ejecucion';

  /**
   * Configuración del sistema
   * @var config
   */
  protected $config;
  private $id;
  private $orden_ejecucion_id;
  private $tercero_id;
  private $servicio_maquina_id;
  private $producto_id;
  private $cantidad;
  private $precio;
  private $created_at;
  private $updated_at;
  private $deleted_at;

  public function __construct(config $config, $id = null, $orden_ejecucion_id = null, $tercero_id = null, $servicio_maquina_id = null, $producto_id = null, $cantidad = null, $precio = null, $created_at = null, $updated_at = null, $deleted_at = null) {
    $this->config = $config;
    $this->id = $id;
    $this->orden_ejecucion_id = $orden_ejecucion_id;
    $this->tercero_id = $tercero_id;
    $this->servicio_maquina_id = $servicio_maquina_id;
    $this->producto_id = $producto_id;
    $this->cantidad = $cantidad;
    $this->precio = $precio;
    $this->created_at = $created_at;
    $this->updated_at = $updated_at;
    $this->deleted_at = $deleted_at;
  }

  public function getId() {
    return $this->id;
  }

  public function getOrdenEjecucionId() {
    return $this->orden_ejecucion_id;
  }

  public function getTerceroId() {
    return $this->tercero_id;
  }

  public function getServicioMaquinaId() {
    return $this->servicio_maquina_id;
  }

  public function getProductoId() {
    return $this->producto_id;
  }

  public function getCantidad() {
    return $this->cantidad;
  }

  public function getPrecio() {
    return $this->precio;
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

  public function setOrdenEjecucionId($orden_ejecucion_id) {
    $this->orden_ejecucion_id = $orden_ejecucion_id;
  }

  public function setTerceroId($tercero_id) {
    $this->tercero_id = $tercero_id;
  }

  public function setServicioMaquinaId($servicio_maquina_id) {
    $this->servicio_maquina_id = $servicio_maquina_id;
  }

  public function setProductoId($producto_id) {
    $this->producto_id = $producto_id;
  }

  public function setCantidad($cantidad) {
    $this->cantidad = $cantidad;
  }

  public function setPrecio($precio) {
    $this->precio = $precio;
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
