<?php

/**
 * Description of ordenServicioBaseTable
 * @author merian montaño<nichesitap@hotmail.com>
 * @package 
 * @subpackage model
 * @subpackage base
 * @version 1.0.0
 */
class ordenServicioBaseTable extends model {

  /**
   * ID de la tabla
   */
  const ID = 'ors_id';

  /**
   * foranea de la tabla maquina
   */
  const MAQID = 'maq_id';

  /**
   * foranea de la tabla tipo mantenimiento
   */
  const TMAID = 'tma_id';

  /**
   * foranea de la tabla tercero elabora
   */
  const TERELABORAID = 'ter_id_elabora';

  /**
   * foranea de la tabla tercero realiza
   */
  const TERREALIZAID = 'ter_id_realiza';

  /**
   * fecha de la orden de servicio
   */
  const FECHA = 'ors_fecha';

  /**
   * descripcion de la orden de servicio
   */
  const OBSERVACION = 'ors_observacion';
  const OBSERVACION_LENGTH = 80;

  /**
   * @version 1.0.0
   * Configuración del sistema
   * @var config
   */
  protected $config;

  /**
   * ID de la tabla
   * @var integer
   */
  private $orsId;

  /**
   * id e la tabla maquina foranea
   * @var integer
   */
  private $maqId;

  /**
   * id de la tabla tipo mantenimiento foranea
   * @var integer
   */
  private $tmaId;

  /**
   * id de la taaba tercero elabora
   * @var integer
   */
  private $terIdElabora;

  /**
   * id de la taba tercero realiza
   * @var integer
   */
  private $terIdRealiza;

  /**
   *
   * @var date
   */
  private $orsFecha;

  /**
   * chequeo de la observacion
   * @var string
   */
  private $orsObservacion;

  /**
   * Fecha y hora del tipo de mantenimiento
   * @var 
   */
  private $orsCreatedAt;

  /**
   * Modificar el tipo de mantenimiento
   * @var 
   */
  private $orsUpdatedAt;

  /**
   * Fecha y hora para controlar el borrado logico
   * @var 
   */
  private $orsDeletedAt;

  /**
   * 
   * @param type $config
   * @param type $orsId
   * @param type $maqId
   * @param type $tmaId
   * @param type $terIdElabora
   * @param type $terIdRealiza
   * @param type $orsFecha
   * @param type $orsObservacion
   * @param type $orsCreatedAt
   * @param type $orsUpdatedAt
   * @param type $orsDeletedAt
   */
  function __construct($config, $orsId = null, $maqId = null, $tmaId = null, $terIdElabora = null, $terIdRealiza = null, $orsFecha = null, $orsObservacion = null, $orsCreatedAt = null, $orsUpdatedAt = null, $orsDeletedAt = null) {
    $this->config = $config;
    $this->orsId = $orsId;
    $this->maqId = $maqId;
    $this->tmaId = $tmaId;
    $this->terIdElabora = $terIdElabora;
    $this->terIdRealiza = $terIdRealiza;
    $this->orsFecha = $orsFecha;
    $this->orsObservacion = $orsObservacion;
    $this->orsCreatedAt = $orsCreatedAt;
    $this->orsUpdatedAt = $orsUpdatedAt;
    $this->orsDeletedAt = $orsDeletedAt;
  }

  /**
   * Retorna la configuración del sistema
   * @version 1.0.0
   * @return config
   */
  function getConfig() {
    return $this->config;
  }

  /**
   * Retorna el id de la orden de servicio
   * @return integer
   */
  function getOrsId() {
    return $this->orsId;
  }

  /**
   * retorna el id de tabla maquina
   * @return integer
   */
  function getMaqId() {
    return $this->maqId;
  }

  /**
   * retorma el id de la tabla tipo mantenimiento 
   * @return integer
   */
  function getTmaId() {
    return $this->tmaId;
  }

  /**
   * retorna de la tabla tercero elabora
   * @return integer
   */
  function getTerIdElabora() {
    return $this->terIdElabora;
  }

  /**
   * retorma el id de la tabla tercero realiza
   * @return integer
   */
  function getTerIdRealiza() {
    return $this->terIdRealiza;
  }

  /**
   * Retorna la fecha de la creacion de la orden de servicio
   * @return date
   */
  function getOrsFecha() {
    return $this->orsFecha;
  }

  /**
   * retorna el chequeo de la informacion
   * @return string
   */
  function getOrsObservacion() {
    return $this->orsObservacion;
  }

  /**
   * Retorna la creacion de una orden de servicio
   * @return 
   */
  function getOrsCreatedAt() {
    return $this->orsCreatedAt;
  }

  /**
   * Retorna la modificasion de una orden de servicio
   * @return 
   */
  function getOrsUpdatedAt() {
    return $this->orsUpdatedAt;
  }

  /**
   * Retorna la eliminacion de una orden de servicio
   * @return 
   */
  function getOrsDeletedAt() {
    return $this->orsDeletedAt;
  }

  /**
   * Fija la configuración del sistema
   * @version 1.0.0
   * @param config $config Objeto con configuración del sistema
   */
  function setConfig($config) {
    $this->config = $config;
  }

  /**
   * Retorna el id de la orden
   * @param integer
   */
  function setOrsId($orsId) {
    $this->orsId = $orsId;
  }

  /**
   * Retorna el id de la maquina
   * @param integer
   */
  function setMaqId($maqId) {
    $this->maqId = $maqId;
  }

  /**
   * Retorna el id del tipo mantenimiento
   * @param integer
   */
  function setTmaId($tmaId) {
    $this->tmaId = $tmaId;
  }

  /**
   * Retorna el id del tercero elabora
   * @param integer
   */
  function setTerIdElabora($terIdElabora) {
    $this->terIdElabora = $terIdElabora;
  }

  /**
   * Retorna el id del tercero realiza
   * @param integer
   */
  function setTerIdRealiza($terIdRealiza) {
    $this->terIdRealiza = $terIdRealiza;
  }

  /**
   * retorna la fecha de la orden
   * @param date $orsFecha
   */
  function setOrsFecha($orsFecha) {
    $this->orsFecha = $orsFecha;
  }

  /**
   * retorna el chequeo de la observacio
   * @param integer $orsObservacion
   */
  function setOrsObservacion($orsObservacion) {
    $this->orsObservacion = $orsObservacion;
  }

  /**
   * retorna la creacion de una nueva orden de servicio
   * @param type $orsCreatedAt
   */
  function setOrsCreatedAt($orsCreatedAt) {
    $this->orsCreatedAt = $orsCreatedAt;
  }

  /**
   * retorna la modificasion de la orden de servicio
   * @param type $orsUpdatedAt
   */
  function setOrsUpdatedAt($orsUpdatedAt) {
    $this->orsUpdatedAt = $orsUpdatedAt;
  }

  /**
   * retorna la eliminacion de una orden de servicio
   * @param type $orsDeletedAt
   */
  function setOrsDeletedAt($orsDeletedAt) {
    $this->orsDeletedAt = $orsDeletedAt;
  }

}
