<?php

namespace FStudio\model\base;

use FStudio\fsModel as model;
use FStudio\myConfig as config;

/**
 * Description of bitacoraBaseTable
 * 
 * @author Lina Vanessa Montaño <linamontano-1995@hotmail.es>
 * @package FStudio
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
  const OBSERVACION_LENGTH = 2048;
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
  const _SEQUENCE = 'bda_contro_riego_pluviosidad_crp_id_seq';

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
  private $hora_inicio;

  /**
   * hora_fin de la tabla
   * @var time
   */
  private $hora_fin;

  /**
   * cantidad_m3_hora de la tabla
   * @var time
   */
  private $cantidad_m3_hora;

  /**
   * observacion de la tabla
   * @var text
   */
  private $observacion;

  /**
   * sue_id de la tabla
   * @var integer
   */
  private $suerte_id;

  /**
   * hac_id de la tabla
   * @var integer
   */
  private $hacienda_id;

  /**
   * ter_id de la tabla
   * @var integer
   */
  private $tercero_id;

  /**
   * creacion de los registros d la tabla
   * @var dame_time
   */
  private $created_at;

  /**
   * actualiza de la tabla
   * @var date_time
   */
  private $updated_at;

  /**
   * eliminar de la tabla
   * @var text
   */
  private $deleted_at;

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
  public function __construct(config $config, $id = null, $fecha = null, $hora_inicio = null, $hora_fin = null, $cantidad_m3_hora = null, $observacion = null, $suerte_id = null, $hacienda_id = null, $tercero_id = null, $created_at = null, $updated_at = null, $deleted_at = null) {
    $this->config = $config;
    $this->id = $id;
    $this->fecha = $fecha;
    $this->hora_inicio = $hora_inicio;
    $this->hora_fin = $hora_fin;
    $this->cantidad_m3_hora = $cantidad_m3_hora;
    $this->observacion = $observacion;
    $this->suerte_id = $suerte_id;
    $this->hacienda_id = $hacienda_id;
    $this->tercero_id = $tercero_id;
    $this->created_at = $created_at;
    $this->updated_at = $updated_at;
    $this->deleted_at = $deleted_at;
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
  public function getHoraInicio() {
    return $this->hora_inicio;
  }

  /**
   * Retorna la hora_fin del registro
   * @version 1.0.0
   * @return time
   */
  public function getHoraFin() {
    return $this->hora_fin;
  }

  /**
   * Retorna la cantidad_m3_horadel registro
   * @version 1.0.0
   * @return integer
   */
  public function getCantidadM3Hora() {
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
    return $this->suerte_id;
  }

  /**
   * Retorna la haciendaID del registro
   * @version 1.0.0
   * @return integer
   */
  public function getHaciendaId() {
    return $this->hacienda_id;
  }

  /**
   * Retorna el tercero_id del registro
   * @version 1.0.0
   * @return integer
   */
  public function getTerceroId() {
    return $this->tercero_id;
  }

  /**
   * Retorna la creacion del registro
   * @version 1.0.0
   * @return date_time
   */
  public function getCreatedAt() {
    return $this->created_at;
  }

  /**
   * Retorna actualizacion del registro
   * @version 1.0.0
   * @return date_time
   */
  public function getUpdatedAt() {
    return $this->updated_at;
  }

  /**
   * Retorna elimina del registro
   * @version 1.0.0
   * @return date_time
   */
  public function getDeletedAt() {
    return $this->deleted_at;
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
  public function setFecha($fecha) {
    $this->fecha = $fecha;
  }

  /**
   * fija la Hora_inicio del registro
   * @version 1.0.0
   * @return time
   */
  public function setHoraInicio($hora_inicio) {
    $this->hora_inicio = $hora_inicio;
  }

  /**
   * fija la hora_fin del registro
   * @version 1.0.0
   * @return time
   */
  public function setHoraFin($hora_fin) {
    $this->hora_fin = $hora_fin;
  }

  /**
   * fija la cantidad_m3_horadel registro
   * @version 1.0.0
   * @return integer
   */
  public function setCantidadM3Hora($cantidad_m3_hora) {
    $this->cantidad_m3_hora = $cantidad_m3_hora;
  }

  /**
   * fija la observacion del registro
   * @version 1.0.0
   * @return text
   */
  public function setObservacion($observacion) {
    $this->observacion = $observacion;
  }

  /**
   * fija la suer_id del registro
   * @version 1.0.0
   * @return integer
   */
  public function setSuerteId($suerte_id) {
    $this->suerte_id = $suerte_id;
  }

  /**
   * fija la hacienda_id del registro
   * @version 1.0.0
   * @return integer
   */
  public function setHaciendaId($hacienda_id) {
    $this->hacienda_id = $hacienda_id;
  }

  /**
   * fija la tercero_id del registro
   * @version 1.0.0
   * @return integer
   */
  public function setTerceroId($tercero_id) {
    $this->tercero_id = $tercero_id;
  }

  /**
   * fija la creacion del registro
   * @version 1.0.0
   * @return date_time
   */
  public function setCreatedAt($created_at) {
    $this->created_at = $created_at;
  }

  /**
   * fija actualizacion del registro
   * @version 1.0.0
   * @return date_time
   */
  public function setUpdatedAt($updated_at) {
    $this->updated_at = $updated_at;
  }

  /**
   * fija elimina del registro
   * @version 1.0.0
   * @return date_time
   */
  public function setDeletedAt($deleted_at) {
    $this->deleted_at = $deleted_at;
  }

}
