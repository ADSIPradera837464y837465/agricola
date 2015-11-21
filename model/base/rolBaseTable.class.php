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
  /*
   * identidad de la tabla
   */
  const NOMBRE = 'NOMBRE';
  /*
   * 
   */
  const NOMBRE_LENGHT = 80;
  /*
   * longitud del campo nombre
   */
  const CREATED_AT = 'created_at';
  const UPDATED_AT = 'updated_at';
  const DELETED_AT = 'deleted_at';

  /*
   * configuracion del sistema
   * @var config
   */

  protected $config;
  /*
   * ID dela tabla
   * @var integer
   */
  private $id;
  /*
   * @var string
   */
  private $nombre;
  private $createdAt;
  private $updatedAt;
  private $deletedAt;

  
  /**
   * 
   * @param config $config
   * @param integer $id
   * @param sting $nombre
   * @param date_time $createdAt
   * @param date_time $updatedAt
   * @param date_time $deletedAt
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
   * 
   * @retorna el id del registro
   */
  public function getId() {
    return $this->id;
  }

  public function getNombre() {
    return $this->nombre;
  }

  public function getCreatedAt() {
    return $this->createdAt;
  }

  public function getUpdatedAt() {
    return $this->updatedAt;
  }

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
   * fija el id para el registro en la tabla
   * @param integer $id
   */
  public function setId($id) {
    $this->id = $id;
  }

  public function setNombre($nombre) {
    $this->nombre = $nombre;
  }

  public function setCreatedAt($createdAt) {
    $this->createdAt = $createdAt;
  }

  public function setUpdatedAt($updatedAt) {
    $this->updatedAt = $updatedAt;
  }

  public function setDeletedAt($deletedAt) {
    $this->deletedAt = $deletedAt;
  }

}
