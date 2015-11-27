<?php

namespace FStudio\model\base;

use FStudio\fsModel as model;
use FStudio\myConfig as config;


/**
 * Description of maquinaTableBase
 * @author Johanna G <ladyjkaulitz@hotmail.com>
 * @package
 * @subpackage model
 * @subpackage table
 * @version 1.0.0
 */
class maquinaTableBase extends model {

  /**
   * ID de la tabla
   */
  const ID = 'maq_id';

  /**
   * estado de la tabla
   */
  const ESTADO = 'maq_estado';
  
  /**
   * Longitud del campo estado 
   */
  const ESTADO_LENGTH = 30;

  /**
   * valor de la maquina
   * 
   */
  const VALOR = 'maq_valor';

  /**
   * fecha de la compra de la maquina
   */
  const FECHA_COMPRA = 'maq_fecha_compra';
  
   /**
   * fecha de la compra de la maquina
   */
  const NUMERO_CHASIS = 'maq_numero_chasis';
  
  /**
   * Longitud del campo numero chasis 
   */
  const NUMERO_CHASIS_LENGTH = 80;
  
   /**
   * accesorio de la maquina
   */
  const T_ACCESORIO = 'maq_t_asesorio';
  
   /**
   * Longitud del campo accesorio 
   */
  const ACCESORIO_LENGTH = 80;
  
   /**
   * horas trabajadas de la maquina 
   */
  const HORAS_TRABAJADAS = 'maq_horas_trabajadas';
  
   /**
   * tiempo del mantenimiento de la maquina
   */
  const TIEMPO_MANTENIMIENTO_HORAS = 'maq_tiempo_mantenimiento_horas';
  
  
   /**
   * serie de la maquina
   */
  const NUMERO_SERIE = 'maq_numero_serie';
  
   /**
   * Longitud del campo numero serie 
   */
  const NUMERO_SERIE_LENGTH = 80;
  
  
   /**
   * modelo de la maquina
   */
  const MODELO = 'maq_modelo';
  
   /**
   * Longitud del campo modelo 
   */
  const MODELO_LENGTH = 80;

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
