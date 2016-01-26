<?php

namespace FStudio\model\base;

use FStudio\fsModel as model;
use FStudio\myConfig as config;

/**
 * clase base para la tabla bdaLaboresMaquinaEquipo
 * 
 * @author Maribel Zamora <mazagi86@hotmail.com>
 * @package FStudio
 * @subpackage model
 * @subpackage base
 * @version 1.0.0
 */
class laboresMaquinaEquipoBaseTable extends model {

  /**
   * numero  de labores de maquina equipo
   */
  const ID = 'lme_numero';

  /**
   * id de la hacienda
   */
  const HACIENDA_ID = 'hac_id';

  /**
   * id del tercero
   */
  const TERCERO_ID = 'ter_id';

  /**
   * tipo documento
   */
  const TIPO_DOCUMENTO_ID = 'tpd_id';

  /**
   * id de implemento
   */
  const IMPLEMENTO_ID = 'imp_id';

  /**
   *  labores  de maquina de equipo de la fecha
   */
  const FECHA = 'lme_fecha';

  /**
   * labores  de maquina de equipo del estado
   */
  const ESTADO = 'lme_estado';

  /**
   * labores  de maquina de equipo del tiempo
   */
  const TIEMPO = 'lme_tiempo';

  /**
   *  labores  de maquina de equipo del total de horas trabajadas
   */
  const TOTAL_HORAS_TRABAJADAS = 'lme_total_horas_trabajadas';

  /**
   * fecha de creacion de registro
   */
  const CREATED_AT = 'lme_created_at';

  /**
   * fecha de actualizacion de registro
   */
  const UPDATED_AT = 'lme_updated_at';

  /**
   * fecha de eliminacion del registro
   */
  const DELETED_AT = 'lme_deleted_at';

  /**
   * secuencia de la tabla para la llave primaria
   */
  const _SEQUENCE = 'bda_labores_maquina_equipo_lme_numero_seq';

  /**
   * nombre de la tabla
   */
  const _TABLE = 'bda_labores_maquina_equipo';

  /**
   * Configuración del sistema
   * @var config
   */
  protected $config;

  /**
   * de labores de maquina equipo
   * @var integer
   */
  private $id;

  /**
   * id de la hacienda
   * @var integer
   */
  private $hacienda_id;

  /**
   * id del tercero
   * @var integer
   */
  private $tercero_id;

  /**
   * tipo documento
   * @var integer
   */
  private $tipo_documento_id;

  /**
   * id de implemento
   * @var integer
   */
  private $implemento_id;

  /**
   *  labores  de maquina y equipo
   * @var date
   */
  private $fecha;

  /**
   * labores  de maquina de equipo de la estado
   * @var boolean
   */
  private $estado;

  /**
   * labores  de maquina de equipo del tiempo
   * @var integer
   */
  private $tiempo;

  /**
   *  labores  de maquina de equipo del total de horas trabajadas
   * @var integer
   */
  private $total_horas_trabajadas;

  /**
   * fecha de creacion del registro
   * @var date_time
   */
  private $created_at;

  /**
   * fecha de actualizacion del registro
   * @var date_time
   */
  private $updated_at;

  /**
   * fecha de eliminacion del registro
   * @var date_time
   */
  private $deleted_at;

  /**
   * Constructor de la clase laboresMaquinaEquipoBaseTable
   * @version 1.0.0
   * @param config $config
   * @param integer $id
   * @param integer $haciendaId
   * @param integer $terceroId
   * @param integer $tipoDocumentoId
   * @param integer $implementoId
   * @param date $fecha
   * @param boolean $estado
   * @param integer $tiempo
   * @param integer $totalHorasTrabajadas
   * @param date_time $createdAt
   * @param date_time $updatedAt
   * @param date_time $deletedAt
   */
  public function __construct(config $config, $id = null, $hacienda_id = null, $tercero_id = null, $tipo_documento_id = null, $implemento_id = null, $fecha = null, $estado = null, $tiempo = null, $total_horas_trabajadas = null, $created_at = null, $updated_at = null, $deleted_at = null) {
    $this->config = $config;
    $this->id = $id;
    $this->hacienda_id = $hacienda_id;
    $this->tercero_id = $tercero_id;
    $this->tipo_documento_id = $tipo_documento_id;
    $this->implemento_id = $implemento_id;
    $this->fecha = $fecha;
    $this->estado = $estado;
    $this->tiempo = $tiempo;
    $this->total_horas_trabajadas = $total_horas_trabajadas;
    $this->created_at = $created_at;
    $this->updated_at = $updated_at;
    $this->deleted_at = $deleted_at;
  }

  /**
   * Retorna el numero de labores de la maquina y equipo
   * @version 1.0.0
   * @return integer
   */
  public function getId() {
    return $this->id;
  }

