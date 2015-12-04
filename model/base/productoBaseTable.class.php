<?php

namespace FStudio\model\base;

use FStudio\fsModel as model;
use FStudio\myConfig as config;

/**
 * Clase base para la tabla producto
 * @author Julian Andrés Lasso Figueroa <ingeniero.julianlasso@gmail.com> Emanuel Castillo Mosquera<corcel125@outlook.com> * 
 * @package FStudio
 * @subpackage model
 * @subpackage base
 * @version 1.0.0
 */
class productoBaseTable extends model {

  /**
   * ID del registro
   */
  const ID = 'pro_id';

  /**
   * Descripción del producto
   */
  const DESCRIPCION = 'pro_descripcion';

  /**
   * Longitud del campo descripción
   */
  const DESCRIPCION_LENGTH = 80;

  /**
   * ID del tipo de producto
   */
  const TIPO_PRODUCTO_ID = 'tpr_id';

  /**
   * ID de la marca
   */
  const MARCA_ID = 'mar_id';

  /**
   * ID de la unidad de medida
   */
  const UNIDAD_MEDIDA_ID = 'unm_id';

  /**
   * Fecha y hora de creación del registro
   */
  const CREATED_AT = 'pro_created_at';

  /**
   * Fecha y hora de la ultima actualización del registro
   */
  const UPDATED_AT = 'pro_updated_at';

  /**
   * Fecha y hora para controlar el borrado lógico
   */
  const DELETED_AT = 'pro_deleted_at_at';

  /**
   * Nombre de la secuencia del ID de la tabla
   */
  const _SEQUENCE = 'bda_producto_pro_id_seq';
//  const _SEQUENCE = 'bda_producto_pro_id_seq';

  /**
   * Nombre de la tabla
   */
  const _TABLE = 'bda_producto';

  /**
   * Configuración del sistema
   * @var config
   */
  protected $config;

  /**
   * ID del registro
   * @var integer
   */
  private $id;

  /**
   * Descripción del producto
   * @var string
   */
  private $descripcion;
  
  /**
   * ID del tipo de producto
   * @var integer
   */
  private $tipo_producto_id;
  
  /**
   * ID de la marca
   * @var integer
   */
  private $marca_id;
  
  /**
   * ID de la unidad de medida
   * @var integer
   */
  private $unidad_medida_id;
  
  /**
   * Fecha y hora de creación del registro
   * @var string
   */
  private $created_at;
  
  /**
   * Fecha y hora de la ultima actualización del registro
   * @var string
   */
  private $updated_at;
  
  /**
   * Fecha y hora para controlar el borrado lógico
   * @var string
   */
  private $deleted_at;
  
/**
   * Constructor de la clase productoBaseTable
   * @version 1.0.0
   * @param config $config
   * @param integer $id [opcional] ID del registro
   * @param varchar $descripcion [opcional] Descripción del producto
   * @param integer $tipoProductoId [opcional] ID del tipo de producto
   * @param integer $marcaId [opcional] ID de la marca del producto
   * @param integer $unidadMedidaId [opcional] Unidad de medida del producto
   * @param string $createdAt [opcional] Fecha y hora de creación del registro
   * @param string $updatedAt [opcional] Fecha y hora de actualización del registro
   * @param string $deletedAt [opcional] Fecha y hora del borrado lógico del registro
   */
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

  

  /**
   * Retorna el ID del registro
   * @version 1.0.0
   * @return integer
   */
  public function getId() {
    return $this->id;
  }

  /**
   * Retorna la descripción del registro
   * @version 1.0.0
   * @return string
   */
  public function getDescripcion() {
    return $this->descripcion;
  }

  /**
   * Retorna el ID del tipo de producto
   * @version 1.0.0
   * @return integer
   */
  public function getTipoProductoId() {
    return $this->tipo_producto_id;
  }

  /**
   * Retorna el ID de la marca
   * @version 1.0.0
   * @return integer
   */
  public function getMarcaId() {
    return $this->marca_id;
  }

  /**
   * Retorna el ID de la unidad de medida
   * @version 1.0.0
   * @return integer
   */
  public function getUnidadMedidaId() {
    return $this->unidad_medida_id;
  }

  /**
   * Retorna la fecha y la hora de creación del registro
   * @version 1.0.0
   * @return string
   */
  public function getCreatedAt() {
    return $this->created_at;
  }

  /**
   * Retorna la fecha y la hora de la última actualización del registro
   * @version 1.0.0
   * @return string
   */
  public function getUpdatedAt() {
    return $this->updated_at;
  }

  /**
   * Retorna la fecha y la hora del borrado lógico del registro
   * @version 1.0.0
   * @return string
   */
  public function getDeletedAt() {
    return $this->deleted_at;
  }

  /**
   * Fija el objeto de la configuración del sistema
   * @version 1.0.0
   * @param config $config Objeto de la configuración del sistema
   */
  public function setConfig(config $config) {
    $this->config = $config;
  }

  /**
   * Fija el ID para un registro del sistema
   * @version 1.0.0
   * @param integer $id ID de un registro
   */
  public function setId($id) {
    $this->id = $id;
  }

  /**
   * Fija la descripción del producto
   * @version 1.0.0
   * @param string $descripcion Descripción del producto
   */
  public function setDescripcion($descripcion) {
    $this->descripcion = $descripcion;
  }

  /**
   * Fija el ID del tipo de producto
   * @version 1.0.0
   * @param type $tipoProductoId ID del tipo de producto
   */
  public function setTipoProductoId($tipo_producto_id) {
    $this->tipo_producto_id = $tipo_producto_id;
  }

  /**
   * Fija el ID de la marca
   * @version 1.0.0
   * @param integer $marcaId
   */
  public function setMarcaId($marca_id) {
    $this->marca_id = $marca_id;
  }

  /**
   * Fija el ID de la unidad de medida
   * @version 1.0.0
   * @param integer $unidadMedidaId ID de la unidad de medida
   */
  public function setUnidadMedidaId($unidad_medida_id) {
    $this->unidad_medida_id = $unidad_medida_id;
  }

  /**
   * Fija la fecha y la hora de creación del registro
   * @version 1.0.0
   * @param string $createdAt Fecha y hora de creación
   */
  public function setCreatedAt($created_at) {
    $this->created_at = $created_at;
  }

  /**
   * Fija la fecha y la hora de la última actualización del registro
   * @version 1.0.0
   * @param sting $updatedAt Fecha y hora de la última actualización del registro
   */
  public function setUpdatedAt($updated_at) {
    $this->updated_at = $updated_at;
  }

  /**
   * Fija la fecha y la hora del borrado lógico
   * @version 1.0.0
   * @param string $deletedAt Fecha y hora del borrado lógico
   */
  public function setDeletedAt($deleted_at) {
    $this->deleted_at = $deleted_at;
  }

}
