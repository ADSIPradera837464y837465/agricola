<?php

namespace FStudio\model\base;

use FStudio\fsModel as model;
use FStudio\myConfig as config;

/**
 * Description of tipoProductoBaseTable
 * 
 * @author Angela Cardona <angela04cardona@hotmail.com>
 * @package FStudio
 * @subpackage model
 * @subpackage base
 * @version 1.0.0
 */
class tipoProductoBaseTable extends model {

  /**
   * ID de la tabla
   */
  const ID = 'tpr_id';

  /**
   * Descripcion del tipo de producto
   */
  const DESCRIPCION = 'tpr_descripcion';

  /**
   * Logitud de la descripcion
   */
  const DESCRIPCION_LENGTH = 80;

  /**
   * Fecha y hora de creación de la descripcion del tipo producto
   */
  const CREATED_AT = 'tpr_created_at';

  /**
   * Fecha y hora de la ultima actualización del tipo producto
   */
  const UPDATED_AT = 'tpr_updated_at';

  /**
   * Fecha y hora para controlar el borrado lógico
   */
  const DELETED_AT = 'tpr_deleted_at';

  /**
   * Nombre de la secuencia del ID de la tabla
   */
  const _SEQUENCE = 'bda_tipo_producto_tpr_id_seq';
  /*
   * nombre de la tabla
   */
  const _TABLE = 'bda_tipo_producto';

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
   * Descripcion del tipo producto
   * @var varchar
   */
  private $descripcion;

  /**
   * Fecha y hora de creación del tipo producto
   * @var date_time
   */
  private $created_at;

  /**
   * Fecha y hora de la ultima actualización del tipo producto
   * @var date_time
   */
  private $updated_at;

  /**
   * Fecha y hora para controlar el borrado lógico
   * @var date_time
   */
  private $deleted_at;

  /**
   * constructor class tipoProductoBaseTable
   * @version 1.0.0
   * @param integer $id
   * @param varchar $descripcion
   * @param date_time $createdAt
   * @param date_time $updateAt
   * @param date_time $deletedAt
   */
  public function __construct(config $config, $id = null, $descripcion = null, $created_at = null, $updated_at = null, $deleted_at = null) {
    $this->config = $config;
    $this->id = $id;
    $this->descripcion = $descripcion;
    $this->created_at = $created_at;
    $this->updated_at = $updated_at;
    $this->deleted_at = $deleted_at;
  }

  public function getId() {
    return $this->id;
  }

  /**
   * Retorna la descripcion del tipo producto
   * @return varchar
   */
  public function getDescripcion() {
    return $this->descripcion;
  }

  /**
   * Fecha y hora de la ultima actualización de la descripcion del tipo producto
   * @return date_time
   */
  public function getCreatedAt() {
    return $this->created_at;
  }

  /**
   * Fecha y hora de la ultima actualización de la descripcion del tipo producto
   * @return date_time
   */
  public function getUpdatedAt() {
    return $this->updated_at;
  }

  /**
   * Fecha y hora para controlar el borrado lógico
   * @return date_time
   */
  public function getDeletedAt() {
    return $this->deleted_at;
  }

  /**
   * Fija el id del tipo producto
   * @param integer $id
   * @version 1.0.0
   */
  public function setId($id) {
    $this->id = $id;
  }

  /**
   * descripcion del tipo producto
   * @param varchar $descripcion
   * @version 1.0.0
   */
  public function setDescripcion($descripcion) {
    $this->descripcion = $descripcion;
  }

  /**
   * Fija la fecha y la hora de creación de la descripcion del tipo producto
   * @version 1.0.0
   * @param date_time $createdAt
   */
  public function setCreatedAt($created_at) {
    $this->created_at = $created_at;
  }

  /**
   * Fija la fecha y la hora de la última actualización de la descripcion del tipo producto
   * @version 1.0.0
   * @param date_time $updateAt
   */
  public function setUpdatedAt($updated_at) {
    $this->updated_at = $updated_at;
  }

  /**
   * Fija la fecha y la hora del borrado lógico
   * @version 1.0.0
   * @param date_time $deletedAt
   */
  public function setDeletedAt($deleted_at) {
    $this->deleted_at = $deleted_at;
  }

}