  /**
   * Retorna el id de la hacienda
   * @version 1.0.0
   * @return integer
   */
  public function getHaciendaId() {
    return $this->hacienda_id;
  }

  /**
   * Retorna el id del tercero
   * @version 1.0.0
   * @return integer
   */
  public function getTerceroId() {
    return $this->tercero_id;
  }

  /**
   * Retorna el tipo de documento
   * @version 1.0.0
   * @return integer
   */
  public function getTipoDocumentoId() {
    return $this->tipo_documento_id;
  }

  /**
   * Retorna el id del implemento
   * @version 1.0.0
   * @return integer
   */
  public function getImplementoId() {
    return $this->implemento_id;
  }

  /**
   * Retorna la fecha  de labores de la maquina y equipo
   * @version 1.0.0
   * @return date
   */
  public function getFecha() {
    return $this->fecha;
  }

  /**
   * Retorna el estado  de labores de la maquina y equipo
   * @version 1.0.0
   * @return boolean
   */
  public function getEstado() {
    return $this->estado;
  }

  /**
   * Retorna el tiempo  de labores de la maquina y equipo
   * @version 1.0.0
   * @return integer
   */
  public function getTiempo() {
    return $this->tiempo;
  }

  /**
   * Retorna el total de horas trabajadas  de labores de la maquina y equipo
   * @version 1.0.0
   * @return integer
   */
  public function getTotalHorasTrabajadas() {
    return $this->total_horas_trabajadas;
  }

  /**
   * Retorna la fecha y hora de creacion del registro
   * @version 1.0.0
   * @return date_time
   */
  public function getCreatedAt() {
    return $this->created_at;
  }

  /**
   * Retorna la actualizacion del registro
   * @version 1.0.0
   * @return date_time
   */
  public function getUpdatedAt() {
    return $this->updated_at;
  }

  /**
   * Retorna el borrado del registro
   * @version 1.0.0
   * @return date_time
   */
  public function getDeletedAt() {
    return $this->deleted_at;
  }

  /**
   * Fija el numero de registro de labores de la maquina y equipo
   * @version 1.0.0
   * @param integer $id
   */
  public function setId($id) {
    $this->id = $id;
  }

  /**
   * Fija el id de la hacienda
   * @version 1.0.0
   * @param integer $haciendaId
   */
  public function setHaciendaId($hacienda_id) {
    $this->hacienda_id = $hacienda_id;
  }

  /**
   * Fija el tercero del id de registro de labores de maquina y equipo
   * @version 1.0.0
   * @param integer $terceroId
   */
  public function setTerceroId($tercero_id) {
    $this->tercero_id = $tercero_id;
  }

  /**
   * Fija el tipo de documento del id  de labores de maquina y equipo
   * @version 1.0.0
   * @param integer $tipoDocumentoId
   */
  public function setTipoDocumentoId($tipo_documento_id) {
    $this->tipo_documento_id = $tipo_documento_id;
  }

  /**
   * Fija el implemento del id
   * @version 1.0.0
   * @param integer $implementoId
   */
  public function setImplementoId($implemento_id) {
    $this->implemento_id = $implemento_id;
  }

  /**
   * Fija la fecha de labores de las maquinas y equipos
   * @version 1.0.0
   * @param date $fecha
   */
  public function setFecha($fecha) {
    $this->fecha = $fecha;
  }

  /**
   * Fija el estado de labores de las maquinas y equipos
   * @version 1.0.0
   * @param boolean $estado
   */
  public function setEstado($estado) {
    $this->estado = $estado;
  }

  /**
   * Fija el tiempo de labores de las maquinas y equipos
   * @version 1.0.0
   * @param integer $tiempo de labores de las maquinas y equipos
   */
  public function setTiempo($tiempo) {
    $this->tiempo = $tiempo;
  }

  /**
   * Fija el tiempo de labores de las maquinas y equipos
   * @version 1.0.0
   * @param integer $totalHorasTrabajadas
   */
  public function setTotalHorasTrabajadas($total_horas_trabajadas) {
    $this->total_horas_trabajadas = $total_horas_trabajadas;
  }

  /**
   * Fija hora y fecha de creacion del registro
   * version 1.0.0
   * @param date_time $createdAt fecha y hora de creacion del rgistro
   */
  public function setCreatedAt($created_at) {
    $this->created_at = $created_at;
  }

  /**
   * Fija la actualizacion del registro
   * version 1.0.0
   * @param date_time $updatedAt
   */
  public function setUpdatedAt($updated_at) {
    $this->updated_at = $updated_at;
  }

  /**
   * Fija la fecha del borrado
   * @version 1.0.0
   * @param date_time $deletedAt
   */
  public function setDeletedAt($deleted_at) {
    $this->deleted_at = $deleted_at;
  }

}
