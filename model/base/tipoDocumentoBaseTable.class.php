<?php

namespace FStudio\model\base;

use FStudio\fsModel as model;
use FStudio\myConfig as config;

/**
 * Description of tipoDocumentoBaseTable
 * @author AngelaCardona <angela04cardona@hotmail.com>
 * @package 
 * @subpackage model
 * @subpackage base
 * @version 1.0.0
 */
class tipoDocumentoBaseTable extends model {

  /**
   * ID de la tabla
   */
  const ID = 'tip_id';

  /**
   * Descripcion del documento
   */
  const DESCRIPCION = 'tpd_descripcion';

  /**
   * Logitud de la descripcion
   */
  const DESCRIPCION_LENGTH = 80;

  /**
   * Descripcion del tipo de movimiento 
   */
  const TIPO_MOVIMIENTO = 'tpd_tipo_movimiento';

  /**
   * logitud Tipo de movimiento documento
   */
  const TIPO_MOVIMIENTO_LENGTH = 80;

  /**
   * Estado documento 
   */
  const ESTADO = 'tpd_estado';

  /**
   * Fecha y hora de creación del documento
   */
  const CREATED_AT = 'tpd_created_at';

  /**
   * Fecha y hora de la ultima actualización del documento
   */
  const UPDATED_AT = 'tpd_updated_at';

  /**
   * Fecha y hora para controlar el borrado lógico
   */
  const DELETED_AT = 'tpd_deleted_at';

  /**
   * Secuencia de la identificacion de la tabla 
   */
  const _SEQUENCE = '';

  /**
   * Nombre de la tabla 
   */
  const _TABLE = 'bda_tipo_documento';

  /**
   * Configuración del sistema
   * @var config
   */
  protected $config;

  /**
   * id del registro del documento
   * @var integer
   */
  private $id;

  /**
   * muestra la descripcion del documento
   * @var varchar
   */
  private $descripcion;

  /**
   * muestra el movimiento del documento
   * @var varchar
   */
  private $movimiento;

  /**
   * mestra el estado del documento
   * @var boolean
   */
  private $estado;

  /**
   * Fecha y hora de creación del documento
   * @var date_time 
   */
  private $createdAt;

  /**
   * Fecha y hora de la ultima actualización del documento
   * @var date_time
   */
  private $updateAt;

  /**
   * Fecha y hora para controlar el borrado lógico
   * @var date_time
   */
  private $deletedAt;

  /**
   * 
   * constructor class tipoDocumentoBaseTable
   * @version 1.0.0
   * @param integer $id
   * @param varchar $descripcion
   * @param varchar $movimiento
   * @param booleano $estado
   * @param date_time $createdAt
   * @param date_time $updateAt
   * @param date_time $deletedAt
   */
  public function __construct(config $config, $id = null, $descripcion = null, $movimiento = null, $estado = null, $createdAt = null, $updateAt = null, $deletedAt = null) {
    $this->config = $config;
    $this->id = $id;
    $this->descripcion = $descripcion;
    $this->movimiento = $movimiento;
    $this->estado = $estado;
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
   */
  public function getId() {
    return $this->id;
  }

  /**
   * Retorna la descripcion del documento
   * @return varchar
   */
  public function getDescripcion() {
    return $this->descripcion;
  }

  /**
   * Retorna el tipo de movimiento del documento
   * @return varchar
   */
  public function getMovimiento() {
    return $this->movimiento;
  }

  /**
   * Retorna el estado del documento
   * @return boolean 
   */
  public function getEstado() {
    return $this->estado;
  }

  /**
   * Retorna la fecha y la hora de creación del documento
   * @return date_time
   */
  public function getCreatedAt() {
    return $this->createdAt;
  }

  /**
   * Retorna la fecha y la hora de la última actualización del documento
   * @return date_time
   */
  public function getUpdateAt() {
    return $this->updateAt;
  }

  /**
   * Retorna la fecha y la hora del borrado lógico del registro
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
   * Fija el id del registro del documento
   * @param integer $id
   */
  public function setId($id) {
    $this->id = $id;
  }

  /**
   * descripcion del tipo de documento 
   * @param varchar $descripcion 
   */
  public function setDescripcion($descripcion) {
    $this->descripcion = $descripcion;
  }

  /**
   * movimiento del documento
   * @param varchar $movimiento
   */
  public function setMovimiento($movimiento) {
    $this->movimiento = $movimiento;
  }

  /**
   * estado del documento
   * @param boolean  $estado
   */
  public function setEstado($estado) {
    $this->estado = $estado;
  }

  /**
   * Fija la fecha y la hora de creación del documento
   * @version 1.0.0
   * @param date_time $createdAt
   */
  public function setCreatedAt($createdAt) {
    $this->createdAt = $createdAt;
  }

  /**
   * Fija la fecha y la hora de la última actualización del documento
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
