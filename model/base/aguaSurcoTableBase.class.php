<?php

namespace FStudio\model\base;

use FStudio\fsModel as model;
use FStudio\myConfig as config;


/**
 * Description of aguaSurcoTableBase
 * @author Johanna G <ladyjkaulitz@hotmail.com>
 * @package
 * @subpackage model
 * @subpackage table
 * @version 1.0.0
 */
class aguaSurcoTableBase extends model {

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
   * Numero del documento
   */
  const NUM_DOCUMENTO = 'fore_num_documento';

  /**
   * Secuencia de la tabla
   */
  const _SEQUENCE = '';

  /**
   * Tabla 
   */
  const _TABLE = 'bda_aguaSurco';

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
  private $cantidadSurco;

  /**
   * Numero del documento 
   * @var integer
   */
  private $numDocumento;

  /**
   * Fecha y hora de la creacion de un nuevo registro 
   * 
   * @var date_time
   */
  private $createdAt;

  /**
   * Fecha y hora de la  actualizacion de un registro 
   * date_time
   * @var 
   */
  private $updatedAt;

  /**
   * Fecha y hora de la eliminacion de un registro 
   * date_time
   * @var 
   */
  private $deletedAt;

  /**
   * Constructor de la clase aguaSurcoBaseTable
   * @version 1.0.0
   * @param config $config
   * @param integer $id
   * @param integer $item
   * @param integer $cantidadSurco
   * @param integer $numDocumento
   * @param date_time $createdAt
   * @param date_time $updatedAt
   * @param date_time $deletedAt
   */
  public function __construct(config $config, $id = null, $item = null, $cantidadSurco = null, $numDocumento = null, $createdAt = null, $updatedAt = null, $deletedAt = null) {
    $this->config = $config;
    $this->id = $id;
    $this->item = $item;
    $this->cantidadSurco = $cantidadSurco;
    $this->numDocumento = $numDocumento;
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
    return $this->cantidadSurco;
  }

  /**
   * Retorna el numero del registro
   * @return integer
   */
  public function getNumDocumento() {
    return $this->numDocumento;
  }

  /**
   * Retorna un registro creado
   * @return integer
   */
  public function getCreatedAt() {
    return $this->createdAt;
  }

  /**
   * Retorna la actualizacion de un registro
   * @return integer
   */
  public function getUpdatedAt() {
    return $this->updatedAt;
  }

  /**
   * Retorna la eliminacion de un registro
   * @return integer
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
   * Fija el item para el registro en la tabla
   * @version 1.0.0
   * @param integer $item
   */
  public function setItem($item) {
    $this->item = $item;
  }

  /**
   * Fija la cantidad de surco para el registro en la tabla
   * @version 1.0.0
   * @param integer $cantidadSurco
   */
  public function setCantidadSurco($cantidadSurco) {
    $this->cantidadSurco = $cantidadSurco;
  }

  /**
   * Fija el numero de documento para el registro en la tabla
   * @version 1.0.0
   * @param integer $numDocumento
   */
  public function setNumDocumento($numDocumento) {
    $this->numDocumento = $numDocumento;
  }

  /**
   * Fija la creacion de un nuevo registro en la tabla
   * @version 1.0.0
   * @param integer $createdAt
   */
  public function setCreatedAt($createdAt) {
    $this->createdAt = $createdAt;
  }

  /**
   * Fija la actualizacion de un registro en la tabla
   * @version 1.0.0
   * @param integer $updatedAt
   */
  public function setUpdatedAt($updatedAt) {
    $this->updatedAt = $updatedAt;
  }

  /**
   * Fija la eliminacion de un registro en la tabla
   * @version 1.0.0
   * @param integer $deletedAt
   */
  public function setDeletedAt($deletedAt) {
    $this->deletedAt = $deletedAt;
  }

}
