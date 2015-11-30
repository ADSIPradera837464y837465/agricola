<?php

namespace FStudio\model\base;

use FStudio\fsModel as model;
use FStudio\myConfig as config;

/**
 * Description of bitacoraBaseTable
 * @author linaVanessaMontaño <linamontano-1995@hotmail.es>
 * @package estudio
 * @subpackage model
 * @subpackage base
 * @version 1.0.0
 */
class controlRiegoPluviosidadBaseTable extends model {

  /**
   * ID de la tabla
   */
  const ID = 'crp_id';

  /**
   * fecha de la tabla
   */
  const FECHA = 'crp_fecha';

  /**
   * hora_inicio de la tabla
   */
  const HORA_INICIO = 'crp_hora_inicio';

  /**
   * hora_fin de la tabla
   */
  const HORA_FIN = 'crp_hora_fin';

  /**
   * cantidad_m3_hora de la tabla
   */
  const CANTIDAD_M3_HORA = 'crp_cantidad_m3_hora';

  /*
   * observacion de la tabla
   */
  const OBSERVACION = 'crp_observacion';

  /*   * longitud de observaciones
   * 
   */
  const OBSERVACIONES_LENGT = 2048;

  /*
   * foranea de la tabla suerte
   */
  const SUERTE_ID = 'sue_id';

  /*
   * foranea de la tabla hacienda
   */
  const HACIENDA_ID = 'hac_id';

  /*
   * foranea de la tabla tar
   */
  const TERCERO_ID = 'ter_id';

  /**
   * Fecha y hora de creación del registro
   */
  const CREATED_AT = 'crp_created_at';

  /**
   * Fecha y hora de la ultima actualización del registro
   */
  const UPDATED_AT = 'crp_updated_at';

  /**
   * Fecha y hora para controlar el borrado lógico
   */
  const DELETED_AT = 'crp_deleted_at';

  /**
   * Nombre de la secuencia del ID de la tabla
   */
  const _SEQUENCE = '';

  /**
   * Nombre de la tabla
   */
  const _TABLE = 'bda_control_riego_pluviosidad';

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
   * @var date
   */
  private $fecha;

  /**
   * hora_inicio de la tabla
   * @var time
   */
  private $horaInicio;

  /**
   * hora_fin de la tabla
   * @var time
   */
  private $horaFin;

  /**
   * cantidad_m3_hora de la tabla
   * @var time
   */
  private $cantidadM3Hora;

  /**
   * hora_inicio de la tabla
   * @var time
   */
  private $horaInicio;

  /**
   * observacion de la tabla
   * @var text
   */
  private $observacion;

  /**
   * sue_id de la tabla
   * @var integer
   */
  private $suerteId;

  /**
   * hac_id de la tabla
   * @var integer
   */
  private $haciendaId;

  /**
   * ter_id de la tabla
   * @var integer
   */
  private $terceroId;

  /**
   * creacion de los registros d la tabla
   * @var dame_time
   */
  private $createdAt;

  /**
   * actualiza de la tabla
   * @var date_time
   */
  private $updatedAt;

  /**
   * eliminar de la tabla
   * @var text
   */
  private $deletedAt;

