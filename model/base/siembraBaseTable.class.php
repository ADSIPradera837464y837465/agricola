<?php

namespace FStudio\model\base;

use FStudio\fsModel as model;
use FStudio\myConfig as config;

/**
 * Description of siembraBaseTable
 * @author Diana Meneses <meneses_d@rocketmail.com>
 * @package 
 * @subpackage model
 * @subpackage base
 * @version 1.0.0
 */
class siembraBaseTable extends model {

  /**
   * id de la tabla
   */
  const ID = 'sie_id';

  /**
   * Id de tabla suerte
   */
  const SUERTE_ID = 'sue_id';

  /**
   * dia de la siembra
   */
  const DIA = 'sie_dia';

  /**
   * presupuesto disponible para la siembra
   */
  const PRESUPUESTO_EMPRESA = 'sie_presupuesto_empresa';

  /**
   * kilos de caña para la siembra
   */
  const KILOS_LOTE = 'sie_kilos_lote';

  /**
   * total de kilos de las plantas
   */
  const TOTAL_KILOS_PLANTA = 'sie_total_kilos_planta';

  /**
   * fecha de la siembra
   */
  const FECHA = 'sie_fecha';

  /**
   * fecha final del levante de la caña
   */
  const FECHA_FIN_LEVANTE = 'sie_fecha_fin_levante';

  /**
   * fecha de incio de ciclo
   */
  const FECHA_INICIO_CICLO = 'sie_fecha_inicio_ciclo';

  /**
   * fecha final del ciclo
   */
  const FECHA_FIN_CICLO = 'sie_fecha_fin_ciclo';

  /**
   * fecha de poda de la caña
   */
  const FECHA_PODA = 'sie_fecha_poda';

  /**
   * fecha de la produccion de la caña
   */
  const FECHA_PRODUCCION = 'sie_fecha_produccion';

  /**
   * numero de la hectarea en la que se sembró
   */
  const NUM_HECTAREA = 'sie_num_hectarea';

  /**
   * numero de plantas levantadas
   */
  const NUM_PLANTA_LEVANTE = 'sie_num_planta_levante';

  /**
   * numero de plantas porductivas
   */
  const NUM_PLANTAS_PRODUCTIVAS = 'sie_num_plantas_productivas';

  /**
   * numero de plantas que son erradicadas
   */
  const NUM_PLANTAS_ERRADICA = 'sie_num_plantas_erradica';

  /**
   * Fecha y hora de creación del registro
   */
  const CREATED_AT = 'sie_created_at';

  /**
   * Fecha y hora de la ultima actualización del registro
   */
  const UPDATED_AT = 'sie_updated_at';

  /**
   * Fecha y hora para controlar el borrado lógico
   */
  const DELETED_AT = 'sie_deleted_at';

  /**
   * Nombre de la secuencia del ID de la tabla
   */
  const _SEQUENCE = '';

  /**
   * Nombre de la tabla
   */
  const _TABLE = 'bda_siembra';

  /**
   * Configuración del sistema
   * @var config
   */
  protected $config;

  /**
   * Id de la tabla
   * @var integer 
   */
  private $id;

  /**
   * dia de la siembra
   * @var integer 
   */
  private $suerteId;

  /**
   * dia de la siembra
   * @var integer 
   */
  private $dia;

  /**
   * presupuesto de la empresa para la siembra
   * @var  integer
   */
  private $presupuestoEmpresa;

  /**
   * kilos para la siembra por lote
   * @var integer 
   */
  private $kilosLote;

  /**
   * kilos de la planta
   * @var integer 
   */
  private $TotalKilosPlanta;

  /**
   * fecha de la siembra
   * @var date 
   */
  private $fecha;

  /**
   * fecha final del levante
   * @var date 
   */
  private $fechaFinlevante;

  /**
   * fecha inicial del ciclo
   * @var date 
   */
  private $fechaInicioCiclo;

