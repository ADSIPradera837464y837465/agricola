<?php

namespace FStudio\model\base;

use FStudio\fsModel as model;
use FStudio\myConfig as config;

/**
 * Description of tipoSueloBaseTable
 * 
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
  const CREATED_AT = 'tis_created_at';

  /**
   * Registra la fecha y hora de la actualización de un registro en la tabla tipo de suelo
   */
  const UPDATED_AT = 'tis_updated_at';

  /**
   * Registra la fecha y hora del borrado lógico de un registro en la tabla tipo de suelo
   */
  const DELETED_AT = 'tis_deleted_at';

  /**
   * Sequencia del indentificador de la tabla
   */
  const _SEQUENCE = 'bda_tipo_suelo_tis_id_seq';

  /**
   * Nombre de la tabla
   */
  const _TABLE = 'bda_tipo_suelo';

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
  private $created_at;

  /**
   * Registra la fecha y hora de la actualización de un registro en la tabla tipo de suelo
   * @var date_time
   */
  private $updated_at;

  /**
   * Registra la fecha y hora del borrado lógico de un registro en la tabla tipo de suelo
   * @var date_time
   */
  private $deleted_at;

  /**
   * Constructor de la clase tipoSueloBaseTable
   * @param config $config
   * @param type $id
   * @param type $descripcion
   * @param type $created_at
   * @param type $updated_at
   * @param type $deleted_at
   */
  public function __construct(config $config, $id = null, $descripcion = null, $created_at = null, $updated_at = null, $deleted_at = null) {
    $this->config = $config;
    $this->id = $id;
    $this->descripcion = $descripcion;
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
    return $this->created_at;
  }

  /**
   * Obtiene la hora y fecha de la actualización de un registro en la tabla tipo de suelo
   * @version 1.0.0
   * @return date_time
   */
  public function getUpdatedAt() {
    return $this->updated_at;
  }

  /**
   * Obtiene la hora y fecha de la eliminación de un registro en la tabla tipo de suelo
   * @version 1.0.0
   * @return date_time
   */
  public function getDeletedAt() {
    return $this->deleted_at;
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
  public function setCreatedAt($created_at) {
    $this->created_at = $created_at;
  }

  /**
   * Fija la hora y fecha de la actualización de un registro en la tabla
   * @version 1.0.0
   * @param date_time $upDatedAt
   */
  public function setUpdatedAt($updated_at) {
    $this->updated_at = $updated_at;
  }

  /**
   * Fija la hora y fecha de la eliminación de un registro en la tabla
   * @version 1.0.0
   * @param date_time $deletedAt
   */
  public function setDeletedAt($deleted_at) {
    $this->deleted_at = $deleted_at;
  }

}
