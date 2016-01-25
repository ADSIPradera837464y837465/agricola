<?php

namespace FStudio\model\base;

use FStudio\fsModel as model;
use FStudio\myConfig as config;

/**
 * Description of detalleRegistroBaseTable
 * @author Magda Chaux <lucia_chaux@hotmail.com>
 * @package FStudio
 * @subpackage model
 * @subpackage base
 * @version 1.0.0
 */
class detalleRegistroBaseTable extends model {

  /**
   * Item de la tabla
   */
  const ITEM = 'der_item';

  /**
   * Foranea de la tabla registro labores maquina equipo
   */
  const REGISTRO_LABORES_MAQUINA_EQUIPO = 'relme_numero';

  /**
   * Foranea de la tabla tercero 
   */
  const TERCERO_ID = 'ter_id';

  /**
   * Foranea de la tabla labor
   */
  const LABOR_ID = 'lab_id';

  /**
   * Foranea de la tabla suerte
   */
  const SUERTE_ID = 'sue_id';
  
  /**
   * Foranea de la tabla producto
   */
  const PRODUCTO_ID = 'pro_id';
  
  /**
   * Foranea de la tabla unidad medida
   */
  const UNIDAD_MEDIDA_ID = 'unm_id';
  
  /**
   * Foranea de la tabla maquina
   */
  const MAQUINA_ID = 'maq_id';
  
  /**
   * Tiempo sin uso
   */
  const TIEMPO_MUERTO = 'der_tiempo_muerto';

  /**
   * El total de horas laboradas
   */
  const TOTAL_HORAS_TRABAJADAS = 'der_total_horas_trabajadas';

  /**
   * Hora exacta de inicio
   */
  const HORA_INICIO = 'der_hora_inicio';

  /**
   * Hora exacta de fin
   */
  const HORA_FIN = 'der_hora_fin';
  
  /**
   * Cantidad
   */
  const CANTIDAD = 'der_cantidad';
  
  /**
   * Fecha de creacion del registro
   */
  const CREATED_AT = 'esb_created_at';

  /**
   * Fecha de actualizacion del registro
   */
  const UPDATED_AT = 'der_updated_at';

  /**
   * Fecha de eliminacion del registro
   */
  const DELETED_AT = 'der_deleted_at';

  /**
   * Secuencia de la tabla para la llave primaria
   */
  const _SEQUENCE = '';

  /**
   * Nombre de la tabla
   */
  const _TABLE = 'bda_detalle_registro';

  /**
   * Configuración del sistema
   * @var config
   */
  protected $config;

  /**
   * Item del registro
   */
  private $item;

  /**
   * Foranea de la tabla registro labores maquina equipo
   * @var integer 
   */
  private $relmeNumero;

  /**
   * Foranea de la tabla tercero 
   * @var integer 
   */
  private $terId;

  /**
   * Foranea de la tabla labor
   * @var integer 
   */
  private $labId;
  
  /**
   * Foranea de la tabla suerte
   * @var integer 
   */
  private $sueId;
  
  /**
   * Foranea de la tabla producto
   * @var integer 
   */
  private $proId;
  
  /**
   * Foranea de la tabla unidad medida
   * @var integer 
   */
  private $unmId;
  
  /**
   * Foranea de la tabla maquina
   * @var integer 
   */
  private $maqId;

  /**
   * Tiempo sin uso
   * @var integer 
   */
  private $derTiempoMuerto;

  /**
   * Total de horas laboradas
   * @var integer 
   */
  private $derTotalHorasTrabajadas;

  /**
   * Hora exacta de inicio
   * @var time 
   */
  private $derHoraInicio;
  
  /**
   * Hora exacta de fin
   * @var time 
   */
  private $derHoraFin;
  
  /**
   * Hora exacta de cantidad
   * @var integer 
   */
  private $derCantidad;
  
  /**
   * Fecha de creación del registro
   * @var date_time 
   */
  private $derCreatedAt;

  /**
   * Fecha de actualización del registro
   * @var date_time
   */
  private $derUpdatedAt;

  /**
   * Fecha de elimincación del registro
   * @var date _time
   */
  private $derDeletedAt;

