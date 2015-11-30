<?php

namespace FStudio\model\base;

use FStudio\fsModel as model;
use FStudio\myConfig as config;

/**
 * Description of tipoSueloBaseTable
 * @author Jordan Marles <jordanmarles@hotmail.es>
 * @package FStudio
 * @subpackage model
 * @subpackage base
 * @version 1.0.0
 */

class tipoSueloBaseTable extends model {
  
  /**
   * ID de la tabla
   */
  const ID = 'tis_id';
  
  /**
   * Contiene la descripcion del tipo de suelo
   */
  const DESCRIPCION = 'tis_descripcion';
  
  /**
   * Longitud del campo DESCRIPCION
   */
  const DESCRIPCION_LENGTH = 80;
 
  /**
   * Registra la fecha y hora de la creacion de un registro en la tabla tipo de suelo
   */
  const CREATED_AT = 'created_at';
  
  /**
   * Registra la fecha y hora de la actualización de un registro en la tabla tipo de suelo
   */
  const UPDATED_AT = 'update_at';
  
  /**
   * Registra la fecha y hora del borrado lógico de un registro en la tabla tipo de suelo
   */
  const DELETED_AT = 'deleted_at';
  
  /**
   * Sequencia del indentificador de la tabla
   */
  const _SEQUENCE = '';
  
  /**
   * Nombre de la tabla
   */
  const _TABLE = 'dba_tipo_suelo';
  
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
   * Contiene la descripcion del tipo de suelo
   * @var string 
   */
  private $descripcion;

  /**
   * Registra la fecha y hora de la creacion de un registro en la tabla tipo de suelo
   * @var date_time 
   */
  private $createdAt;
  
  /**
   * Registra la fecha y hora de la actualización de un registro en la tabla tipo de suelo
   * @var date_time 
   */
  private $upDatedAt;
  
  /**
   * Registra la fecha y hora del borrado lógico de un registro en la tabla tipo de suelo
   * @var date_time 
   */
  private $deletedAt;
  
  /**
   * Constructor de la clase tipoSueloBaseTable
   * @version 1.0.0
   * @param config $config
   * @param integer $id
   * @param string $descripcion
   * @param date_time $createdAt
   * @param date_time $upDatedAt
   * @param date_time $deletedAt
   */
  
  public function __construct(config $config, $id = null, $descripcion = null, $createdAt = null, $upDatedAt = null, $deletedAt = null) {
    $this->config = $config;
    $this->id = $id;
    $this->descripcion = $descripcion;
    $this->createdAt = $createdAt;
    $this->upDatedAt = $upDatedAt;
    $this->deletedAt = $deletedAt;
  }
  
  /**
   * Retorna la configuración del sistema
   * @version 1.0.0
   * @return config
   */
  public function getConfig() {
    return $this->config;
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
   * Obtiene la descripcion de la tabla
   * @version 1.0.0
   * @return string
   */
  public function getDescripcion() {
    return $this->descripcion;
  }

  /**
   * Obtiene la hora y fecha de la creacion de un registro en la tabla tipo de suelo
   * @version 1.0.0
   * @return date_time
   */
  public function getCreatedAt() {
    return $this->createdAt;
  }
  
  /**
   * Obtiene la hora y fecha de la actualización de un registro en la tabla tipo de suelo
   * @version 1.0.0
   * @return date_time
   */
  public function getUpDatedAt() {
    return $this->upDatedAt;
  }

  /**
   * Obtiene la hora y fecha de la eliminación de un registro en la tabla tipo de suelo
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
   * Fija la descripcion de la tabla
   * @version 1.0.0
   * @param string $descripcion
   */
  public function setDescripcion($descripcion) {
    $this->descripcion = $descripcion;
  }

  /**
   * Fija la hora y fecha de la cracion de un registro en la tabla
   * @version 1.0.0
   * @param date_time $createdAt
   */
  public function setCreatedAt($createdAt) {
    $this->createdAt = $createdAt;
  }

  /**
   * Fija la hora y fecha de la actualización de un registro en la tabla
   * @version 1.0.0
   * @param date_time $upDatedAt
   */
  public function setUpDatedAt($upDatedAt) {
    $this->upDatedAt = $upDatedAt;
  }

  /**
   * Fija la hora y fecha de la eliminación de un registro en la tabla
   * @version 1.0.0
   * @param date_time $deletedAt
   */
  public function setDeletedAt($deletedAt) {
    $this->deletedAt = $deletedAt;
  }


}
