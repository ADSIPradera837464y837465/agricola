<?php

namespace FStudio\model\base;

use FStudio\fsModel as model;
use FStudio\myConfig as config;

/**
 * clase base para la tabla bdaRegistroLaboresMaquinaEquipo
 * @author maribel zamora <mazagi86@hotmail.com>
 * @package fStudio
 * @subpackage model
 * @subpackage base
 * @version 1.0.0
 */
class registroLaboresMaquinaEquipoBaseTable extends model {

  /**
   * numero de registro de labores de maquina equipo
   */
  const RELME_NUMERO = 'relme_numero';

  /**
   * id de la hacienda
   */
  const HAC_ID = 'hac_id';

  /**
   * id del tercero
   */
  const TER_ID = 'ter_id';

  /**
   * tipo documento
   */
  const TPD_ID = 'tpd_id';

  /**
   * id de implemento
   */
  const IMP_ID = 'imp_id';

  /**
   * registro de labores  de maquina de equipo de la fecha
   */
  const RELME_FECHA = 'relme_fecha';

  /**
   * registro de labores  de maquina de equipo del estado
   */
  const RELME_ESTADO = 'relme_estado';

  /**
   * registro de labores  de maquina de equipo del tiempo
   */
  const RELME_TIEMPO = 'relme_tiempo';

  /**
   * registro de labores  de maquina de equipo del total de horas trabajadas
   */
  const RELME_TOTAL_HORAS_TRABAJADAS = 'relme_total_horas_trabajadas';

  /**
   * fecha de creacion de registro 
   */
  const CREATED_AT = 'relme_created_at';
  /**
   * fecha de actualizacion de registro 
   */
  
  const UPDATED_AT = 'relme_updated_at';
  /**
   * fecha de eliminacion del registro 
   */
  const DELETED_AT = 'relme_deleted_at';
  /**
   * secuencia de la tabla para la llave primaria 
   */
  const _SEQUENCE = '';

  /**
   * nombre de la tabla
   */
  const _TABLE = 'bda_registroLaboresMaquinaEquipo';

  /**
   * Configuración del sistema
   * @var config
   */
  protected $config;

  /**
   * numero de registro de labores de maquina equipo
   * @var integer
   */
  private $numero;

  /**
   * id de la hacienda
   * @var integer
   */
  private $hacId;

  /**
   * id del tercero
   * @var integer
   */
  private $terId;

  /**
   * tipo documento
   * @var integer
   */
  private $tpdId;

  /**
   * id de implemento
   * @var integer
   */
  private $impId;

  /**
   * fecha de registro de labores  de maquina y equipo 
   * @var date
   */
  private $fecha;

  /**
   * registro de labores  de maquina de equipo de la estado
   * @var boolean
   */
  private $estado;

  /**
   * registro de labores  de maquina de equipo del tiempo
   * @var integer
   */
  private $tiempo;

  /**
   * registro de labores  de maquina de equipo del total de horas trabajadas
   * @var integer
   */
  private $totalHorasTrabajadas;

  /**
   * fecha de creacion del registro
   * @var date_time
   */
  private $createdAt;

  /**
   * fecha de actualizacion del registro
   * @var date_time
   */
  private $updatedAt;

  /**
   * fecha de eliminacion del registro
   * @var date_time
   */
  private $deletedAt;
  
  /**
   * Constructor de la clase registroLaboresMaquinaEquipoBaseTable
   * @version 1.0.0
   * @param config $config
   * @param integer $numero
   * @param integer $hacId
   * @param integer $terId
   * @param integer $tpdId
   * @param integer $impId
   * @param date $fecha
   * @param boolean $estado
   * @param integer $tiempo
   * @param integer $totalHorasTrabajadas
   * @param date_time $createdAt
   * @param date_time $updatedAt
   * @param date_time $deletedAt
   */

  function __construct(config $config, $numero = null, $hacId = null, $terId = null, $tpdId = null, $impId = null, $fecha = null, $estado = null, $tiempo = null, $totalHorasTrabajadas = null, $createdAt = null, $updatedAt = null, $deletedAt = null) {
    $this->config = $config;
    $this->numero = $numero;
    $this->hacId = $hacId;
    $this->terId = $terId;
    $this->tpdId = $tpdId;
    $this->impId = $impId;
    $this->fecha = $fecha;
    $this->estado = $estado;
    $this->tiempo = $tiempo;
    $this->totalHorasTrabajadas = $totalHorasTrabajadas;
    $this->createdAt = $createdAt;
    $this->updatedAt = $updatedAt;
    $this->deletedAt = $deletedAt;
  }

  /**
   * retorna la configuracion del sistema
   * @version 1.0.0
   * @return config
   */
  public function getConfig() {
    return $this->config;
  }

  /**
   * Retorna el numero del registro de labores de la maquina y equipo
   * @version 1.0.0
   * @return integer
   */
  public function getNumero() {
    return $this->numero;
  }