  /**
   * fecha final del ciclo
   * @var date 
   */
  private $fechaFinCiclo;

  /**
   * fecha de poda de la caña
   * @var date 
   */
  private $fechaPoda;

  /**
   * fecha de la producción
   * @var date 
   */
  private $fechaProduccion;

  /**
   * numero de la hectarea en la que se sembró
   * @var integer
   */
  private $numHectarea;

  /**
   * numero de plantas de levante
   * @var integer 
   */
  private $numPlantaLevante;

  /**
   * numero de plantas productivas
   * @var integer 
   */
  private $numPlantasProductivas;

  /**
   * numero de plantas erradicadas
   * @var integer 
   */
  private $numPlantasErradica;

  /**
   * Fecha y hora de creación del registro
   * @var string
   */
  private $createdAt;

  /**
   * Fecha y hora de la ultima actualización del registro
   * @var string
   */
  private $updatedAt;

  /**
   * Fecha y hora para controlar el borrado lógico
   * @var string
   */
  private $deletedAt;

  /**
   * 
   * Constructor de la clase siembraBaseTable
   * @param integer $id
   * @param integer $suerteId
   * @param integer $dia
   * @param integer presupuestoEmpresa
   * @param integer $kilosLote
   * @param integer $TotalKilosPlanta
   * @param date $fecha
   * @param date $fechaFinlevante
   * @param date $fechaInicioCiclo
   * @param date $fechaFinCiclo
   * @param date $fechaPoda
   * @param date $fechaProduccion
   * @param date $numHectarea
   * @param integer $numPlantaLevante
   * @param integer $numPlantasProductivas
   * @param integer $numPlantasErradica
   * @param string $createdAt
   * @param string $updatedAt
   * @param string $deletedAt
   * @version 1.0.0
   */
  public function __construct(config $config, $id = null, $suerteId = null, $dia = null, $presupuestoEmpresa = null, $kilosLote = null, $TotalKilosPlanta = null, $fecha = null, $fechaFinlevante = null, date $fechaInicioCiclo = null, $fechaFinCiclo, $fechaPoda = null, $fechaProduccion = null, $numHectarea, $numPlantaLevante = null, $numPlantasProductivas = null, $numPlantasErradica = null, $createdAt = null, $updatedAt = null, $deletedAt = null) {
    $this->config = $config;
    $this->id = $id;
    $this->suerteId = $suerteId;
    $this->dia = $dia;
    $this->presupuestoEmpresa = $presupuestoEmpresa;
    $this->kilosLote = $kilosLote;
    $this->TotalKilosPlanta = $TotalKilosPlanta;
    $this->fecha = $fecha;
    $this->fechaFinlevante = $fechaFinlevante;
    $this->fechaInicioCiclo = $fechaInicioCiclo;
    $this->fechaFinCiclo = $fechaFinCiclo;
    $this->fechaPoda = $fechaPoda;
    $this->fechaProduccion = $fechaProduccion;
    $this->numHectarea = $numHectarea;
    $this->numPlantaLevante = $numPlantaLevante;
    $this->numPlantasProductivas = $numPlantasProductivas;
    $this->numPlantasErradica = $numPlantasErradica;
    $this->createdAt = $createdAt;
    $this->updatedAt = $updatedAt;
    $this->deletedAt = $deletedAt;
  }

  /**
   * Retorna el objeto config del sistema
   * @version 1.0.0
   * @return config
   */
  public function getConfig() {
    return $this->config;
  }

  /**
   * Retorna el ID del registro
   * @version 1.0.0
   * @return integer
   */
  public function getId() {
    return $this->id;
  }

  /**
   * etorna el id de la suerte
   * @version 1.0.0
   * @return integer
   */
  public function getSuerteId() {
    return $this->suerteId;
  }

  /**
   * retorna el dia de la siembra
   * @version 1.0.0
   * @return integer
   */
  public function getDia() {
    return $this->dia;
  }

