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

  /**
   * ID de la tabla detalleEjecucion
   * @ var integer
   */
  const ID = 'dee_id';

  /**
   * ID de la tabla ordenEjecucion
   * @ var integer
   */
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
   * ID de la tabla servicioMaquina
   * @ var integer
   */
  const ID = 'ser_id';

  /**
   * ID de la tabla producto
   * @ var integer
   */
  const ID = 'pro_id';

  /**
   * cantidad de la tabla detalleEjecucion
   * @ var integer
   */
  const ID = 'dee_cantidad';

  /**
   * precio de la tabla detalleEjecucion
   * @ var integer
   */
  const precio = 'dee_precio';

  /**
   * Configuración del sistema
   * @var config
   */
  protected $config;

  /**
   * ID de la tabla detalleEjecucion
   * @var integer
   */
  private $id;

  /**
   * ID de la tabla ordenEjecucion
   * @var integer
   */
  private $orden_ejecucion_id;

  /**
   * ID de la tabla tercero
   * @var integer
   */
  private $tercero_id;

  /**
   * ID de la tabla servicioMaquina
   * @var integer
   */
  private $servicio_maquina_id;

  /**
   * ID de la tabla producto
   * @var integer
   */
  private $producto_id;

  /**
   * ID de la tabla detalleEjecucion
   * @var integer
   */
  private $cantidad;

  /**
   * ID de la tabla detalleEjecucion
   * @var integer
   */
  private $precio;

  /**
   * ID de la tabla 
   * @var  date_time
   */
  private $created_at;

  /**
   * ID de la tabla
   * @var  date_time
   */
  private $updated_at;

  /**
   * ID de la tabla
   * @var  date_time
   */
  private $deleted_at;

  /**
   * 
   * @param config $config
   * @param type $id
   * @param type $orden_ejecucion_id
   * @param type $tercero_id
   * @param type $servicio_maquina_id
   * @param type $producto_id
   * @param type $cantidad
   * @param type $precio
   * @param type $created_at
   * @param type $updated_at
   * @param type $deleted_at
   */
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

  /**
   * Retorna el id del registro
   * @version 1.0.0
   * @return integer
   */
  public function getId() {
    return $this->id;
  }

  /**
   * Retorna el id del registro
   * @version 1.0.0
   * @return integer
   */
  public function getOrdenEjecucionId() {
    return $this->orden_ejecucion_id;
  }

  /**
   * Retorna el id del registro
   * @version 1.0.0
   * @return integer
   */
  public function getTerceroId() {
    return $this->tercero_id;
  }

  /**
   * Retorna el id del registro
   * @version 1.0.0
   * @return integer
   */
  public function getServicioMaquinaId() {
    return $this->servicio_maquina_id;
  }

  /**
   * Retorna el id del registro
   * @version 1.0.0
   * @return integer
   */
  public function getProductoId() {
    return $this->producto_id;
  }

  /**
   * Retorna el id del registro
   * @version 1.0.0
   * @return integer
   */
  public function getCantidad() {
    return $this->cantidad;
  }

  /**
   * Retorna el id del registro
   * @version 1.0.0
   * @return integer
   */
  public function getPrecio() {
    return $this->precio;
  }

  /**
   * Retorna el id del registro
   * @version 1.0.0
   * @return integer
   */
  public function getCreatedAt() {
    return $this->created_at;
  }

  /**
   * Retorna el id del registro
   * @version 1.0.0
   * @return integer
   */
  public function getUpdatedAt() {
    return $this->updated_at;
  }

  /**
   * Retorna el id del registro
   * @version 1.0.0
   * @return integer
   */
  public function getDeletedAt() {
    return $this->deleted_at;
  }

  /**
   * fija la configuración del sistema
   * @version 1.0.0
   * @return config
   */
  public function setId($id) {
    $this->id = $id;
  }

  /**
   * fija la configuración del sistema
   * @version 1.0.0
   * @return config
   */
  public function setOrdenEjecucionId($orden_ejecucion_id) {
    $this->orden_ejecucion_id = $orden_ejecucion_id;
  }

  /**
   * fija la configuración del sistema
   * @version 1.0.0
   * @return config
   */
  public function setTerceroId($tercero_id) {
    $this->tercero_id = $tercero_id;
  }

  public function setServicioMaquinaId($servicio_maquina_id) {
    $this->servicio_maquina_id = $servicio_maquina_id;
  }

  /**
   * fija la configuración del sistema
   * @version 1.0.0
   * @return config
   */
  public function setProductoId($producto_id) {
    $this->producto_id = $producto_id;
  }

  /**
   * fija la configuración del sistema
   * @version 1.0.0
   * @return config
   */
  public function setCantidad($cantidad) {
    $this->cantidad = $cantidad;
  }

  /**
   * fija la configuración del sistema
   * @version 1.0.0
   * @return config
   */
  public function setPrecio($precio) {
    $this->precio = $precio;
  }

  /**
   * fija la configuración del sistema
   * @version 1.0.0
   * @return config
   */
  public function setCreatedAt($created_at) {
    $this->created_at = $created_at;
  }

  /**
   * fija la configuración del sistema
   * @version 1.0.0
   * @return config
   */
  public function setUpdatedAt($updated_at) {
    $this->updated_at = $updated_at;
  }

  /**
   * fija la configuración del sistema
   * @version 1.0.0
   * @return config
   */
  public function setDeletedAt($deleted_at) {
    $this->deleted_at = $deleted_at;
  }

}