  /**
   * Constructor de la clase detalleRegistroBaseTable
   * @param config $config
   * @param type $item
   * @param type $relmeNumero
   * @param type $terId
   * @param type $labId
   * @param type $sueId
   * @param type $proId
   * @param type $unmId
   * @param type $maqId
   * @param type $derTiempoMuerto
   * @param type $derTotalHorasTrabajadas
   * @param \FStudio\model\base\time $derHoraInicio
   * @param \FStudio\model\base\time $derHoraFin
   * @param type $derCantidad
   * @param \FStudio\model\base\date_time $derCreatedAt
   * @param \FStudio\model\base\date_time $derUpdatedAt
   * @param \FStudio\model\base\date $derDeletedAt
   */
  public function __construct(config $config, $item = null, $relmeNumero = null, $terId = null, $labId = null, $sueId = null, $proId = null, $unmId = null, $maqId = null, $derTiempoMuerto = null, $derTotalHorasTrabajadas = null, time $derHoraInicio = null, time $derHoraFin = null, $derCantidad = null, date_time $derCreatedAt = null, date_time $derUpdatedAt = null, date $derDeletedAt = null) {
    $this->config = $config;
    $this->item = $item;
    $this->relmeNumero = $relmeNumero;
    $this->terId = $terId;
    $this->labId = $labId;
    $this->sueId = $sueId;
    $this->proId = $proId;
    $this->unmId = $unmId;
    $this->maqId = $maqId;
    $this->derTiempoMuerto = $derTiempoMuerto;
    $this->derTotalHorasTrabajadas = $derTotalHorasTrabajadas;
    $this->derHoraInicio = $derHoraInicio;
    $this->derHoraFin = $derHoraFin;
    $this->derCantidad = $derCantidad;
    $this->derCreatedAt = $derCreatedAt;
    $this->derUpdatedAt = $derUpdatedAt;
    $this->derDeletedAt = $derDeletedAt;
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
   * Retorna el item del registro
   * @version 1.0.0
   * @return integer
   */
  public function getItem() {
    return $this->item;
  }

  /**
   * Obtiene el identificador de la tabla registro labores maquina
   * @version 1.0.0
   * @return integer
   */
  public function getRelmeNumero() {
    return $this->relmeNumero;
  }

  /**
   * Obtiene el identificador de la tabla tercero
   * @version 1.0.0
   * @return integer
   */
  public function getTerId() {
    return $this->terId;
  }

  /**
   * Obtiene el identificador de la tabla labor
   * @version 1.0.0
   * @return integer
   */
  public function getLabId() {
    return $this->labId;
  }

  /**
   * Obtiene el identificador de la tabla suerte
   * @version 1.0.0
   * @return integer
   */
  public function getSueId() {
    return $this->sueId;
  }

  /**
   * Obtiene el identificador de la tabla producto
   * @version 1.0.0
   * @return integer
   */
  public function getProId() {
    return $this->proId;
  }

  /**
   * Obtiene el identificador de la tabla unidad medida
   * @version 1.0.0
   * @return integer
   */
  public function getUnmId() {
    return $this->unmId;
  }

  /**
   * Obtiene el identificador de la tabla maquina
   * @version 1.0.0
   * @return integer
   */
  public function getMaqId() {
    return $this->maqId;
  }

  /**
   * Obtiene la cantidad del tiempo inutilizado
   * @version 1.0.0
   * @return integer
   */
  public function getDerTiempoMuerto() {
    return $this->derTiempoMuerto;
  }

  /**
   * Obtiene la cantidad de horas laboradas
   * @version 1.0.0
   * @return integer
   */
  public function getDerTotalHorasTrabajadas() {
    return $this->derTotalHorasTrabajadas;
  }

  /**
   * Almacena la hora de inicio
   * @version 1.0.0
   * @return integer
   */
  public function getDerHoraInicio() {
    return $this->derHoraInicio;
  }

  /**
   * Almacena la hora de fin
   * @version 1.0.0
   * @return integer
   */
  public function getDerHoraFin() {
    return $this->derHoraFin;
  }

  /**
   * Almacena la cantidad
   * @version 1.0.0
   * @return integer
   */
  public function getDerCantidad() {
    return $this->derCantidad;
  }

  /**
   * Obtiene la hora y fecha de la creacion de un registro en la tabla
   * @version 1.0.0
   * @return date_time
   */
  public function getDerCreatedAt() {
    return $this->derCreatedAt;
  }

  /**
   * Obtiene la hora y fecha de la modificacion de un registro en la tabla
   * @version 1.0.0
   * @return date_time
   */
  public function getDerUpdatedAt() {
    return $this->derUpdatedAt;
  }

  /**
   * Obtiene la hora y fecha de la eliminacion de un registro en la tabla
   * @version 1.0.0
   * @return date_time
   */
  public function getDerDeletedAt() {
    return $this->derDeletedAt;
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
   * Fija el item para el registro en la tabla
   * @version 1.0.0
   * @param integer $item
   */
  public function setItem($item) {
    $this->item = $item;
  }

  /**
   * Fija la foranea de la tabla registro labor maquina
   * @version 1.0.0
   * @param integer $relmeNumero
   */
  public function setRelmeNumero($relmeNumero) {
    $this->relmeNumero = $relmeNumero;
  }

  /**
   * Fija la foranea de la tabla tercero
   * @version 1.0.0
   * @param integer $terId
   */
  public function setTerId($terId) {
    $this->terId = $terId;
  }

  public function setLabId($labId) {
    $this->labId = $labId;
  }

  /**
   * Fija la foranea de la tabla suerte
   * @version 1.0.0
   * @param integer $sueId
   */
  public function setSueId($sueId) {
    $this->sueId = $sueId;
  }

  /**
   * Fija la foranea de la tabla producto
   * @version 1.0.0
   * @param integer $proId
   */
  public function setProId($proId) {
    $this->proId = $proId;
  }

  /**
   * Fija la foranea de la tabla unidad medida
   * @version 1.0.0
   * @param integer $unmId
   */
  public function setUnmId($unmId) {
    $this->unmId = $unmId;
  }

  /**
   * Fija la foranea de la tabla maquina
   * @version 1.0.0
   * @param integer $maqId
   */
  public function setMaqId($maqId) {
    $this->maqId = $maqId;
  }

  /**
   * Fija la cantidad de tiempo inutilizado
   * @version 1.0.0
   * @param integer $derTiempoMuerto
   */
  public function setDerTiempoMuerto($derTiempoMuerto) {
    $this->derTiempoMuerto = $derTiempoMuerto;
  }

  /**
   * Fija la cantidad de horas laboradas
   * @version 1.0.0
   * @param integer $derTotalHorasTrabajadas
   */
  public function setDerTotalHorasTrabajadas($derTotalHorasTrabajadas) {
    $this->derTotalHorasTrabajadas = $derTotalHorasTrabajadas;
  }

  /**
   * Fija la hora de inicio
   * @version 1.0.0
   * @param integer $derHoraInicio
   */
  public function setDerHoraInicio(time $derHoraInicio) {
    $this->derHoraInicio = $derHoraInicio;
  }

  /**
   * Fija la hora de fin
   * @version 1.0.0
   * @param integer $derHoraFin
   */
  public function setDerHoraFin(time $derHoraFin) {
    $this->derHoraFin = $derHoraFin;
  }

  /**
   * Fija la cantidad
   * @version 1.0.0
   * @param integer $derCantidad
   */
  public function setDerCantidad($derCantidad) {
    $this->derCantidad = $derCantidad;
  }

  /**
   * Fija la hora y fecha de la creación de un registro en la tabla
   * @version 1.0.0
   * @param date_time $derCreatedAt
   */
  public function setDerCreatedAt(date_time $derCreatedAt) {
    $this->derCreatedAt = $derCreatedAt;
  }

  /**
   * Fija la hora y fecha de la modificacion de un registro en la tabla
   * @version 1.0.0
   * @param date_time $derUpdatedAt
   */
  public function setDerUpdatedAt(date_time $derUpdatedAt) {
    $this->derUpdatedAt = $derUpdatedAt;
  }

  /**
   * Fija la hora y fecha de la eliminacion de un registro en la tabla
   * @version 1.0.0
   * @param date_time $derDeletedAt
   */
  public function setDerDeletedAt(date $derDeletedAt) {
    $this->derDeletedAt = $derDeletedAt;
  }

}
