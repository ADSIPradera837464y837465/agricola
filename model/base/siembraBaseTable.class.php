<?php

namespace FStudio\model\base;

use FStudio\fsModel as model;
use FStudio\myConfig as config;

/**
 * Description of siembraBaseTable
 * @author Diana Meneses <meneses_d@rocketmail.com>
 * @package FStudio
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
   * id del tipo de caña
   */
    const TIPO_CANA_ID = 'tic_id';

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
  const _SEQUENCE = 'bda_siembra_sie_id_seq';

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
  private $suerte_id;

  /**
   * dia de la siembra
   * @var integer 
   */
  private $dia;

  /**
   * presupuesto de la empresa para la siembra
   * @var  integer
   */
  private $presupuesto_empresa;

  /**
   * kilos para la siembra por lote
   * @var integer 
   */
 private $kilos_lote;

  /**
   * kilos de la planta
   * @var integer 
   */
private $total_kilos_planta;

  /**
   * fecha de la siembra
   * @var date 
   */
  private $fecha;

  /**
   * fecha final del levante
   * @var date 
   */
private $fecha_fin_levante;

  /**
   * fecha inicial del ciclo
   * @var date 
   */
    private $fecha_inicio_ciclo;

  /**
   * fecha final del ciclo
   * @var date 
   */
  private $fecha_fin_ciclo;

  /**
   * fecha de poda de la caña
   * @var date 
   */
   private $fecha_poda;

  /**
   * fecha de la producción
   * @var date 
   */
 private $fecha_produccion;

  /**
   * numero de la hectarea en la que se sembró
   * @var integer
   */
 private $num_hectarea;

  /**
   * numero de plantas de levante
   * @var integer 
   */
  private $num_planta_levante;

  /**
   * numero de plantas productivas
   * @var integer 
   */
  private $num_plantas_productivas;

  /**
   * numero de plantas erradicadas
   * @var integer 
   */
  private $num_plantas_erradica;

  /**
   * Fecha y hora de creación del registro
   * @var string
   */
 private $created_at;

  /**
   * Fecha y hora de la ultima actualización del registro
   * @var string
   */
 private $updated_at;

  /**
   * Fecha y hora para controlar el borrado lógico
   * @var string
   */
    private $deleted_at;

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
  public function __construct(config $config, $id = null, $suerte_id = null, $tipo_cana_id = null, $dia = null, $presupuesto_empresa = null, $kilos_lote = null, $total_kilos_planta = null, $fecha = null, $fecha_fin_levante = null, $fecha_inicio_ciclo = null, $fecha_fin_ciclo = null, $fecha_poda = null, $fecha_produccion = null, $num_hectarea = null, $num_planta_levante = null, $num_plantas_productivas = null, $num_plantas_erradica = null, $created_at = null, $updated_at = null, $deleted_at = null) {
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
    return $this->suerte_id;
  }
  
    public function getTipoCanaId() {
    return $this->tipo_cana_id;
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
    return $this->presupuesto_empresa;
  }

  /**
   * retorna los kilos por lote 
   * @version 1.0.0
   * @return integer
   */
  public function getKilosLote() {
    return $this->kilos_lote;
  }

  /**
   * retorna total de kilos de planta
   * @version 1.0.0
   * @return integer
   */
  public function getTotalKilosPlanta() {
    return $this->total_kilos_planta;
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
    return $this->fecha_fin_levante;
  }

  /**
   * retorna la fecha inicial del ciclo
   * @version 1.0.0
   * @return date
   */
  public function getFechaInicioCiclo() {
    return $this->fecha_inicio_ciclo;
  }

  /**
   * retorna la fechafinal del ciclo
   * @version 1.0.0
   * @return date
   */
  public function getFechaFinCiclo() {
    return $this->fecha_fin_ciclo;
  }

  /**
   * retorna la fecha de la poda
   * @version 1.0.0
   * @return date
   */
  public function getFechaPoda() {
    return $this->fecha_poda;
  }

  /**
   * retorna la fecha de produccion
   * @version 1.0.0
   * @return date
   */
  public function getFechaProduccion() {
    return $this->fecha_produccion;
  }

  /**
   * retorna el numero de la hectarea en la que se sembró
   * @version 1.0.0
   * @return integer
   */
  public function getNumHectarea() {
    return $this->num_hectarea;
  }

  /**
   * retorna el numero de plantas de levante
   * @version 1.0.0
   * @return integer
   */
  public function getNumPlantaLevante() {
    return $this->num_planta_levante;
  }

  /**
   * retorna el numero de plantas productivas
   * @version 1.0.0
   * @return integer
   */
  public function getNumPlantasProductivas() {
    return $this->num_plantas_productivas;
  }

  /**
   * retorna el numero de plantas erradicadas
   * @version 1.0.0
   * @return integer
   */
  public function getNumPlantasErradica() {
    return $this->num_plantas_erradica;
  }

  /**
   * retorna fecha y hora de creacion del registro
   * @version 1.0.0
   * @return string
   */
  public function getCreatedAt() {
    return $this->created_at;
  }

  /**
   * retorna fecha y hora de la ultima actualizacion del registro
   * @version 1.0.0
   * @return string
   */
  public function getUpdatedAt() {
    return $this->updated_at;
  }

  /**
   * retorna fecha y hora de la ultima eliminación del registro
   * @version 1.0.0
   * @return string
   */
  public function getDeletedAt() {
    return $this->deleted_at;
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
  public function setSuerteId($suerte_id) {
    $this->suerte_id = $suerte_id;
  }
  
  public function setTipoCanaId($tipo_cana_id) {
    $this->tipo_cana_id = $tipo_cana_id;
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
  public function setPresupuestoEmpresa($presupuesto_empresa) {
    $this->presupuesto_empresa = $presupuesto_empresa;
  }

  /**
   * Fija los kilos de planta para el lote
   * @version 1.0.0
   * @param integer $kilosLote
   */
  public function setKilosLote($kilos_lote) {
    $this->kilos_lote = $kilos_lote;
  }
  /**
   * Fija el total de plantas semradas por lote
   * @version 1.0.0
   * @param integer $TotalKilosPlanta
   */
  public function setTotalKilosPlanta($total_kilos_planta) {
    $this->total_kilos_planta = $total_kilos_planta;
  }

  /*
   * Fija la fecha de la siembra
   * @version 1.0.0
   * @params date $fecha
   */
   public function setFecha($fecha) {
    $this->fecha = $fecha;
  }

  /**
   * Fija la fecha final de levante
   * @version 1.0.0
   * @param date $fechaFinlevante
   */
   public function setFechaFinLevante($fecha_fin_levante) {
    $this->fecha_fin_levante = $fecha_fin_levante;
  }

  /**
   * Fia la fecha inicial del ciclo
   * @version 1.0.0
   * @param date $fechaInicioCiclo
   */
  public function setFechaInicioCiclo($fecha_inicio_ciclo) {
    $this->fecha_inicio_ciclo = $fecha_inicio_ciclo;
  }

  /**
   * Fia la fecha final del ciclo
   * @version 1.0.0
   * @param date $fechaFinCiclo
   */
  public function setFechaFinCiclo($fecha_fin_ciclo) {
    $this->fecha_fin_ciclo = $fecha_fin_ciclo;
  }

  /**
   * Fija la feha de poda de la caña
   * @version 1.0.0
   * @param date $fechaPoda
   */
   public function setFechaPoda($fecha_poda) {
    $this->fecha_poda = $fecha_poda;
  }

  /**
   * Fija la fecha de produccion
   * @version 1.0.0
   * @param date $fechaProduccion
   */
  public function setFechaProduccion($fecha_produccion) {
    $this->fecha_produccion = $fecha_produccion;
  }

  /**
   * Fija el numero de la hectarea
   * @version 1.0.0
   * @param integer $numHectarea
   */
  public function setNumHectarea($num_hectarea) {
    $this->num_hectarea = $num_hectarea;
  }

  /**
   * Fija el numero de plantas de levante
   * @version 1.0.0
   * @param integer $numPlantaLevante
   */
 public function setNumPlantaLevante($num_planta_levante) {
    $this->num_planta_levante = $num_planta_levante;
  }

  /**
   * Fija el numero de plantas productivas
   * @version 1.0.0
   * @param integer $numPlantasProductivas
   */
  public function setNumPlantasProductivas($num_plantas_productivas) {
    $this->num_plantas_productivas = $num_plantas_productivas;
  }

  /**
   * Fija el numero de plantas erradicadas
   * @version 1.0.0
   * @param type $numPlantasErradica
   */
  public function setNumPlantasErradica($num_plantas_erradica) {
    $this->num_plantas_erradica = $num_plantas_erradica;
  }

  /**
   * Fija la fecha y la hora de creación del registro
   * @version 1.0.0
   * @param string $createdAt Fecha y hora de creación
   */
  public function setCreatedAt($created_at) {
    $this->created_at = $created_at;
  }

    /**
   * Fija la fecha y la hora de la última actualización del registro
   * @version 1.0.0
   * @param sting $updatedAt Fecha y hora de la última actualización del registro
   */
  public function setUpdatedAt($updated_at) {
    $this->updated_at = $updated_at;
  }

    /**
   * Fija la fecha y la hora del borrado lógico
   * @version 1.0.0
   * @param string $deletedAt Fecha y hora del borrado lógico
   */
  public function setDeletedAt($deleted_at) {
    $this->deleted_at = $deleted_at;
  }

}
