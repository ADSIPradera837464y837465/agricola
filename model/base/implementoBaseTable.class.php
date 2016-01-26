<?php

namespace FStudio\model\base;

use FStudio\fsModel as model;
use FStudio\myConfig as config;

/**
 * Clase base para la tabla bdaImplemento
 * 
 * @author Maribel Zamora <mazagi86@hotmail.com>
 * @package FStudio
 * @subpackage model
 * @subpackage base
 * @version 1.0.0
 */
class implementoBaseTable extends model {

  /**
   * id de la tabla
   */
  const ID = 'imp_id';

  /**
   * descripcion de la tabla
   */
  const DESCRIPCION = 'imp_descripcion';

  /**
   * longitud de la descripcion de la tabla
   */
  const DESCRIPCION_LENGTH = 80;

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
  const _SEQUENCE = 'bda_implemento_imp_id_seq';

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
   * Constructor de la clase implementoBaseTable
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
   * Retorna la creacion del registro
   * @version 1.0.0
   * @return date_time
   */
  public function getCreatedAt() {
    return $this->created_at;
  }

  /**
   * Retorna la actualizacion del registro
   * @version 1.0.0
   * @return date_time
   */
  public function getUpdatedAt() {
    return $this->updated_at;
  }

  /**
   * Retorna el borrado del registro
   * @version 1.0.0
   * @return date_time
   */
  public function getDeletedAt() {
    return $this->deleted_at;
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
   * Fija la creacion del registro
   * version 1.0.0
   * @param date_time createdAt
   */
  public function setCreatedAt($created_at) {
    $this->created_at = $created_at;
  }

  /**
   * Fija la actualizacion del registro
   * version 1.0.0
   * @param date_time $updatedAt
   */
  public function setUpdatedAt($updated_at) {
    $this->updated_at = $updated_at;
  }

  /**
   * Fija la fecha del borrado
   * @version 1.0.0
   * @param date_time $deletedAt
   */
  public function setDeletedAt($deleted_at) {
    $this->deleted_at = $deleted_at;
  }

}