  /**
   * retorna el presupuesto de la empresa para la siembra
   * @version 1.0.0
   * @return integer
   */
  public function getPresupuestoEmpresa() {
    return $this->presupuestoEmpresa;
  }

  /**
   * retorna los kilos por lote 
   * @version 1.0.0
   * @return integer
   */
  public function getKilosLote() {
    return $this->kilosLote;
  }

  /**
   * retorna total de kilos de planta
   * @version 1.0.0
   * @return integer
   */
  public function getTotalKilosPlanta() {
    return $this->TotalKilosPlanta;
  }

  /**
   * retorna la fecha de la siembra
   * @version 1.0.0
   * @return date
   */
  public function getFecha() {
    return $this->fecha;
  }

  /**
   * retorna la fecha del fin del levante de la caña
   * @version 1.0.0
   * @return date
   */
  public function getFechaFinlevante() {
    return $this->fechaFinlevante;
  }

  /**
   * retorna la fecha inicial del ciclo
   * @version 1.0.0
   * @return date
   */
  public function getFechaInicioCiclo() {
    return $this->fechaInicioCiclo;
  }

  /**
   * retorna la fechafinal del ciclo
   * @version 1.0.0
   * @return date
   */
  public function getFechaFinCiclo() {
    return $this->fechaFinCiclo;
  }

  /**
   * retorna la fecha de la poda
   * @version 1.0.0
   * @return date
   */
  public function getFechaPoda() {
    return $this->fechaPoda;
  }

  /**
   * retorna la fecha de produccion
   * @version 1.0.0
   * @return date
   */
  public function getFechaProduccion() {
    return $this->fechaProduccion;
  }

  /**
   * retorna el numero de la hectarea en la que se sembró
   * @version 1.0.0
   * @return integer
   */
  public function getNumHectarea() {
    return $this->numHectarea;
  }

  /**
   * retorna el numero de plantas de levante
   * @version 1.0.0
   * @return integer
   */
  public function getNumPlantaLevante() {
    return $this->numPlantaLevante;
  }

  /**
   * retorna el numero de plantas productivas
   * @version 1.0.0
   * @return integer
   */
  public function getNumPlantasProductivas() {
    return $this->numPlantasProductivas;
  }

  /**
   * retorna el numero de plantas erradicadas
   * @version 1.0.0
   * @return integer
   */
  public function getNumPlantasErradica() {
    return $this->numPlantasErradica;
  }

  /**
   * retorna fecha y hora de creacion del registro
   * @version 1.0.0
   * @return string
   */
  public function getCreatedAt() {
    return $this->createdAt;
  }

  /**
   * retorna fecha y hora de la ultima actualizacion del registro
   * @version 1.0.0
   * @return string
   */
  public function getUpdatedAt() {
    return $this->updatedAt;
  }

  /**
   * retorna fecha y hora de la ultima eliminación del registro
   * @version 1.0.0
   * @return string
   */
  public function getDeletedAt() {
    return $this->deletedAt;
  }

  
  /**
   * Fija el objeto de la configuración del sistema
   * @version 1.0.0
   * @param config $config Objeto de la configuración del sistema
   */
  public function setConfig(config $config) {
    $this->config = $config;
  }

  /**
   * Fija el ID para un registro del sistema
   * @version 1.0.0
   * @param integer $id ID de un registro
   */
  public function setId($id) {
    $this->id = $id;
  }

  /**
   * fija el id de la suerte
   * @version 1.0.0
   * @param integer $suerteId
   */
  public function setSuerteId($suerteId) {
    $this->suerteId = $suerteId;
  }

  /**
   * Fija el dia de la siembra
   * @version 1.0.0
   * @param integer $dia
   */
  public function setDia($dia) {
    $this->dia = $dia;
  }

