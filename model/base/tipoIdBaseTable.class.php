<?php

namespace FStudio\model\base;

use FStudio\fsModel as model;
use FStudio\myConfig as config;

/**
 * Description of tipoIdBaseTable
 * 
 * @author Duvier Marin Escobar <duvierm24@gmail.com>
 * @package FStudio
 * @subpackage model
 * @subpackage base
 * @version 1.0.0
 */
class tipoIdBaseTable extends model {

  /**
   * ID de la tabla
   */
  const ID = 'tpi_id';

  /**
   * Descripcion de la tabla
   */
  const DESCRIPCION = 'tpi_descripcion';

  /**
   * Longitud del campo descripcion
   */
  const DESCRIPCION_LENGTH = 80;

  /**
   * Fecha de creacion del registro
   */
  const CREATED_AT = 'tpi_created_at';

  /**
   * Fecha de actualizacion del registro
   */
  const UPDATED_AT = 'tpi_updated_at';

  /**
   * Fecha de eliminacion del registro
   */
  const DELETED_AT = 'tpi_deleted_at';

  /**
   * Secuencia de la tabla para la llave primaria
   */
  const _SEQUENCE = 'bda_tipo_id_tpi_id_seq';

  /**
   * Nombre de la tabla
   */
  const _TABLE = 'bda_tipo_id';

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
   * Descripcion de la tabla
   * @var string
   */
  private $descripcion;

  /**
   * Fecha de creacion del registro
   * @var date_time
   */
  private $created_at;

  /**
   * Fecha de actualizacion del registro
   * @var date_time
   */
  private $updated_at;

  /**
   * Fecha de eliminacion del registro
   * @var date_time
   */
  private $deleted_at;

  /**
   * Constructor de la clase tipoIdBaseTable
   * @version 1.0.0
   * @param config $config
   * @param integer $id
   * @param string $descripcion
   * @param date_time $createdAt
   * @param date_time $updatedAt
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
   * Retorna la fecha de creación del registro
   * @version 1.0.0
   * @return date_time
   */
  public function getCreatedAt() {
    return $this->created_at;
  }

  /**
   * Retorna la fecha de actualización del registro
   * @version 1.0.0
   * @return date_time
   */
  public function getUpdatedAt() {
    return $this->updated_at;
  }

  /**
   * Retorna la fecha de eliminacion del registro
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
   * Fija la descripcion para el registro de la tabla
   * @version
   * @param string $descripcion
   */
  public function setDescripcion($descripcion) {
    $this->descripcion = $descripcion;
  }

  /**
   * Fija la fecha de creacion del registro
   * @version 1.0.0
   * @param date_time $created_at
   */
  public function setCreatedAt($created_at) {
    $this->created_at = $created_at;
  }

  /**
   * Fija la fecha de actualización del registro
   * @version 1.0.0
   * @param date_time $updated_at
   */
  public function setUpdatedAt($updated_at) {
    $this->updated_at = $updated_at;
  }

  /**
   * Fija la fecha de eliminacion del registro
   * @version 1.0.0
   * @param date_time $deleted_at
   */
  public function setDeletedAt($deleted_at) {
    $this->deleted_at = $deleted_at;
  }

}