  /**
   * Constructor de la clase controlRiegoPluviosidadBaseTable
   * @param config $config
   * @param type $id
   * @param date $fecha
   * @param time $horaInicio
   * @param time $horaFin
   * @param time $cantidadM3Hora
   * @param text $observacion
   * @param type $suerteId
   * @param type $haciendaId
   * @param type $terceroId
   * @param dame_time $createdAt
   * @param date_time $updatedAt
   * @param text $deletedAt
   */
  public function __construct(config $config, $id = null, date $fecha = null, time $hora_inicio = null, time $hora_fin = null, time $cantidad_m3_hora = null, time $hora_inicio = null, text $observacion = null, $suerteId = null, $haciendaId = null, $terceroId = null, dame_time $createdAt = null, date_time $updatedAt = null, text $deletedAt = null) {
    $this->config = $config;
    $this->id = $id;
    $this->fecha = $fecha;
    $this->hora_inicio = $hora_inicio;
    $this->hora_fin = $hora_fin;
    $this->cantidad_m3_hora = $cantidad_m3_hora;
    $this->observacion = $observacion;
    $this->suerteId = $suerteId;
    $this->haciendaId = $haciendaId;
    $this->terceroId = $terceroId;
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
   * @version 1.0.0
   * @return integer
   */
  public function getId() {
    return $this->id;
  }

  /**
   * Retorna la fecha del registro
   * @version 1.0.0
   * @return date
   */
  public function getFecha() {
    return $this->fecha;
  }

  /**
   * Retorna la Hora_inicio del registro
   * @version 1.0.0
   * @return time
   */
  public function getHora_inicio() {
    return $this->hora_inicio;
  }

  /**
   * Retorna la hora_fin del registro
   * @version 1.0.0
   * @return time
   */
  public function getHora_fin() {
    return $this->hora_fin;
  }

  /**
   * Retorna la cantidad_m3_horadel registro
   * @version 1.0.0
   * @return integer
   */
  public function getCantidad_m3_hora() {
    return $this->cantidad_m3_hora;
  }

  /**
   * Retorna la observacion del registro
   * @version 1.0.0
   * @return text
   */
  public function getObservacion() {
    return $this->observacion;
  }

  /**
   * Retorna la suer_id del registro
   * @version 1.0.0
   * @return integer
   */
  public function getSuerteId() {
    return $this->suerteId;
  }

  /**
   * Retorna la haciendaID del registro
   * @version 1.0.0
   * @return integer
   */
  public function getHaciendaId() {
    return $this->haciendaId;
  }

  /**
   * Retorna el tercero_id del registro
   * @version 1.0.0
   * @return integer
   */
  public function getTerceroId() {
    return $this->terceroId;
  }

  /**
   * Retorna la creacion del registro
   * @version 1.0.0
   * @return date_time
   */
  public function getCreatedAt() {
    return $this->createdAt;
  }

  /**
   * Retorna actualizacion del registro
   * @version 1.0.0
   * @return date_time
   */
  public function getUpdatedAt() {
    return $this->updatedAt;
  }

  /**
   * Retorna elimina del registro
   * @version 1.0.0
   * @return date_time
   */
  public function getDeletedAt() {
    return $this->deletedAt;
  }

  /**
   * Retorna la configuración del sistema
   * @version 1.0.0
   * @return config
   */
  public function setConfig(config $config) {
    $this->config = $config;
  }

  /**
   * Retorna el id del registro
   * @version 1.0.0
   * @return integer
   */
  public function setId($id) {
    $this->id = $id;
  }

  /**
   * fija la fecha del registro
   * @version 1.0.0
   * @return date
   */
  public function setFecha(date $fecha) {
    $this->fecha = $fecha;
  }

  /**
   * fija la Hora_inicio del registro
   * @version 1.0.0
   * @return time
   */
  public function setHora_inicio(time $hora_inicio) {
    $this->hora_inicio = $hora_inicio;
  }

  /**
   * fija la hora_fin del registro
   * @version 1.0.0
   * @return time
   */
  public function setHora_fin(time $hora_fin) {
    $this->hora_fin = $hora_fin;
  }

  /**
   * fija la cantidad_m3_horadel registro
   * @version 1.0.0
   * @return integer
   */
  public function setCantidad_m3_hora(time $cantidad_m3_hora) {
    $this->cantidad_m3_hora = $cantidad_m3_hora;
  }

  /**
   * fija la observacion del registro
   * @version 1.0.0
   * @return text
   */
  public function setObservacion(text $observacion) {
    $this->observacion = $observacion;
  }

  /**
   * fija la suer_id del registro
   * @version 1.0.0
   * @return integer
   */
  public function setSuerteId($suerteId) {
    $this->suerteId = $suerteId;
  }

  /**
   * fija la hacienda_id del registro
   * @version 1.0.0
   * @return integer
   */
  public function setHaciendaId($haciendaId) {
    $this->haciendaId = $haciendaId;
  }

  /**
   * fija la tercero_id del registro
   * @version 1.0.0
   * @return integer
   */
  public function setTerceroId($terceroId) {
    $this->terceroId = $terceroId;
  }

  /**
   * fija la creacion del registro
   * @version 1.0.0
   * @return date_time
   */
  public function setCreatedAt(dame_time $createdAt) {
    $this->createdAt = $createdAt;
  }

  /**
   * fija actualizacion del registro
   * @version 1.0.0
   * @return date_time
   */
  public function setUpdatedAt(date_time $updatedAt) {
    $this->updatedAt = $updatedAt;
  }

  /**
   * fija elimina del registro
   * @version 1.0.0
   * @return date_time
   */
  public function setDeletedAt(text $deletedAt) {
    $this->deletedAt = $deletedAt;
  }

}
