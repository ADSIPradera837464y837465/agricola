<?php

namespace FStudio\model\base;

use FStudio\fsModel as model;
use FStudio\myConfig as config;


/**
 * Description of controlSalidaCanaTableBase
 * @author Daniela Barona Mosquera <mo_naok@hotmail.com>
 * @package 
 * @subpackage model
 * @subpackage base
 * @version 1.0.0
 */
class controlSalidaCanaTableBase extends model {

  /**
   * ID de la tabla
   */
  const ID = 'csc_id';

  /**
   * FECHA de la tabla
   */
  const FECHA = 'csc_fecha';

  /**
   * TOTAL DE VAGONES de la tabla
   */
  const TOTAL_VAGONES = 'csc_total_vagones';

  /**
   * NOTAS de la tabla
   */
  const NOTAS = 'csc_notas';

  /**
   * Longitud de las notas
   */
  const NOTAS_LENGTH = 2048;

  /**
   * TOTAL DE TRENES de la tabla
   */
  const TOTAL_TRENES = 'csc_total_trenes';

  /**
   * Foranea de la tabla turno
   */
  const TURNO_ID = 'tur_id';

  /**
   * Foranea de la tabla suerte
   */
  const SUERTE_ID = 'sue_id';

  /**
   * Foranea de la tabla tercero
   */
  const TERCERO_ID = 'ter_id';
  
   /**
   * Fecha y hora de creación del registro
   */
  const CREATED_AT = 'pro_created_at';

  /**
   * Fecha y hora de la ultima actualización del registro
   */
  const UPDATED_AT = 'pro_updated_at';

  /**
   * Fecha y hora para controlar el borrado lógico
   */
  const DELETED_AT = 'pro_deleted_at';

  /**
   * Nombre de la secuencia del ID de la tabla
   */
  const _SEQUENCE = '';

  /**
   * Nombre de la tabla
   */
  const _TABLE = 'bda_control_salida_cana';


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
   * FECHA de la tabla
   * @var date 
   */
  private $fecha;

  /**
   * Total de vagones de la tabla
   * @var integer 
   */
  private $totalVagones;

  /**
   * Notas de la tabla
   * @var text 
   */
  private $notas;

  /**
   * Total de trenes de la tabla
   * @var integer 
   */
  private $totalTrenes;

  /**
   * Foranea de la tabla turno
   * @var integer 
   */
  private $turnoId;

  /**
   * Foranea de la tabla suerte
   * @var integer 
   */
  private $suerteId;

  /**
   * Foranea de la tabla tercero
   * @var integer 
   */
  private $terceroId;

  /**
   * Crea los registros de la tabla
   * @var date_time 
   */
  private $createdAt;

  /**
   * Actualiza registros de la tabla
   * @var date_time 
   */
  private $updatedAt;

  /**
   * Elimina registros de la tabla
   * @var date_time 
   */
  private $deletedAt;

