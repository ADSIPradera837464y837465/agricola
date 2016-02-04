<?php

namespace FStudio\model\base;

use FStudio\fsModel as model;
use FStudio\myConfig as config;

/**
 * Description of tipoMantenimientoBaseTable
 * @author merian montaño<nichesitap@hotmail.com>
 * @package 
 * @subpackage model
 * @subpackage base
 * @version 1.0.0
 */
class tipoMantenimientoBaseTable extends model {

  /**
   * ID de la tabla
   */
  const ID = 'tma_id';

  /**
   * descripcion de tipo de mantenimiento
   */
  const DESCRIPCION = 'tma_descripcion';

  /**
   * longitud del campo de la descripcion
   */
  const DESCRIPCION_LENGTH = 80;

  /**
   * Fecha de creacion del registro
   */
  const CREATED_AT = 'tma_created_at';

  /**
   * Fecha de actualizacion del registro
   */
  const UPDATED_AT = 'tma_updated_at';

  /**
   * Fecha de eliminacion del registro
   */
  const DELETED_AT = 'tma_deleted_at';

  /**
   * Secuencia de la tabla para la llave primaria
   */
  const _SEQUENCE = 'bda_tipo_mantenimiento_tma_id_seq';

  /**
   * Nombre de la tabla
   */
  const _TABLE = 'bda_tipo_mantenimiento';

  /**
   * @version 1.0.0
   * Configuración del sistema
   * @var config
   */
  protected $config;

  /**
   * ID de la tabla
   */
  private $id;

  /**
   * descripcion del tipo de mantenimiento
   * type string
   */
  private $descripcion;

  /**
   * Fecha de creación del registro
   * @var date_time 
   */
  private $created_at;

  /**
   * Fecha de actualización del registro
   * @var date_time
   */
  private $updated_at;

  /**
   * Fecha de elimincación del registro
   * @var date _time
   */
  private $deleted_at;

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
   * Retorna la descripcion del tipo de mantenimiento
   * @return string
   */
  public function getDescripcion() {
    return $this->descripcion;
  }

  /**
   * Retorna la creacion de tipo de mantenimiento nuevo
   * @return 
   */
  public function getCreatedAt() {
    return $this->created_at;
  }

  /**
   * Retorna la modificasion de un tipo de mantenimiento
   * @return 
   */
  public function getUpdatedAt() {
    return $this->updated_at;
  }

  /**
   * Retorna la eliminacion de un tipo de mantenimiento
   * @return 
   */
  public function getDeletedAt() {
    return $this->deleted_at;
  }

  /**
   * Fija la configuración del sistema
   * @version 1.0.0
   * @param config $config Objeto con configuración del sistema
   */
  function setConfig(config $config) {
    $this->config = $config;
  }

  /**
   * Retorna el id del registro
   * @return integer
   */
  public function setId($id) {
    $this->id = $id;
  }

  /**
   * Retorna la descripcion del tipo de mantenimiento
   * @return string
   */
  public function setDescripcion($descripcion) {
    $this->descripcion = $descripcion;
  }

  /**
   * Retorna la modificasion de un tipo de mantenimiento
   * @return 
   */
  public function setCreatedAt($created_at) {
    $this->created_at = $created_at;
  }

  /**
   * Retorna la modificasion de un tipo de mantenimiento
   * @return 
   */
  public function setUpdatedAt($updated_at) {
    $this->updated_at = $updated_at;
  }

  /**
   * Retorna la eliminacion de un tipo de mantenimiento
   * @return 
   */
  public function setDeletedAt($deleted_at) {
    $this->deleted_at = $deleted_at;
  }

}
