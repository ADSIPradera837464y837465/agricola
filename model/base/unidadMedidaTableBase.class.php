<?php

namespace FStudio\model\base;

use FStudio\fsModel as model;
use FStudio\myConfig as config;

/**
 * Description of unidadMedidaTableBase
 * @author AngelaCardona <angela04cardona@hotmail.com>
 * @package 
 * @subpackage model
 * @subpackage base
 * @version 1.0.0
 */
class unidadMedidaTableBase extends model {

  /**
   * ID de la tabla
   */
  const ID = 'unm_id';

  /**
   * Descripcion de la unidad de medida
   */
  const DESCRIPCION = 'unm_descripcion';

  /**
   * Logitud de la descripcion
   */
  const DESCRIPCION_LENGTH = 80;

  /**
   * Fecha y hora de creación de una nueva unidad de medida 
   */
  const CREATED_AT = 'unm_created_at';

  /**
   * Fecha y hora de la ultima actualización de una unidad de medida
   */
  const UPDATED_AT = 'unm_updated_at';

  /**
   * Fecha y hora para controlar el borrado lógico
   */
  const DELETED_AT = 'unm_deleted_at';

  /**
   * Nombre de la secuencia del ID de la tabla
   */
  const _SEQUENCE = '';

  /**
   * Nombre de la tabla
   */
  const _TABLE = 'bda_unidad_medida';

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
   * Descripcion de la unidad de medida
   * @var varchar
   */
  private $descripcion;

  /**
   * Fecha y hora de creación de una unidad de medida
   * @var date_time 
   */
  private $createdAt;

  /**
   * Fecha y hora de la ultima actualización de la unidad de medida
   * @var date_time
   */
  private $updateAt;

  /**
   * Fecha y hora para controlar el borrado lógico
   * @var date_time
   */
  private $deletedAt;

  /**
   * constructor class unidadMedidaTableBase
   * @version 1.0.0
   * @param integer $id
   * @param varchar $descripcion
   * @param date_time $createdAt
   * @param date_time $updateAt
   * @param date_time $deletedAt
   */
  public function __construct(config $config, $id = null, $descripcion = null, $createdAt = null, $updateAt = null, $deletedAt = null) {
    $this->config = $config;
    $this->id = $id;
    $this->descripcion = $descripcion;
    $this->createdAt = $createdAt;
    $this->updateAt = $updateAt;
    $this->deletedAt = $deletedAt;
  }

  /**
   * Retorna la configuracion
   * @return config
   * @version 1.0.0
   */
  public function getConfig() {
    return $this->config;
  }

  /**
   * Retorna el id del registro
   * @return integer
   * @version 1.0.0
   */
  public function getId() {
    return $this->id;
  }

  /**
   * Retorna la descripcion de la unidad de medida
   * @return varchar
   * @version 1.0.0
   */
  public function getDescripcion() {
    return $this->descripcion;
  }

  /**
   * Fecha y hora de la ultima actualización de la descripcion de la unidad de medida
   * @return date_time
   */
  public function getCreatedAt() {
    return $this->createdAt;
  }

  /**
   * Fecha y hora de la ultima actualización de la descripcion de la unidad de medida
   * @return date_time
   */
  public function getUpdateAt() {
    return $this->updateAt;
  }

  /**
   * Fecha y hora para controlar el borrado lógico
   * @return date_time 
   */
  public function getDeletedAt() {
    return $this->deletedAt;
  }

  /**
   * Fija la configuracion del sistema 
   * @param config $config objeto con configuracion del sistema 
   * @version 1.0.0
   */
  public function setConfig(config $config) {
    $this->config = $config;
  }

  /**
   * Fija el id de la unidad de medida
   * @param integer $id
   * @version 1.0.0
   */
  public function setId($id) {
    $this->id = $id;
  }

  /**
   * descripcion del tipo de la unidad de medida
   * @param varchar $descripcion 
   * @version 1.0.0
   */
  public function setDescripcion($descripcion) {
    $this->descripcion = $descripcion;
  }

  /**
   * Fija la fecha y la hora de creación de la descripcion de la unidad de medida
   * @version 1.0.0
   * @param date_time $createdAt
   */
  public function setCreatedAt($createdAt) {
    $this->createdAt = $createdAt;
  }

  /**
   * Fija la fecha y la hora de la última actualización de la descripcion de la unidad de medida
   * @version 1.0.0
   * @param date_time $updateAt
   */
  public function setUpdateAt($updateAt) {
    $this->updateAt = $updateAt;
  }

  /**
   * Fija la fecha y la hora del borrado lógico
   * @version 1.0.0
   * @param date_time $deletedAt
   */
  public function setDeletedAt($deletedAt) {
    $this->deletedAt = $deletedAt;
  }

}
