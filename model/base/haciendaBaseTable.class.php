<?php

namespace FStudio\model\base;

use FStudio\fsModel as model;
use FStudio\myConfig as config;

/**
 * Description of haciendaBaseTable
 * 
 * @author Victoria Cortes <victoriacortes2014@hotmail.com>
 * @package FStudio
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
   * Longitud del campo acción
   */
  const DESCRIPCION = 'hac_descripcion';

  /**
   * longitud del campo descripcion
   */
  const DESCRIPCION_LENGTH = 80;

  /**
   * Longitud del campo varchar
   */
  const UBICACION = 'hac_ubicacion';

  /**
   * Longitud del campo ubicacion
   */
  const UBICACION_LENGTH = 100;

  /**
   * Longitud del campo varchar
   */
  const REPRESENTANTE_LEGAL = 'hac_representante_legal';

  /**
   * Longitud del campo de representante_legal
   */
  const REPRESENTANTE_LEGAL_LENGTH = 100;

  /**
   * Longitud del campo varchar
   */
  const CREATED_AT = 'hac_created_at';

  /**
   * Longitud del campo hac_created_at
   */
  const UPDATED_AT = 'hac_updated_at';

  /**
   * Longitud del campo hac_updated_at
   */
  const DELETED_AT = 'hac_deleted_at';

  /**
   * Longitud del campo hac_deleted_at
   */
  const _SEQUENCE = 'bda_hacienda_hac_id_seq';

  /**
   * Longitud del campo bda_hacienda_hac_id_seq
   */
  const _TABLE = 'bda_hacienda';

  /**
   * Configuración del sistema
   * @var config
   */
  protected $config;

  /**
   * config de la tabla
   */
  private $id;

  /**
   * ID de la tabla
   * @var integer
   */
  private $descripcion;

  /**
   * descripcion de la tabla
   * @var string
   */
  private $ubicacion;

  /**
   * ubicacion de la tabla
   * @var string
   */
  private $representante_legal;

  /**
   * representante_legal de la tabla
   * @var string
   */
  private $created_at;

  /**
   * created_at de la tabla
   * @var string
   */
  private $updated_at;

  /**
   * updated_at de la tabla
   * @var string
   */
  private $deleted_at;

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
  public function __construct(config $config, $id = null, $descripcion = null, $ubicacion = null, $representante_legal = null, $created_at = null, $updated_at = null, $deleted_at = null) {
    $this->config = $config;
    $this->id = $id;
    $this->descripcion = $descripcion;
    $this->ubicacion = $ubicacion;
    $this->representante_legal = $representante_legal;
    $this->created_at = $created_at;
    $this->updated_at = $updated_at;
    $this->deleted_at = $deleted_at;
  }

  /**
   * Retorna el id del registro
   * @return integer
   */
  public function getId() {
    return $this->id;
  }

  /**
   * Retorna el id del registro
   * @return integer
   */
  public function getDescripcion() {
    return $this->descripcion;
  }

  /**
   * Retorna la descripcion del registro
   * @return integer
   */
  public function getUbicacion() {
    return $this->ubicacion;
  }

  /**
   * Retorna la ubicacion del registro
   * @return integer
   */
  public function getRepresentanteLegal() {
    return $this->representante_legal;
  }

  /**
   * Retorna el representante_legal del registro
   * @return integer
   */
  public function getCreatedAt() {
    return $this->created_at;
  }

  public function getUpdatedAt() {
    return $this->updated_at;
  }

  public function getDeletedAt() {
    return $this->deleted_at;
  }

  /**
   * Fija el id para el registro en la tabla
   * @param integer $id
   */
  public function setId($id) {
    $this->id = $id;
  }

  /**
   * Retorna el id del registro
   * @return integer
   */
  public function setDescripcion($descripcion) {
    $this->descripcion = $descripcion;
  }

  /**
   * Retorna la descripcion del registro
   * @return integer
   */
  public function setUbicacion($ubicacion) {
    $this->ubicacion = $ubicacion;
  }

  /**
   * Retorna la ubicacion del registro
   * @return integer
   */
  public function setRepresentanteLegal($representante_legal) {
    $this->representante_legal = $representante_legal;
  }

  /**
   * Retorna el representante_legal del registro
   * @return integer
   */
  public function setCreatedAt($created_at) {
    $this->created_at = $created_at;
  }

  /**
   * created_atdel registro
   * @return integer
   */
  public function setUpdatedAt($updated_at) {
    $this->updated_at = $updated_at;
  }

  /**
   * updated_at del registro
   * @return integer
   */
  public function setDeletedAt($deleted_at) {
    $this->deleted_at = $deleted_at;
  }

}
