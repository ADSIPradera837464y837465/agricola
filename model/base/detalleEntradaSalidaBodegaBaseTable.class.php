<?php

namespace FStudio\model\base;

use FStudio\fsModel as model;
use FStudio\myConfig as config;

/**
 * Description of detalleEntradaSalidaBodegaBaseTable
 * @author Itiani Moreno Rosero <itiani2811@gmail.com>
 * @package 
 * @subpackage model
 * @subpackage base
 * @version 1.0.0
 */
class detalleEntradaSalidaBodegaBaseTable extends model {

  /**
   * ID de la tabla
   */
  const ID = 'des_id';

  /**
   * ID de la tabla entrada salida bodega 
   */
  const ENTRADA_SALIDA_BODEGA_ID = 'esb_id';

  /**
   * ID de la tabla producto
   */
  const PRODUCTO_ID = 'pro_id';

  /**
   * ID de la tabla unidad de medida
   */
  const UNIDAD_MEDIDA_ID = 'unm_id';

  /**
   * Descripcion de la cantidad  de la tabla
   */
  const CANTIDAD = 'des_cantidad';

  /**
   * Descripcion precio de la tabla
   */
  const PRECIO = 'des_precio';

  /**
   * Fecha y hora  de creacion del registro
   */
  const CREATED_AT = 'des_created_at';

  /**
   * Fecha y hora de la ultima actualización del registro
   */
  const UPDATED_AT = 'des_updated_at';

  /**
   * Fecha y hora para controlar el borrado lógico
   */
  const DELETED_AT = 'des_deleted_at';

  /**
   * Nombre de la secuencia del ID de la tabla
   */
  const _SEQUENCE = 'bda_detalle_entrada_salida_bodega_des_id_seq';

  /**
   *  Nombre de la tabla 
   */
  const _TABLE = 'bda_detalle_entrada_salida_bodega';

  /**
   * Configuración del sistema
   * @var config
   */
  protected $config;

  /**
   * ID de la tabla
   * @var integer
   */
  private $id;

  /**
   * ID de la tabla entrada salida bodega 
   * @var integer 
   */
  private $entrada_salida_bodega_id;

  /**
   * ID de la tabla producto
   * @var integer
   */
  private $producto_id;

  /**
   * ID de la tabla unidad de medida
   * @var integer
   */
  private $unidad_medida_id;

  /**
   * Descripcion de la cantidad  de la tabla
   * @var integer 
   */
  private $cantidad;

  /**
   * Descripcion precio de la tabla
   * @var integer
   */
  private $precio;

  /**
   * Fecha y hora  de creacion del registro
   * @var date_tame
   */
  private $created_at;

  /**
   * Fecha y hora de la ultima actualización del registro
   * @var date_tame
   */
  private $updated_at;

  /**
   * Fecha y hora para controlar el borrado lógico
   * @var date_tame
   */
  private $deleted_at;

  /**
   * 
   * Constructor de la clase detalleEntradaSalidaBodegaBaseTable
   * @param integer $id
   * @param integer $entrada_salida_bodega_id
   * @param integer $producto_id
   * @param integer $unidad_medida_id
   * @param integer $cantidad
   * @param integer $precio
   * @param date_time $created_at
   * @param date_time $updated_at
   * @param date_time $deleted_at
   * @version 1.0.0
   */
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

  /**
   * Retorna el id del registro
   * @version 1.0.0
   * @return integer
   */
  public function getId() {
    return $this->id;
  }

  /**
   * Retorna el  Id Entrada Salida Bodega del registro
   * @version 1.0.0
   * @return integer
   */
  public function getEntradaSalidaBodegaId() {
    return $this->entrada_salida_bodega_id;
  }

  /**
   * Retorna el id de producto del registro
   * @version 1.0.0
   * @return integer
   */
  public function getProductoId() {
    return $this->producto_id;
  }

  /**
   * Retorna el id unidad de medida del registro
   * @version 1.0.0
   * @return integer
   */
  public function getUnidadMedidaId() {
    return $this->unidad_medida_id;
  }

  /**
   * Retorna el id de umn del registro
   * @version 1.0.0
   * @return config
   */
  public function getUmnId() {
    return $this->umnId;
  }

  /**
   * Retorna la cantidad del registro
   * @version 1.0.0
   * @return config
   */
  public function getCantidad() {
    return $this->cantidad;
  }

  /**
   * Retorna el precio del registro
   * @version 1.0.0
   * @return config
   */
  public function getPrecio() {
    return $this->precio;
  }

  /**
   * Retorna la fecha y hora  de creación del registro
   * @version 1.0.0
   * @return date_time
   */
  public function getCreatedAt() {
    return $this->created_at;
  }

  /**
   * Retorna la fecha y hora  de la ultima modificaacion de un registro
   * @version 1.0.0
   * @return date_time
   */
  public function getUpdatedAt() {
    return $this->updated_at;
  }

  /**
   * Retorna la fecha y hora de eliminacion del registro
   * @version 1.0.0
   * @return date_time
   */
  public function getDeletedAt() {
    return $this->deleted_at;
  }

  /**
   * Fija el id para el registro en la tabla
   * @version 1.0.0
   * @param integer $id
   */
  public function setId($id) {
    $this->id = $id;
  }

  /**
   * Fija el id para el registro en la tabla
   * @version 1.0.0
   * @param integer $id
   */
  public function setEntradaSalidaBodegaId($entrada_salida_bodega_id) {
    $this->entrada_salida_bodega_id = $entrada_salida_bodega_id;
  }

  /**
   * Fija el id para el registro en la tabla
   * @version 1.0.0
   * @param integer $id
   */
  public function setProductoId($producto_id) {
    $this->producto_id = $producto_id;
  }

  /**
   * Fija el id para el registro en la tabla
   * @version 1.0.0
   * @param integer $id
   */
  public function setUnidadMedidaId($unidad_medida_id) {
    $this->unidad_medida_id = $unidad_medida_id;
  }

  /**
   * Fija el id para el registro en la tabla
   * @version 1.0.0
   * @param integer $id
   */
  public function setUmnId($umnId) {
    $this->umnId = $umnId;
  }

  /**
   * Fija la cantidad para el registro en la tabla
   * @version 1.0.0
   * @param integer $cantidad
   */
  public function setCantidad($cantidad) {
    $this->cantidad = $cantidad;
  }

  /**
   * Fija el precio para el registro en la tabla
   * @version 1.0.0
   * @param integer $precio
   */
  public function setPrecio($precio) {
    $this->precio = $precio;
  }

  /**
   * Fija fecha y hora de cuando se creo  un registro
   * @version 1.0.0
   * @param date_time $createdAt
   */
  public function setCreatedAt($created_at) {
    $this->created_at = $created_at;
  }

  /**
   * Fija fecha y hora de cuando se modifico el ultimo registro
   * @version 1.0.0
   * @param date_time $updatedAt
   */
  public function setUpdatedAt($updated_at) {
    $this->updated_at = $updated_at;
  }

  /**
   * Fija fecha y hora del borrado logico
   * @version 1.0.0
   * @param date_time $deletedAt
   */
  public function setDeletedAt($deleted_at) {
    $this->deleted_at = $deleted_at;
  }

}
