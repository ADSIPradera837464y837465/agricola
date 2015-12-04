<?php

namespace FStudio\model\base;

use FStudio\fsModel as model;
use FStudio\myConfig as config;

/**
 * Description of productoBaseTable
 *
 * @author nombre completo <su@correo.com>
 * @package FStudio
 * @subpackage model
 * @subpackage base
 * @version 1.0.0
 */
class productoBaseTable extends model {

  const ID = 'pro_id';
  const DESCRIPCION = 'pro_descripcion';
  const DESCRIPCION_LENGTH = 80;
  const TIPO_PRODUCTO_ID = 'tpr_id';
  const MARCA_ID = 'mar_id';
  const UNIDAD_MEDIDA_ID = 'unm_id';
  const CREATED_AT = 'pro_created_at';
  const UPDATED_AT = 'pro_updated_at';
  const DELETED_AT = 'pro_deleted_at_at';
  const _SEQUENCE = 'bda_producto_pro_id_seq';
  const _TABLE = 'bda_producto';

  /**
   * Configuración del sistema
   * @var config
   */
  protected $config;
  private $id;
  private $descripcion;
  private $tipo_producto_id;
  private $marca_id;
  private $unidad_medida_id;
  private $created_at;
  private $updated_at;
  private $deleted_at;

  public function __construct(config $config, $id = null, $descripcion = null, $tipo_producto_id = null, $marca_id = null, $unidad_medida_id = null, $created_at = null, $updated_at = null, $deleted_at = null) {
    $this->config = $config;
    $this->id = $id;
    $this->descripcion = $descripcion;
    $this->tipo_producto_id = $tipo_producto_id;
    $this->marca_id = $marca_id;
    $this->unidad_medida_id = $unidad_medida_id;
    $this->created_at = $created_at;
    $this->updated_at = $updated_at;
    $this->deleted_at = $deleted_at;
  }

  public function getId() {
    return $this->id;
  }

  public function getDescripcion() {
    return $this->descripcion;
  }

  public function getTipoProductoId() {
    return $this->tipo_producto_id;
  }

  public function getMarcaId() {
    return $this->marca_id;
  }

  public function getUnidadMedidaId() {
    return $this->unidad_medida_id;
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

  public function setDescripcion($descripcion) {
    $this->descripcion = $descripcion;
  }

  public function setTipoProductoId($tipo_producto_id) {
    $this->tipo_producto_id = $tipo_producto_id;
  }

  public function setMarcaId($marca_id) {
    $this->marca_id = $marca_id;
  }

  public function setUnidadMedidaId($unidad_medida_id) {
    $this->unidad_medida_id = $unidad_medida_id;
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
