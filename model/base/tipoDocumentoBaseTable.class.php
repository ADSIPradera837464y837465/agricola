
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
   * Secuencia de la identificacion de la tabla 
   */
  const _SEQUENCE = 'bda_tipo_documento_tip_id_seq';

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
   *
   * @var integer
   */
  private $id;

  /**
   *
   * @var varchar
   */
  private $descripcion;

  /**
   *
   * @var varchar
   */
  private $movimiento;

  /**
   *
   * @var boolean
   */
  private $estado;

  /**
   *
   * @var date_time 
   */
  private $createdAt;

  /**
   *
   * @var date_time
   */
  private $updateAt;

  /**
   *
   * @var date_time
   */
  private $deletedAt;

  /**
   * 
   * constructor class tipoDocumentoBaseTable
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
   * 
   * @return date_time
   */
  public function getCreatedAt() {
    return $this->createdAt;
  }

  /**
   * 
   * @return date_time
   */
  public function getUpdateAt() {
    return $this->updateAt;
  }

  /**
   * 
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
   * 
   * @param date_time $createdAt
   */
  public function setCreatedAt($createdAt) {
    $this->createdAt = $createdAt;
  }

  /**
   * 
   * @param date_time $updateAt
   */
  public function setUpdateAt($updateAt) {
    $this->updateAt = $updateAt;
  }

  /**
   * 
   * @param date_time $deletedAt
   */
  public function setDeletedAt($deletedAt) {
    $this->deletedAt = $deletedAt;
  }

}
