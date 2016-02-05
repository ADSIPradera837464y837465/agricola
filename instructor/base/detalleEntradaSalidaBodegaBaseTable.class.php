<?php

namespace FStudio\model\base;

use FStudio\fsModel as model;
use FStudio\myConfig as config;

/**
 * Description of detalleEntradaSalidaBodegaBaseTable
 *
 * @author nombre completo <su@correo.com>
 * @package FStudio
 * @subpackage model
 * @subpackage base
 * @version 1.0.0
 */
class detalleEntradaSalidaBodegaBaseTable extends model {

  const ID = 'des_id';
  const ENTRADA_SALIDA_BODEGA_ID = 'esb_id';
  const PRODUCTO_ID = 'pro_id';
  const UNIDAD_MEDIDA_ID = 'unm_id';
  const CANTIDAD = 'des_cantidad';
  const PRECIO = 'des_precio';
  const CREATED_AT = 'des_created_at';
  const UPDATED_AT = 'des_updated_at';
  const DELETED_AT = 'des_deleted_at';
  const _SEQUENCE = 'bda_detalle_entrada_salida_bodega_des_id_seq';
  const _TABLE = 'bda_detalle_entrada_salida_bodega';

  /**
   * Configuración del sistema
   * @var config
   */
  protected $config;
  private $id;
  private $entrada_salida_bodega_id;
  private $producto_id;
  private $unidad_medida_id;
  private $cantidad;
  private $precio;
  private $created_at;
  private $updated_at;
  private $deleted_at;

  public function __construct(config $config, $id = null, $entrada_salida_bodega_id = null, $producto_id = null, $unidad_medida_id = null, $cantidad = null, $precio = null, $created_at = null, $updated_at = null, $deleted_at = null) {
    $this->config = $config;
    $this->id = $id;
    $this->entrada_salida_bodega_id = $entrada_salida_bodega_id;
    $this->producto_id = $producto_id;
    $this->unidad_medida_id = $unidad_medida_id;
    $this->cantidad = $cantidad;
    $this->precio = $precio;
    $this->created_at = $created_at;
    $this->updated_at = $updated_at;
    $this->deleted_at = $deleted_at;
  }

  public function getId() {
    return $this->id;
  }

  public function getEntradaSalidaBodegaId() {
    return $this->entrada_salida_bodega_id;
  }

  public function getProductoId() {
    return $this->producto_id;
  }

  public function getUnidadMedidaId() {
    return $this->unidad_medida_id;
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

  public function setEntradaSalidaBodegaId($entrada_salida_bodega_id) {
    $this->entrada_salida_bodega_id = $entrada_salida_bodega_id;
  }

  public function setProductoId($producto_id) {
    $this->producto_id = $producto_id;
  }

  public function setUnidadMedidaId($unidad_medida_id) {
    $this->unidad_medida_id = $unidad_medida_id;
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
