<?php

namespace FStudio\model\base;

use FStudio\fsModel as model;
use FStudio\myConfig as config;

/**
 * Description of ordenServicioBaseTable
 * @author marian montaño<nichesitap@hotmail.com>
 * @package 
 * @subpackage model
 * @subpackage base
 * @version 1.0.0
 */
class ordenServicioBaseTable extends model {

  const ID = 'ors_id';
  const MAQUINA_ID = 'maq_id';
  const TIPO_MANTENIMIENTO_ID = 'tma_id';
  const TERCERO_ID_ELABORA = 'ter_id_elabora';
  const TERCERO_ID_REALIZA = 'ter_id_realiza';
  const FECHA = 'ors_fecha';

  /**
   * descripcion de la orden de servicio
   */
  const OBSERVACION = 'ors_observacion';
  const OBSERVACION_LENGTH = 1024;

  /**
   * Fecha y hora  de creacion del registro
   */
  const CREATED_AT = 'ors_created_at';

  /**
   * Fecha y hora para controlar el borrado lógico
   */
  const UPDATED_AT = 'ors_updated_at';

  /**
   * Fecha y hora para controlar el borrado lógico
   */
  const DELETED_AT = 'ors_deleted_at';

  /**
   * Secuencia de la tabla 
   */
  const _SEQUENCE = 'bda_orden_servicio_ors_id_seq';

  /**
   * nombre de la tabla
   */
  const _TABLE = 'bda_orden_servicio';

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
  private $id;

  /**
   * id e la tabla maquina foranea
   * @var integer
   */
  private $maquina_id;

  /**
   * id de la tabla tipo mantenimiento foranea
   * @var integer
   */
  private $tipo_mantenimiento_id;

  /**
   * id de la tabla tercero elabora
   * @var integer
   */
  private $tercero_id_elabora;

  /**
   * id de la taba tercero realiza
   * @var integer
   */
  private $tercero_id_realiza;

  /**
   *
   * @var date
   */
  private $fecha;

  /**
   * chequeo de la observacion
   * @var string
   */
  private $observacion;

  /**
   * Fecha y hora del tipo de mantenimiento
   * @var 
   */
  private $created_at;

  /**
   * Modificar el tipo de mantenimiento
   * @var 
   */
  private $updated_at;

  /**
   * Fecha y hora para controlar el borrado logico
   * @var 
   */
  private $deleted_at;

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
  public function __construct(config $config, $id = null, $maquina_id = null, $tipo_mantenimiento_id = null, $tercero_id_elabora = null, $tercero_id_realiza = null, $fecha = null, $observacion = null, $created_at = null, $updated_at = null, $deleted_at = null) {
    $this->config = $config;
    $this->id = $id;
    $this->maquina_id = $maquina_id;
    $this->tipo_mantenimiento_id = $tipo_mantenimiento_id;
    $this->tercero_id_elabora = $tercero_id_elabora;
    $this->tercero_id_realiza = $tercero_id_realiza;
    $this->fecha = $fecha;
    $this->observacion = $observacion;
    $this->created_at = $created_at;
    $this->updated_at = $updated_at;
    $this->deleted_at = $deleted_at;
  }

  /**
   * Retorna el id de la orden de servicio
   * @return integer
   */
  public function getId() {
    return $this->id;
  }

  /**
   * retorna el id de tabla maquina
   * @return integer
   */
  public function getMaquinaId() {
    return $this->maquina_id;
  }

  /**
   * retorma el id de la tabla tipo mantenimiento 
   * @return integer
   */
  public function getTipoMantenimientoId() {
    return $this->tipo_mantenimiento_id;
  }

  /**
   * retorna de la tabla tercero elabora
   * @return integer
   */
  public function getTerceroIdElabora() {
    return $this->tercero_id_elabora;
  }

  /**
   * retorma el id de la tabla tercero realiza
   * @return integer
   */
  public function getTerceroIdRealiza() {
    return $this->tercero_id_realiza;
  }

  /**
   * Retorna la fecha de la creacion de la orden de servicio
   * @return date
   */
  public function getFecha() {
    return $this->fecha;
  }

  /**
   * retorna el chequeo de la informacion
   * @return string
   */
  public function getObservacion() {
    return $this->observacion;
  }

  /**
   * Retorna la creacion de una orden de servicio
   * @return 
   */
  public function getCreatedAt() {
    return $this->created_at;
  }

  /**
   * Retorna la modificasion de una orden de servicio
   * @return 
   */
  public function getUpdatedAt() {
    return $this->updated_at;
  }

  /**
   * Retorna la eliminacion de una orden de servicio
   * @return 
   */
  public function getDeletedAt() {
    return $this->deleted_at;
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
  public function setId($id) {
    $this->id = $id;
  }

  /**
   * Retorna el id de la maquina
   * @param integer
   */
  public function setMaquinaId($maquina_id) {
    $this->maquina_id = $maquina_id;
  }

  /**
   * Retorna el id del tipo mantenimiento
   * @param integer
   */
  public function setTipoMantenimientoId($tipo_mantenimiento_id) {
    $this->tipo_mantenimiento_id = $tipo_mantenimiento_id;
  }

  /**
   * Retorna el id del tercero elabora
   * @param integer
   */
  public function setTerceroIdElabora($tercero_id_elabora) {
    $this->tercero_id_elabora = $tercero_id_elabora;
  }

  /**
   * Retorna el id del tercero realiza
   * @param integer
   */
  public function setTerceroIdRealiza($tercero_id_realiza) {
    $this->tercero_id_realiza = $tercero_id_realiza;
  }

  /**
   * retorna la fecha de la orden
   * @param date $orsFecha
   */
  public function setFecha($fecha) {
    $this->fecha = $fecha;
  }

  /**
   * retorna el chequeo de la observacio
   * @param integer $orsObservacion
   */
  public function setObservacion($observacion) {
    $this->observacion = $observacion;
  }

  /**
   * retorna la creacion de una nueva orden de servicio
   * @param type $orsCreatedAt
   */
  public function setCreatedAt($created_at) {
    $this->created_at = $created_at;
  }

  /**
   * retorna la modificasion de la orden de servicio
   * @param type $orsUpdatedAt
   */
  public function setUpdatedAt($updated_at) {
    $this->updated_at = $updated_at;
  }

  /**
   * retorna la eliminacion de una orden de servicio
   * @param type $orsDeletedAt
   */
  public function setDeletedAt($deleted_at) {
    $this->deleted_at = $deleted_at;
  }

}