  /**
   * Retorna el id de la hacienda
   * @version 1.0.0
   * @return integer
   */
  public function getHacId() {
    return $this->hacId;
  }

  /**
   * Retorna el id del tercero
   * @version 1.0.0
   * @return integer
   */
  public function getTerId() {
    return $this->terId;
  }

  /**
   * Retorna el tipo de documento
   * @version 1.0.0
   * @return integer
   */
  public function getTpdId() {
    return $this->tpdId;
  }

  /**
   * Retorna el id del implemento
   * @version 1.0.0
   * @return integer
   */
  public function getImpId() {
    return $this->impId;
  }

  /**
   * Retorna la fecha del registro de labores de la maquina y equipo
   * @version 1.0.0
   * @return date
   */
  public function getFecha() {
    return $this->fecha;
  }

  /**
   * Retorna el estado del registro de labores de la maquina y equipo
   * @version 1.0.0
   * @return boolean
   */
  public function getEstado() {
    return $this->estado;
  }

  /**
   * Retorna el tiempo del registro de labores de la maquina y equipo
   * @version 1.0.0
   * @return integer
   */
  public function getTiempo() {
    return $this->tiempo;
  }

  /**
   * Retorna el total de horas trabajadas del registro de labores de la maquina y equipo
   * @version 1.0.0
   * @return integer
   */
  public function getTotalHorasTrabajadas() {
    return $this->totalHorasTrabajadas;
  }

  /**
   * Retorna la fecha y hora de creacion del registro 
   * @version 1.0.0
   * @return date_time
   */
  public function getCreatedAt() {
    return $this->createdAt;
  }

  /**
   * Retorna la actualizacion del registro
   * @version 1.0.0
   * @return date_time
   */
  public function getUpdatedAt() {
    return $this->updatedAt;
  }

  /**
   * Retorna el borrado del registro
   * @version 1.0.0
   * @return date_time
   */
  public function getDeletedAt() {
    return $this->deletedAt;
  }

  /**
   * Fija  la configuracion del sistema
   * @version 1.0.0
   * @param config $config configuracion del sistema
   */
  public function setConfig(config $config) {
    $this->config = $config;
  }

  /**
   * Fija el numero de registro de labores de la maquina y equipo
   * @version 1.0.0
   * @param integer $numero 
   */
  public function setNumero($numero) {
    $this->numero = $numero;
  }

  /**
   * Fija el id de la hacienda 
   * @version 1.0.0
   * @param integer $hacId
   */
  public function setHacId($hacId) {
    $this->hacId = $hacId;
  }

  /**
   * Fija el tercero del id de registro de labores de maquina y equipo 
   * @version 1.0.0
   * @param integer $terId
   */
  public function setTerId($terId) {
    $this->terId = $terId;
  }

  /**
   * Fija el tipo de documento del id de registro de labores de maquina y equipo 
   * @version 1.0.0
   * @param integer $tpdId
   */
  public function setTpdId($tpdId) {
    $this->tpdId = $tpdId;
  }

  /**
   * Fija el implemento del id
   * @version 1.0.0
   * @param integer $impId
   */
  public function setImp_id($imp_id) {
    $this->imp_id = $imp_id;
  }

  /**
   * Fija la fecha de registro de labores de las maquinas y equipos
   * @version 1.0.0
   * @param date $fecha
   */
  public function setFecha(date $fecha) {
    $this->fecha = $fecha;
  }

  /**
   * Fija el estado de registro de labores de las maquinas y equipos
   * @version 1.0.0
   * @param boolean $estado
   */
  public function setEstado($estado) {
    $this->estado = $estado;
  }

  /**
   * Fija el tiempo de registro de labores de las maquinas y equipos
   * @version 1.0.0
   * @param integer $tiempo de labores de las maquinas y equipos
   */
  public function setTiempo($tiempo) {
    $this->tiempo = $tiempo;
  }

  /**
   * Fija el tiempo de registro de labores de las maquinas y equipos
   * @version 1.0.0
   * @param integer $totalHorasTrabajadas
   */
  public function setTotalHorasTrabajadas($totalHorasTrabajadas) {
    $this->totalHorasTrabajadas = $totalHorasTrabajadas;
  }

  /**
   * Fija hora y fecha de creacion del registro
   * version 1.0.0 
   * @param date_time $createdAt fecha y hora de creacion del rgistro
   */
  public function setCreatedAt($createdAt) {
    $this->createdAt = $createdAt;
  }

  /**
   * Fija la actualizacion del registro
   * version 1.0.0
   * @param date_time $updatedAt
   */
  public function setUpdatedAt($updatedAt) {
    $this->updatedAt = $updatedAt;
  }

  /**
   * Fija la fecha del borrado
   * @version 1.0.0
   * @param date_time $deletedAt
   */
  public function setDeletedAt($deletedAt) {
    $this->deletedAt = $deletedAt;
  }

}