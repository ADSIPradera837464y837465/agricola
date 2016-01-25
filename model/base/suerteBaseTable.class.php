<?php

namespace FStudio\model\base;

use FStudio\fsModel as model;
use FStudio\myConfig as config;

/**
 * Description of suerteBaseTable
 * @author Jordan Marles <jordanmarles@hotmail.es>
 * @package FStudio
 * @subpackage model
 * @subpackage base
 * @version 1.0.0
 */
class suerteBaseTable extends model {

  /**
   * ID de la tabla
   */
  const ID = 'sue_id';

  /**
   * Contiene la descripcion del suelo
   */
  const DESCRIPCION = 'sue_descripcion';

  /**
   * Longitud del campo DESCRIPCION
   */
  const DESCRIPCION_LENGTH = 80;

  /**
   * Contiene el id del area del suelo
   */
  const AREA = 'sue_area';
  
  /**
   * Foranea de la tabla tipo suelo
   */
  const TIPO_SUELO_ID = 'tis_id';

  /**
   * Registra la fecha y hora de la creacion de un registro en la tabla suerte
   */
  const CREATED_AT = 'sue_created_at';

  /**
   * Registra la fecha y hora de la actualización de un registro en la tabla suerte
   */
  const UPDATED_AT = 'sue_updated_at';

  /**
   * Registra la fecha y hora del borrado lógico de un registro en la tabla suerte
   */
  const DELETED_AT = 'sue_deleted_at';

  /**
   * Sequencia del indentificador de la tabla
   */
  const _SEQUENCE = 'bda_suerte_sue_id_seq';

  /**
   * Nombre de la tabla
   */
  const _TABLE = 'bda_suerte';

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
   * Contiene la descripcion del suelo
   * @var string
   */
  private $descripcion;

  /**
   * Contiene el id del area del suelo
   * @var integer
   */
  private $area;

  /**
   * Foranea de la tabla tipo suelo
   * @var integer
   */
  private $tipo_suelo_id;

  /**
   * Registra la fecha y hora de la creacion de un registro en la tabla suerte
   * @var date_time
   */
  private $created_at;

  /**
   * Registra la fecha y hora de la actualización de un registro en la tabla suerte
   * @var date_time
   */
  private $updated_at;

  /**
   * Registra la fecha y hora del borrado lógico de un registro en la tabla suerte
   * @var date_time
   */
  private $deleted_at;

  /**
   * Constructor de la clase suerteBaseTable
   * @param config $config
   * @param type $id
   * @param type $descripcion
   * @param type $area
   * @param type $tipo_suelo_id
   * @param type $created_at
   * @param type $updated_at
   * @param type $deleted_at
   */
  public function __construct(config $config, $id = null, $descripcion = null, $area = null, $tipo_suelo_id = null, $created_at = null, $updated_at = null, $deleted_at = null) {
    $this->config = $config;
    $this->id = $id;
    $this->descripcion = $descripcion;
    $this->area = $area;
    $this->tipo_suelo_id = $tipo_suelo_id;
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
   * Recibe el area en la tabla suerte
   * @version 1.0.0
   * @return integer
   */
  public function getArea() {
    return $this->area;
  }

  /**
   * Obtiene el identificador de la tabla tipo de suelo
   * @version 1.0.0
   * @return integer
   */
  public function getTipoSueloId() {
    return $this->tipo_suelo_id;
  }

  /**
   * Obtiene la hora y fecha de la creacion de un registro en la tabla suerte
   * @version 1.0.0
   * @return date_time
   */
  public function getCreatedAt() {
    return $this->created_at;
  }

  /**
   * Obtiene la hora y fecha de la actualización de un registro en la tabla suerte
   * @version 1.0.0
   * @return date_time
   */
  public function getUpdatedAt() {
    return $this->updated_at;
  }

  /**
   * Obtiene la hora y fecha de la eliminación de un registro en la tabla suerte
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
   * Fija la area de la tabla
   * @version 1.0.0
   * @param integer $area
   */
  public function setArea($area) {
    $this->area = $area;
  }

  /**
   * Fija la foranea de la tabla tipo suelo
   * @version 1.0.0
   * @param integer $tipoSueloId
   */
  public function setTipoSueloId($tipo_suelo_id) {
    $this->tipo_suelo_id = $tipo_suelo_id;
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