  /**
   * Fija el presupuesto de laempresa para la siembra
   * @version 1.0.0
   * @param ineteger $presupuestoEmpresa
   */
  public function setPresupuestoEmpresa($presupuestoEmpresa) {
    $this->presupuestoEmpresa = $presupuestoEmpresa;
  }

  /**
   * Fija los kilos de planta para el lote
   * @version 1.0.0
   * @param integer $kilosLote
   */
  public function setKilosLote($kilosLote) {
    $this->kilosLote = $kilosLote;
  }

  /**
   * Fija el total de plantas semradas por lote
   * @version 1.0.0
   * @param integer $TotalKilosPlanta
   */
  public function setTotalKilosPlanta($TotalKilosPlanta) {
    $this->TotalKilosPlanta = $TotalKilosPlanta;
  }

  /*
   * Fija la fecha de la siembra
   * @version 1.0.0
   * @params date $fecha
   */
  public function setFecha(date $fecha) {
    $this->fecha = $fecha;
  }

  /**
   * Fija la fecha final de levante
   * @version 1.0.0
   * @param date $fechaFinlevante
   */
  public function setFechaFinlevante($fechaFinlevante) {
    $this->fechaFinlevante = $fechaFinlevante;
  }

  /**
   * Fia la fecha inicial del ciclo
   * @version 1.0.0
   * @param date $fechaInicioCiclo
   */
  public function setFechaInicioCiclo($fechaInicioCiclo) {
    $this->fechaInicioCiclo = $fechaInicioCiclo;
  }

  /**
   * Fia la fecha final del ciclo
   * @version 1.0.0
   * @param date $fechaFinCiclo
   */
  public function setFechaFinCiclo($fechaFinCiclo) {
    $this->fechaFinCiclo = $fechaFinCiclo;
  }

  /**
   * Fija la feha de poda de la caña
   * @version 1.0.0
   * @param date $fechaPoda
   */
  public function setFechaPoda($fechaPoda) {
    $this->fechaPoda = $fechaPoda;
  }

  /**
   * Fija la fecha de produccion
   * @version 1.0.0
   * @param date $fechaProduccion
   */
  public function setFechaProduccion($fechaProduccion) {
    $this->fechaProduccion = $fechaProduccion;
  }

  /**
   * Fija el numero de la hectarea
   * @version 1.0.0
   * @param integer $numHectarea
   */
  public function setNumHectarea($numHectarea) {
    $this->numHectarea = $numHectarea;
  }

  /**
   * Fija el numero de plantas de levante
   * @version 1.0.0
   * @param integer $numPlantaLevante
   */
  public function setNumPlantaLevante($numPlantaLevante) {
    $this->numPlantaLevante = $numPlantaLevante;
  }

  /**
   * Fija el numero de plantas productivas
   * @version 1.0.0
   * @param integer $numPlantasProductivas
   */
  public function setNumPlantasProductivas($numPlantasProductivas) {
    $this->numPlantasProductivas = $numPlantasProductivas;
  }

  /**
   * Fija el numero de plantas erradicadas
   * @version 1.0.0
   * @param type $numPlantasErradica
   */
  public function setNumPlantasErradica($numPlantasErradica) {
    $this->numPlantasErradica = $numPlantasErradica;
  }

  /**
   * Fija la fecha y la hora de creación del registro
   * @version 1.0.0
   * @param string $createdAt Fecha y hora de creación
   */
  public function setCreatedAt($createdAt) {
    $this->createdAt = $createdAt;
  }

    /**
   * Fija la fecha y la hora de la última actualización del registro
   * @version 1.0.0
   * @param sting $updatedAt Fecha y hora de la última actualización del registro
   */
  public function setUpdatedAt($updatedAt) {
    $this->updatedAt = $updatedAt;
  }

    /**
   * Fija la fecha y la hora del borrado lógico
   * @version 1.0.0
   * @param string $deletedAt Fecha y hora del borrado lógico
   */
  public function setDeletedAt($deletedAt) {
    $this->deletedAt = $deletedAt;
  }

}
