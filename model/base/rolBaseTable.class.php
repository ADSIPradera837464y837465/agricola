<?php

namespace FStudio\model\base;

use FStudio\fsModel as model;
use FStudio\myConfig as config;

/**
 * Description of rolBaseTable
 *
 * @author nombre completo <su@correo.com>
 * @package FStudio
 * @subpackage model
 * @subpackage base
 * @version 1.0.0
 */
class rolBaseTable extends model {

  /**
   * Id de la tabla
   * @var integer
   */
  const ID = 'rol_id';

  /**
   * Descripción del nombre
   */
  const NOMBRE = 'rol_nombre';

  /**
   * Longitud del campo descripción
   */
  const NOMBRE_LENGTH = 80;

  /**
   * Fecha y hora de creación del registro
   */
  const CREATED_AT = 'rol_created_at';

  /**
   * Fecha y hora de la ultima actualización del registro
   */
  const UPDATED_AT = 'rol_updated_at';

  /**
   * Fecha y hora para controlar el borrado lógico
   */
  const DELETED_AT = 'rol_deleted_at';

  /**
   * secuencia del registro
   */
  const _SEQUENCE = 'bda_rol_rol_id_seq';
  const _TABLE = 'bda_rol';

  /**
   * Configuración del sistema
   * @var config
   */

  protected $config;

  /**
   * ID del registro
   * @var integer
   */
  private $id;
  /*
   * nombre del registro
   * @var string
   */
  private $nombre;

  /**
   * nombre del producto
   * @var integer
   */
  private $created_at;

  /**
   * Fecha y hora de la ultima actualización del registro
   * @var date_time
   */
  private $updated_at;

  /**
   * Fecha y hora para controlar el borrado lógico
   * @var date_time
   */
  private $deleted_at;

  /**
   *
   * @param config $config
   * @param type $id
   * @param type $nombre
   * @param type $createdAt
   * @param type $updatedAt
   * @param type $deletedAt
   */
  public function __construct(config $config, $id = null, $nombre = null, $created_at = null, $updated_at = null, $deleted_at = null) {
    $this->config = $config;
    $this->id = $id;
    $this->nombre = $nombre;
    $this->created_at = $created_at;
    $this->updated_at = $updated_at;
    $this->deleted_at = $deleted_at;
  }

  /**
   * Retorna el ID del registro
   * @version 1.0.0
   * @return integer
   */
  public function getId() {
    return $this->id;
  }

  /**
   * Retorna la nombre del registro
   * @version 1.0.0
   * @return string
   */
  public function getNombre() {
    return $this->nombre;
  }

  /**
   * Retorna la fecha y la hora de creación del registro
   * @version 1.0.0
   * @return string
   */
  public function getCreatedAt() {
    return $this->created_at;
  }

  /**
   * Retorna la fecha y la hora de la última actualización del registro
   * @version 1.0.0
   * @return string
   */
  public function getUpdatedAt() {
    return $this->updated_at;
  }

  /**
   * Retorna la fecha y la hora del borrado lógico del registro
   * @version 1.0.0
   * @return string
   */
  public function getDeletedAt() {
    return $this->deleted_at;
  }

  /**
   * fija la configuracion del sistema
   * @version 1.0.0
   * @param config $config objeto con configuracion del sistema
   */
  public function setConfig($config) {
    $this->config = $config;
  }

  /**
   * fija el ID para el registro en la tabla
   * @param integer $id
   */
  public function setId($id) {
    $this->id = $id;
  }

  /**
   * fija el NOMBRE para el registro en la tabla
   * @param string $nombre
   */
  public function setNombre($nombre) {
    $this->nombre = $nombre;
  }

  public function setCreatedAt($created_at) {
    $this->created_at = $created_at;
  }

  /**
   * Fija fecha y hora de la última actualización del registro
   * @version 1.0.0
   * @param sting $updatedAt Fecha y hora de la última actualización del registro
   */
  public function setUpdatedAt($updated_at) {
    $this->updated_at = $updated_at;
  }

  public function setDeletedAt($deleted_at) {
    $this->deleted_at = $deleted_at;
  }

}
