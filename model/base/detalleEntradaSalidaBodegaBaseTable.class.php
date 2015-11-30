<?php

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
   * IDESB de la tabla
   */
  const ID2 = 'esb_id';

  /**
   * IDPRO de la tabla
   */
  const ID3 = 'pro_id';

  /**
   *IDUNM de la tabla 
   */
  const ID4 = 'unm_id';

  /**
   * Descripcion cantidad de la tabla
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
   * Fecha y hora de la ultima modificacion  de un registro
   */
  const UPDATED_AT = 'des_created_at';

  /**
   * Fecha y hora para controlar el borrado lógico
   */
  const DELETED_AT = 'des_deleted_at';

  /**
   * Secuencia de la tabla 
   */
  const _SEQUENCE = '';

  /**
   * Nombre de la tabla
   */
  const _TABLE = 'bda_detalle_entrada_salida_bodega';

  /**
   * Configuración del sistema
   * @var config
   */
  protected $config;

  /**
   * ID de la tabla
   */
  private $id;

  /**
   * IDESB de la tabla
   */
  private $id2;

  /**
   * IDPRO de la tabla
   */
  private $id3;

  /**
   * IDUNM de la tabla 
   */
  private $id4;

  /**
   * Descripcion cantidad de la tabla
   */
  private $cantidad;

  /**
   * Descripcion precio de la tabla
   */
  private $precio;

  /**
   * Fecha y hora de creacion del registro
   * @var date_time
   */
  private $createdAt;

  /**
   * Fecha y hora de la ultima modificacion de un registro
   * @var date_time
   */
  private $updatedAt;

  /**
   * Fecha y hora para controlar el borrado lógico
   * @var date_time
   */
  private $deletedAt;
  
  /**
   * Constructor de la clase detalleEntradaSalidaBodegaBaseTable
   * @version 1.0.0
   * @param config $config
   * @param integer $id
   * @param integer $id2
   * @param integer $id3
   * @param integer $id4
   * @param integer $cantidad
   * @param integer $precio
   * @param date_time $createdAt
   * @param date_time $updatedAt
   * @param date_time $deletedAt
   */
  public function __construct(config $config, $id = null, $id2 = null, $id3 = null, $id4 = null, $cantidad = null, $precio = null, date_time $createdAt = null, date_time $updatedAt = null, date_time $deletedAt = null) {
    $this->config = $config;
    $this->id = $id;
    $this->id2 = $id2;
    $this->id3 = $id3;
    $this->id4 = $id4;
    $this->cantidad = $cantidad;
    $this->precio = $precio;
    $this->createdAt = $createdAt;
    $this->updatedAt = $updatedAt;
    $this->deletedAt = $deletedAt;
  }

  /**
   * Retorna la configuracion del sistema
   * @version 1.0.0
   * @return config
   */
  public function getConfig() {
    return $this->config;
  }

  /**
   * Retorna el id del registro
   * @version 1.0.0
   * @return config
   */
  public function getId() {
    return $this->id;
  }

  /**
   * Retorna el id2 del registro
   * @version 1.0.0
   * @return config
   */
  public function getId2() {
    return $this->id2;
  }

  /**
   * Retorna el id3 del registro
   * @version 1.0.0
   * @return config
   */
  public function getId3() {
    return $this->id3;
  }

  /**
   * Retorna el id4 del registro
   * @version 1.0.0
   * @return config
   */
  public function getId4() {
    return $this->id4;
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
    return $this->createdAt;
  }

  /**
   * Retorna la fecha y hora  de la ultima modificaacion de un registro
   * @version 1.0.0
   * @return date_time
   */
  public function getUpdatedAt() {
    return $this->updatedAt;
  }

  /**
   * Retorna la fecha y hora de eliminacion del registro
   * @version 1.0.0
   * @return date_time
   */
  public function getDeletedAt() {
    return $this->deletedAt;
  }

  /**
   * Fija la configuración del sistema
   * @version 1.0.0
   * @param config $config Objeto con configuración del sistema
   */
  public function setConfig(config $config) {
    $this->config = $config;
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
   * Fija el id2 para el registro en la tabla
   * @version 1.0.0
   * @param integer $id2
   */
  public function setId2($id2) {
    $this->id2 = $id2;
  }

  /**
   * Fija el id3 para el registro en la tabla
   * @version 1.0.0
   * @param integer $id3
   */
  public function setId3($id3) {
    $this->id3 = $id3;
  }

  /**
   * Fija el id4 para el registro en la tabla
   * @version 1.0.0
   * @param integer $id4
   */
  public function setId4($id4) {
    $this->id4 = $id4;
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
   * Fija la fecha y hora  de creacion del registro
   * @version 1.0.0
   * @param date_time $createdAt
   */
  public function setCreatedAt(date_time $createdAt) {
    $this->createdAt = $createdAt;
  }

  /**
   * Fija la fecha y hora de la ultima modificacion de un registro
   * @version 1.0.0
   * @param date_time $updatedAt
   */
  public function setUpdatedAt(date_time $updatedAt) {
    $this->updatedAt = $updatedAt;
  }

  /**
   * Fija la fecha y hora de la eliminacion del registro
   * @version 1.0.0
   * @param date_time $deletedAt
   */
  public function setDeletedAt(date_time $deletedAt) {
    $this->deletedAt = $deletedAt;
  }

}
