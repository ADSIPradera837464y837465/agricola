<?php
/**
 * 
 */
namespace FStudio\model\base;

use FStudio\fsModel as model;
use FStudio\myConfig as config;

/**
 * Description of haciendaBaseTable
 * @author Victoria Cortes <victoriacortes2014@hotmail.com>
 * @package 
 * @subpackage model
 * @subpackage base
 * @version 1.0.0
 */
class haciendaBaseTable extends model {

  /**
   * ID de la tabla
   */
  const ID = 'hac_id';

  /**
   * Foranea de la tabla usuario
   */
  const USUARIO_ID = 'usr_id';

  /**
   * Acción en la hacienda<br>
   * Ejemplo: borrar, insertar
   */
  const ACCION = 'bit_accion';

  /**
   * Longitud del campo acción
   */
  const DESCRIPCION = 'hac_descripcion';
  const UBICACION = 'hac_ubicacion';
  const REPRESENTANTE_LEGAL = 'hac_represen_legal';
  const CREATED_AT = 'hac_created_at';
  const UPDATED_AT = 'hac_updated_at';
  const DELECTED_AT = 'hac_delected_at';

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
   *
   * @var string
   */
  private $descripcion;

  /**
   *
   * @var string

   */
  private $ubicacion;

  /**
   *
   * @var string
   */
  private $representante_legal;

  /**
   *
   * @var string
   */
  private $createdAt;
  private $updatedAt;
  private $deletedAt;

  /**
   * Constructor de la clase haciendaBaseTable 
   * @param config $config
   * @param integer $id
   * @param string $descripcion
   * @param string $ubicacion
   * @param string $representante_legal
   * @param date $createdAt
   * @param date $updatedAt
   * @param date $deletedAt
   */
  public function __construct(config $config, $id = null, $descripcion = null, $ubicacion = null, $representante_legal = null, $createdAt = null, $updatedAt = null, $deletedAt) {
    $this->config = $config;
    $this->id = $id;
    $this->descripcion = $descripcion;
    $this->ubicacion = $ubicacion;
    $this->representante_legal = $representante_legal;
    $this->createdAt = $createdAt;
    $this->updatedAt = $updatedAt;
    $this->deletedAt = $deletedAt;
  }

  /**
   * Retorna la configuración del sistema
   * @version 1.0.0
   * @return config
   */
  public function getConfig() {
    return $this->config;
  }

  /**
   * Retorna el id del registro
   * @return integer
   */
  public function getId() {
    return $this->id;
  }

  public function getDescripcion() {
    return $this->descripcion;
  }

  public function getUbicacion() {
    return $this->ubicacion;
  }

  public function getRepresentante_legal() {
    return $this->representante_legal;
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
   * Fija la configuración del sistema
   * @version 1.0.0
   * @param config $config Objeto con configuración del sistema
   */
  public function setConfig(config $config) {
    $this->config = $config;
  }

  /**
   * Fija el id para el registro en la tabla
   * @param integer $id
   */
  public function setId($id) {
    $this->id = $id;
  }

  public function setDescripcion($descripcion) {
    $this->descripcion = $descripcion;
  }

  public function setUbicacion($ubicacion) {
    $this->ubicacion = $ubicacion;
  }

  public function setRepresentante_legal($representante_legal) {
    $this->representante_legal = $representante_legal;
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