  /**
   * Constructor de la clase controlSalidaCanaTableBase
   * @param config $config
   * @param type $id
   * @param date $fecha
   * @param type $totalVagones
   * @param text $notas
   * @param type $totalTrenes
   * @param type $turnoId
   * @param type $suerteId
   * @param type $terceroId
   * @param date_time $createdAt
   * @param date_time $updatedAt
   * @param date_time $deletedAt
   */
  public function __construct(config $config, $id = null, date $fecha = null, $totalVagones = null, text $notas = null, $totalTrenes = null, $turnoId = null, $suerteId = null, $terceroId = null, date_time $createdAt = null, date_time $updatedAt = null, date_time $deletedAt = null) {
    $this->config = $config;
    $this->id = $id;
    $this->fecha = $fecha;
    $this->totalVagones = $totalVagones;
    $this->notas = $notas;
    $this->totalTrenes = $totalTrenes;
    $this->turnoId = $turnoId;
    $this->suerteId = $suerteId;
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
   * Retorna el id del registro de la tabla
   * @version 1.0.0
   * @return integer
   */
  public function getId() {
    return $this->id;
  }

  /**
   * Retorna la fecha del registro de la tabla
   * @version 1.0.0
   * @return date
   */
  public function getFecha() {
    return $this->fecha;
  }

  /**
   * Retorna el total de vagones de la tabla
   * @version 1.0.0
   * @return integer
   */
  public function getTotalVagones() {
    return $this->totalVagones;
  }

  /**
   * Retorna las notas de la tabla
   * @version 1.0.0
   * @return text
   */
  public function getNotas() {
    return $this->notas;
  }

  /**
   * Retorna el total de trenes del registro de la tabla
   * @version 1.0.0
   * @return integer
   */
  public function getTotalTrenes() {
    return $this->totalTrenes;
  }

  /**
   * Retorna el id de la tabla turno
   * @version 1.0.0
   * @return integer
   */
  public function getTurnoId() {
    return $this->turnoId;
  }

  /**
   * Retorna el id de la tabla suerte
   * @version 1.0.0
   * @return integer
   */
  public function getSuerteId() {
    return $this->suerteId;
  }

  /**
   * Retorna el id de la tabla tercero
   * @version 1.0.0
   * @return integer
   */
  public function getTerceroId() {
    return $this->terceroId;
  }

  /**
   * Retorna los datos creados en la tabla
   * @version 1.0.0
   * @return date_time
   */
  public function getCreatedAt() {
    return $this->createdAt;
  }

  /**
   * Retorna las actualizaciones que se hayan hecho en la tabla
   * @version 1.0.0
   * @return date_time
   */
  public function getUpdatedAt() {
    return $this->updatedAt;
  }

  /**
   * Retorna los datos eliminados de la tabla
   * @version 1.0.0
   * @return date_time
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
   * Fija la fecha para el registro en la tabla
   * @version 1.0.0
   * @param date $fecha
   */
  public function setFecha(date $fecha) {
    $this->fecha = $fecha;
  }

  /**
   * Fija el total de vagones que se obtengan para el registro en la tabla
   * @version 1.0.0
   * @param integer $totalVagones
   */
  public function setTotalVagones($totalVagones) {
    $this->totalVagones = $totalVagones;
  }

  /**
   * Fija las notas que se obtengan para el registro en la tabla
   * @version 1.0.0
   * @param text $notas
   */
  public function setNotas(text $notas) {
    $this->notas = $notas;
  }

  /**
   * Fija el total de trenes que se obtengan para el registro en la tabla
   * @version 1.0.0
   * @param integer $totalTrenes
   */
  public function setTotalTrenes($totalTrenes) {
    $this->totalTrenes = $totalTrenes;
  }

  /**
   * Fija el id de la tabla turno
   * @version 1.0.0
   * @param integer $turnoId
   */
  public function setTurnoId($turnoId) {
    $this->turnoId = $turnoId;
  }

  /**
   * Fija el id de la tabla suerte
   * @version 1.0.0
   * @param integer $suerteId
   */
  public function setSuerteId($suerteId) {
    $this->suerteId = $suerteId;
  }

  /**
   * Fija el id de la tabla tercero
   * @version 1.0.0
   * @param integer $terceroId
   */
  public function setTerceroId($terceroId) {
    $this->terceroId = $terceroId;
  }

  /**
   * Fija los datos creados que se hayan hecho en la tabla
   * @version 1.0.0
   * @param integer $createdAt
   */
  public function setCreatedAt(date_time $createdAt) {
    $this->createdAt = $createdAt;
  }

  /**
   * Fija las actualizaciones que se hayan hecho en la tabla
   * @version 1.0.0
   * @param integer $updatedAt
   */
  public function setUpdatedAt(date_time $updatedAt) {
    $this->updatedAt = $updatedAt;
  }

  /**
   * Fija las datos eliminados que se hayan hecho en la tabla
   * @version 1.0.0
   * @param integer $deletedAt
   */
  public function setDeletedAt(date_time $deletedAt) {
    $this->deletedAt = $deletedAt;
  }

}
