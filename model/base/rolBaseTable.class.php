<?php

namespace FStudio\model\base;
use FStudio\fsModel as model;
use FStudio\myConfig as config;

/**
 * Description of bda_rol
 * @author WilmerAndresMartinez wilmerelmejor94@hotmail.com
 * @package
 * @subpackage model
 * @subpackage table
 * @version 1.0.0
 */
class rolBaseTable extends model {

  /**
   * Id de la tabla
   * @var integer
   */
  const ID = 'id';
  /**
   * Descripción del nombre
   */
  const NOMBRE = 'NOMBRE';
  /**
   * Longitud del campo descripción
   */
  const NOMBRE_LENGHT = 80;
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

  /*
   * configuracion del sistema
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
  private $createdAt;
  /**
   *Fecha y hora de la ultima actualización del registro
   * @var date_time
   */
  private $updatedAt;
  /**
   * Fecha y hora para controlar el borrado lógico
   * @var date_time
   */
  private $deletedAt;

  
  /**
   * 
   * @param config $config
   * @param type $id
   * @param type $nombre
   * @param type $createdAt
   * @param type $updatedAt
   * @param type $deletedAt
   */
  function __construct(config $config = null, $id = null, $nombre = null, $createdAt = null, $updatedAt = null, $deletedAt = null) {
    $this->config = $config;
    $this->id = $id;
    $this->nombre = $nombre;
    $this->createdAt = $createdAt;
    $this->updatedAt = $updatedAt;
    $this->deletedAt = $deletedAt;
  }
  /**
   * 
   * @retorna la configuracion del sistema 
   * @version 1.0.0
   * @return config
   */

  public function getConfig() {
    return $this->config;
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
    return $this->createdAt;
  }
  /**
   * Retorna la fecha y la hora de la última actualización del registro
   * @version 1.0.0
   * @return string
   */

  public function getUpdatedAt() {
    return $this->updatedAt;
  }

  /**
   * Retorna la fecha y la hora del borrado lógico del registro
   * @version 1.0.0
   * @return string
   */
  public function getDeletedAt() {
    return $this->deletedAt;
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

  /**
   * Fija la fecha y la hora de creación del registro
   * @version 1.0.0
   * @param string $createdAt Fecha y hora de creación
   */
  public function setCreatedAt($createdAt) {
    $this->createdAt = $createdAt;
  }
  /**
   * Fija fecha y hora de la última actualización del registro
   * @version 1.0.0
   * @param sting $updatedAt Fecha y hora de la última actualización del registro
   */

  public function setUpdatedAt($updatedAt) {
    $this->updatedAt = $updatedAt;
  }
 /**
   * Fija fecha y hora del borrado lógico
   * @version 1.0.0
   * @param string $deletedAt Fecha y hora del borrado lógico
   */
  public function setDeletedAt($deletedAt) {
    $this->deletedAt = $deletedAt;
  }

}
