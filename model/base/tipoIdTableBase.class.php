<?php

/**
 * Description of tipoIdBaseTable
 * @author Duvier Marin Escobar <duvierm24@gmail.com>
 * @package
 * @subpackage model
 * @subpackage base
 * @version 1.0.0
 */
class tipoIdTableBase extends model {

  /**
   * ID de la tabla
   */
  const ID = 'tpi_id';

  /**
   * Descripcion de la tabla
   */
  const DESCRIPCION = 'tpi_descipcion';

  /**
   * Longitud del campo descripcion
   */
  const DESCIPCION_LENGTH = 80;

  /**
   * Fecha de creacion del registro
   */
  const CREATED_AT = 'created_at';

  /**
   * Fecha de actualizacion del registro
   */
  const UPDATED_AT = 'created_at';

  /**
   * Fecha de eliminacion del registro
   */
  const DELETED_AT = 'deleted_at';

  /**
   * Secuencia de la tabla para la llave primaria
   */
  const _SEQUENCE = '';

  /**
   * Nombre de la tabla
   */
  const _TABLE = 'dba_tipo_id';

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
   */
  private $descripcion;

  /**
   * Fecha de creacion del registro
   * @var date_time
   */
  private $createdAt;

  /**
   * Fecha de actualizacion del registro
   * @var date_time
   */
  private $updatedAt;

  /**
   * Fecha de eliminacion del registro
   * @var date_time
   */
  private $deletedAt;

  /**
   * Constructor de la clase tipoIdTableBase
   * @version 1.0.0
   * @param config $config
   * @param integer $id
   * @param string $descripcion
   * @param date_time $createdAt
   * @param date_time $updatedAt
   * @param date_time $deletedAt
   */
  public function __construct(config $config, $id = null, $descripcion = null, $createdAt = null, $updatedAt = null, $deletedAt = null) {
    $this->config = $config;
    $this->id = $id;
    $this->descripcion = $descripcion;
    $this->createdAt = $createdAt;
    $this->updatedAt = $updatedAt;
    $this->deletedAt = $deletedAt;
  }

  /**
   * Retorna la configuracion del sistema
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
   * Retorna la fecha de creación del registro
   * @version 1.0.0
   * @return date_time
   */
  public function getCreatedAt() {
    return $this->createdAt;
  }

  /**
   * Retorna la fecha de actualización del registro
   * @version 1.0.0
   * @return date_time
   */
  public function getUpdatedAt() {
    return $this->updatedAt;
  }

  /**
   * Retorna la fecha de eliminacion del registro
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
  public function setCreatedAt($createdAt) {
    $this->createdAt = $createdAt;
  }

  /**
   * Fija la fecha de actualización del registro
   * @version 1.0.0
   * @param date_time $createdAt
   */
  public function setUpdatedAt($updatedAt) {
    $this->updatedAt = $updatedAt;
  }

  /**
   * Fija la fecha de eliminacion del registro
   * @version 1.0.0
   * @param date_time $createdAt
   */
  public function setDeletedAt($deletedAt) {
    $this->deletedAt = $deletedAt;
  }

}
