<?php

namespace FStudio\model\base;

use FStudio\fsModel as model;
use FStudio\myConfig as config;

/**
 * Description of marcaBaseTable
 * @author AngelaCardona <angela04cardona@hotmail.com>
 * @package 
 * @subpackage model
 * @subpackage base
 * @version 1.0.0
 */
class marcaBaseTable {

  /**
   * ID de la tabla
   */
  const ID = 'mar_id';

  /**
   * Descripcion de la unidad de medida
   */
  const DESCRIPCION = 'mar_descripcion';

  /**
   * Logitud de la descripcion
   */
  const DESCRIPCION_LENGTH = 80;

  /**
   * Fecha y hora de creación de una nueva unidad de medida 
   */
  const CREATED_AT = 'mar_created_at';

  /**
   * Fecha y hora de la ultima actualización de una unidad de medida
   */
  const UPDATED_AT = 'mar_updated_at';

  /**
   * Fecha y hora para controlar el borrado lógico
   */
  const DELETED_AT = 'mar_deleted_at';

  /**
   * Nombre de la secuencia del ID de la tabla
   */
  const _SEQUENCE = 'bda_marca_mar_id_seq';

  /**
   * Nombre de la tabla
   */
  const _TABLE = 'bda_marca';

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
   * constructor class marcaBaseTable
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
   */
  public function getId() {
    return $this->id;
  }

  /**
   * Retorna la descripcion de la marca
   * @return varchar
   */
  public function getDescripcion() {
    return $this->descripcion;
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
   * Fija el id de la marca
   * @param integer $id
   */
  public function setId($id) {
    $this->id = $id;
  }

  /**
   * descripcion del tipo de marca
   * @param varchar $descripcion 
   */
  public function setDescripcion($descripcion) {
    $this->descripcion = $descripcion;
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
