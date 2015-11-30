<?php

namespace FStudio\model\base;

use FStudio\fsModel as model;
use FStudio\myConfig as config;

/**
 * clase base para la tabla bdaImplemento
 * @author maribel zamora <mazagi86@hotmail.com>
 * @package fStudio
 * @subpackage model
 * @subpackage base
 * @version 1.0.0
 */
class implementoTableBase extends model {

  /**
   * id de la tabla
   */
  const ID = 'imp_id';

  /**
   * descripcion de la tabla
   */
  const DESCRIPCION = 'imp_descripcion';

  /**
   * fecha de creacion del registro
   */
  const CREATED_AT = 'imp_created_at';

  /**
   * fecha de actualizacion del registro
   */
  const UPDATED_AT = 'imp_updated_at';

  /**
   * fecha para controlar el borrado
   */
  const DELETED_AT = 'imp_deleted_at';

  /**
   * nombre de la secuencia del id de la tabla
   */
  const _SEQUENCE = 'implemento_Id_seq';

  /**
   * nombre de la tabla
   */
  const _TABLE = 'bda_implemento';

  /**
   * Configuración del sistema
   * @var config
   */
  protected $config;

  /**
   * id del registro
   * @var integer
   */
  private $id;

  /**
   * descripcion del registro
   * @var integer
   */
  private $descripcion;

  /**
   * fecha de creacion del registro
   * @var string
   */
  private $created_at;

  /**
   * fecha de actualizacion del registro
   * @var date_time
   */
  private $updated_at;

  /**
   * fecha de eliminacion del registro
   * @var date_time
   */
  private $deleted_at;

  /**
   * Constructor de la clase implementoTableBase
   * @version 1.0.0
   * @param config $config
   * @param integer $id
   * @param string $descripcion
   * @param date_time $createdAt
   * @param date_time $updatedAt
   * @param date_time $deletedAt
   */
  function __construct(config $config, $id = null, $descripcion = null, $createdAt = null, $updatedAt = null, $deletedAt = null) {
    $this->config = $config;
    $this->id = $id;
    $this->descripcion = $descripcion;
    $this->createdAt = $createdAt;
    $this->updatedAt = $updatedAt;
    $this->deletedAt = $deletedAt;
  }

  /**
   * retorna la configuracion del sistema
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
   * Retorna la descripcion del registro
   * @version 1.0.0
   * @return string
   */
  public function getDescripcion() {
    return $this->descripcion;
  }

  /**
   * Retorna la creacion del registro
   * @version 1.0.0
   * @return date_time
   */
  public function getCreatedAt() {
    return $this->createdAt;
  }

  /**
   * Retorna la actualizacion del registro
   * @version 1.0.0
   * @return date_time
   */
  public function getUpdatedAt() {
    return $this->updatedAt;
  }

  /**
   * Retorna el borrado del registro
   * @version 1.0.0
   * @return date_time
   */
  public function getDeletedAt() {
    return $this->deletedAt;
  }

  /**
   * Fija  la configuracion del sistema
   * @version 1.0.0
   * @param config $config configuracion del sistema
   */
  public function setConfig(config $config) {
    $this->config = $config;
  }

  /**
   * Fija el id del registro 
   * @version 1.0.0
   * @param integer $id 
   */
  public function setId($id) {
    $this->id = $id;
  }

  /**
   * Fija la descripcion del registro 
   * @version 1.0.0
   * @param string $descripcion
   */
  public function setDescripcion($descripcion) {
    $this->descripcion = $descripcion;
  }

  /**
   * Fija hora y fecha de creacion del registro
   * version 1.0.0 
   * @param date_time $createdAt fecha y hora de creacion del rgistro
   */
  public function setCreatedAt($createdAt) {
    $this->createdAt = $createdAt;
  }

  /**
   * Fija la actualizacion del registro
   * version 1.0.0
   * @param date_time $updatedAt
   */
  public function setUpdatedAt($updatedAt) {
    $this->updatedAt = $updatedAt;
  }

  /**
   * Fija la fecha del borrado
   * @version 1.0.0
   * @param date_time $deletedAt
   */
  public function setDeletedAt($deletedAt) {
    $this->deletedAt = $deletedAt;
  }

}