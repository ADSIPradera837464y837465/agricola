<?php

namespace FStudio\model\base;

use FStudio\fsModel as model;
use FStudio\myConfig as config;

/**
 * Description of cargoBaseTable
 * 
 * @author Duvier Marin Escobar <duvierm24@gmail.com>
 * @package FStudio
 * @subpackage model
 * @subpackage base
 * @version 1.0.0
 */
class cargoBaseTable extends model {

  /**
   * ID de la tabla
   */
  const ID = 'car_id';

  /**
   * Descripcion de la tabla
   */
  const DESCRIPCION = 'car_descripcion';

  /**
   * Longitud del campo descripcion
   */
  const DESCRIPCION_LENGTH = 80;

  /**
   * Fecha de creacion del registro
   */
  const CREATED_AT = 'car_created_at';

  /**
   * Fecha de actualizacion del registro
   */
  const UPDATED_AT = 'car_updated_at';

  /**
   * Fecha de eliminacion del registro
   */
  const DELETED_AT = 'car_deleted_at';

  /**
   * Secuencia de la tabla para la llave primaria
   */
  const _SEQUENCE = 'bda_cargo_car_id_seq';

  /**
   * Nombre de la tabla
   */
  const _TABLE = 'bda_cargo';

  /**
   * Configuración del sistema
   * @var config
   */
  protected $config;

  /**
   * ID de la tabla
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
   * Constructor de la clase cargoBaseTable
   * @version 1.0.0
   * @param config $config
   * @param integer $id
   * @param string $descripcion
   * @param date_time $created_at
   * @param date_time $updated_at
   * @param date_time $deleted_at
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
   * @param date_time $createdAt
   */
  public function setCreatedAt($created_at) {
    $this->created_at = $created_at;
  }

  /**
   * Fija la fecha de actualización del registro
   * @version 1.0.0
   * @param date_time $updatedAt
   */
  public function setUpdatedAt($updated_at) {
    $this->updated_at = $updated_at;
  }

  /**
   * Fija la fecha de eliminacion del registro
   * @version 1.0.0
   * @param date_time $deletedAt
   */
  public function setDeletedAt($deleted_at) {
    $this->deleted_at = $deleted_at;
  }

}
