<?php

namespace FStudio\model\base;

use FStudio\fsModel as model;
use FStudio\myConfig as config;

/**
 * Description of detalleAguaSurcoBaseTable
 * 
 * @author Johanna G <ladyjkaulitz@hotmail.com>
 * @package FStudio
 * @subpackage model
 * @subpackage base
 * @version 1.0.0
 */
class detalleAguaSurcoBaseTable extends model {

  /**
   * ID de la tabla
   */
  const ID = 'deaas_id';

  /**
   * Secuencia del identificador de la tabla
   */
  const ITEM = 'deaas_item';

  /**
   * Longitud del campo item
   */
  const ITEM_LENGTH = 80;

  /**
   * Cantidad del surco
   *
   */
  const CANTIDAD_SURCO = 'deaas_cantidad_surco';

  /**
   * control del riego de la tabla
   */
  const CONTROL_ADMINISTRATIVO_RIEGO_ID = 'car_num_documento';

  /**
   * creacion de la tabla
   */
  const CREATED_AT = 'deaas_created_at';

  /**
   * modificacion de la tabla
   */
  const UPDATED_AT = 'deaas_updated_at';

  /**
   * eliminando un elemento de la tabla
   */
  const DELETED_AT = 'deaas_deleted_at';

  /**
   * Secuencia de la tabla
   */
  const _SEQUENCE = 'bda_detalle_agua_surco_deaas_id_seq';

  /**
   * Tabla
   */
  const _TABLE = 'bda_detalle_agua_surco';

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
   * Item de la tabla
   * @var string
   */
  private $item;

  /**
   * Cantidad del surco
   * @var integer
   */
  private $cantidad_surco;

  /**
   * Numero del documento
   * @var integer
   */
  private $control_administrativo_riego_id;

  /**
   * Fecha y hora de la creacion de un nuevo registro
   *
   * @var date_time
   */
  private $created_at;

  /**
   * Fecha y hora de la  actualizacion de un registro
   *
   * @var date_time
   */
  private $updated_at;

  /**
   * Fecha y hora de la eliminacion de un registro
   *
   * @var  date_time
   */
  private $deleted_at;

  public function __construct(config $config, $id = null, $item = null, $cantidad_surco = null, $control_administrativo_riego_id = null, $created_at = null, $updated_at = null, $deleted_at = null) {
    $this->config = $config;
    $this->id = $id;
    $this->item = $item;
    $this->cantidad_surco = $cantidad_surco;
    $this->control_administrativo_riego_id = $control_administrativo_riego_id;
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
   * Retorna el item del registro
   * @return integer
   */
  public function getItem() {
    return $this->item;
  }

  /**
   * Retorna la cantidad de registros
   * @return integer
   */
  public function getCantidadSurco() {
    return $this->cantidad_surco;
  }

  /**
   * Retorna el numero del registro
   * @return integer
   */
  public function getControlAdministrativoRiegoId() {
    return $this->control_administrativo_riego_id;
  }

  /**
   * Retorna un registro creado
   * @return integer
   */
  public function getCreatedAt() {
    return $this->created_at;
  }

  /**
   * Retorna la actualizacion de un registro
   * @return integer
   */
  public function getUpdatedAt() {
    return $this->updated_at;
  }

  /**
   * Retorna la eliminacion de un registro
   * @return integer
   */
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
   * Fija el item para el registro en la tabla
   * @param integer $item
   */
  public function setItem($item) {
    $this->item = $item;
  }

  /**
   * Fija la cantidad de surco para el registro en la tabla
   * @param integer $cantidadSurco
   */
  public function setCantidadSurco($cantidad_surco) {
    $this->cantidad_surco = $cantidad_surco;
  }

  /**
   * Fija el control del riego para el registro en la tabla
   * @param integer $numDocumento
   */
  public function setControlAdministrativoRiegoId($control_administrativo_riego_id) {
    $this->control_administrativo_riego_id = $control_administrativo_riego_id;
  }

  /**
   * Fija la creacion de un nuevo registro en la tabla
   * @param date_time $createdAt
   */
  public function setCreatedAt($created_at) {
    $this->created_at = $created_at;
  }

  /**
   * Fija la actualizacion de un registro en la tabla
   * @param date_time $updatedAt
   */
  public function setUpdatedAt($updated_at) {
    $this->updated_at = $updated_at;
  }

  /**
   * Fija la eliminacion de un registro en la tabla
   * @param date_time $deletedAt
   */
  public function setDeletedAt($deleted_at) {
    $this->deleted_at = $deleted_at;
  }

}
