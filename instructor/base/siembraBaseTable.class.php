<?php

namespace FStudio\model\base;

use FStudio\fsModel as model;
use FStudio\myConfig as config;

/**
 * Description of siembraBaseTable
 *
 * @author nombre completo <su@correo.com>
 * @package FStudio
 * @subpackage model
 * @subpackage base
 * @version 1.0.0
 */
class siembraBaseTable extends model {

  const ID = 'sie_id';
  const SUERTE_ID = 'sue_id';
  const TIPO_CANA_ID = 'tic_id';
  const DIA = 'sie_dia';
  const PRESUPUESTO_EMPRESA = 'sie_presupuesto_empresa';
  const KILOS_LOTE = 'sie_kilos_lote';
  const TOTAL_KILOS_PLANTA = 'sie_total_kilos_planta';
  const FECHA = 'sie_fecha';
  const FECHA_FIN_LEVANTE = 'sie_fecha_fin_levante';
  const FECHA_INICIO_CICLO = 'sie_fecha_inicio_ciclo';
  const FECHA_FIN_CICLO = 'sie_fecha_fin_ciclo';
  const FECHA_PODA = 'sie_fecha_poda';
  const FECHA_PRODUCCION = 'sie_fecha_produccion';
  const NUM_HECTAREA = 'sie_num_hectarea';
  const NUM_PLANTA_LEVANTE = 'sie_num_planta_levante';
  const NUM_PLANTA_PRODUCTIVA = 'sie_num_planta_productivas';
  const NUM_PLANTA_ERRADICA = 'sie_num_planta_erradica';
  const CREATED_AT = 'sie_created_at';
  const UPDATED_AT = 'sie_updated_at';
  const DELETED_AT = 'sie_deleted_at';
  const _SEQUENCE = 'bda_siembra_sie_id_seq';
  const _TABLE = 'bda_siembra';

  /**
   * Configuración del sistema
   * @var config
   */
  protected $config;
  private $id;
  private $suerte_id;
  private $tipo_cana_id;
  private $dia;
  private $presupuesto_empresa;
  private $kilos_lote;
  private $total_kilos_planta;
  private $fecha;
  private $fecha_fin_levante;
  private $fecha_inicio_ciclo;
  private $fecha_fin_ciclo;
  private $fecha_poda;
  private $fecha_produccion;
  private $num_hectarea;
  private $num_planta_levante;
  private $num_planta_productiva;
  private $num_planta_erradica;
  private $created_at;
  private $updated_at;
  private $deleted_at;

  public function __construct(config $config, $id = null, $suerte_id = null, $tipo_cana_id = null, $dia = null, $presupuesto_empresa = null, $kilos_lote = null, $total_kilos_planta = null, $fecha = null, $fecha_fin_levante = null, $fecha_inicio_ciclo = null, $fecha_fin_ciclo = null, $fecha_poda = null, $fecha_produccion = null, $num_hectarea = null, $num_planta_levante = null, $num_planta_productiva = null, $num_planta_erradica = null, $created_at = null, $updated_at = null, $deleted_at = null) {
    $this->config = $config;
    $this->id = $id;
    $this->suerte_id = $suerte_id;
    $this->tipo_cana_id = $tipo_cana_id;
    $this->dia = $dia;
    $this->presupuesto_empresa = $presupuesto_empresa;
    $this->kilos_lote = $kilos_lote;
    $this->total_kilos_planta = $total_kilos_planta;
    $this->fecha = $fecha;
    $this->fecha_fin_levante = $fecha_fin_levante;
    $this->fecha_inicio_ciclo = $fecha_inicio_ciclo;
    $this->fecha_fin_ciclo = $fecha_fin_ciclo;
    $this->fecha_poda = $fecha_poda;
    $this->fecha_produccion = $fecha_produccion;
    $this->num_hectarea = $num_hectarea;
    $this->num_planta_levante = $num_planta_levante;
    $this->num_planta_productiva = $num_planta_productiva;
    $this->num_planta_erradica = $num_planta_erradica;
    $this->created_at = $created_at;
    $this->updated_at = $updated_at;
    $this->deleted_at = $deleted_at;
  }

  public function getId() {
    return $this->id;
  }

  public function getSuerteId() {
    return $this->suerte_id;
  }

  public function getTipoCanaId() {
    return $this->tipo_cana_id;
  }

  public function getDia() {
    return $this->dia;
  }

  public function getPresupuestoEmpresa() {
    return $this->presupuesto_empresa;
  }

  public function getKilosLote() {
    return $this->kilos_lote;
  }

  public function getTotalKilosPlanta() {
    return $this->total_kilos_planta;
  }

  public function getFecha() {
    return $this->fecha;
  }

  public function getFechaFinLevante() {
    return $this->fecha_fin_levante;
  }

  public function getFechaInicioCiclo() {
    return $this->fecha_inicio_ciclo;
  }

  public function getFechaFinCiclo() {
    return $this->fecha_fin_ciclo;
  }

  public function getFechaPoda() {
    return $this->fecha_poda;
  }

  public function getFechaProduccion() {
    return $this->fecha_produccion;
  }

  public function getNumHectarea() {
    return $this->num_hectarea;
  }

  public function getNumPlantaLevante() {
    return $this->num_planta_levante;
  }

  public function getNumPlantaProductiva() {
    return $this->num_planta_productiva;
  }

  public function getNumPlantaErradica() {
    return $this->num_planta_erradica;
  }

  public function getCreatedAt() {
    return $this->created_at;
  }

  public function getUpdatedAt() {
    return $this->updated_at;
  }

  public function getDeletedAt() {
    return $this->deleted_at;
  }

  public function setId($id) {
    $this->id = $id;
  }

  public function setSuerteId($suerte_id) {
    $this->suerte_id = $suerte_id;
  }

  public function setTipoCanaId($tipo_cana_id) {
    $this->tipo_cana_id = $tipo_cana_id;
  }

  public function setDia($dia) {
    $this->dia = $dia;
  }

  public function setPresupuestoEmpresa($presupuesto_empresa) {
    $this->presupuesto_empresa = $presupuesto_empresa;
  }

  public function setKilosLote($kilos_lote) {
    $this->kilos_lote = $kilos_lote;
  }

  public function setTotalKilosPlanta($total_kilos_planta) {
    $this->total_kilos_planta = $total_kilos_planta;
  }

  public function setFecha($fecha) {
    $this->fecha = $fecha;
  }

  public function setFechaFinLevante($fecha_fin_levante) {
    $this->fecha_fin_levante = $fecha_fin_levante;
  }

  public function setFechaInicioCiclo($fecha_inicio_ciclo) {
    $this->fecha_inicio_ciclo = $fecha_inicio_ciclo;
  }

  public function setFechaFinCiclo($fecha_fin_ciclo) {
    $this->fecha_fin_ciclo = $fecha_fin_ciclo;
  }

  public function setFechaPoda($fecha_poda) {
    $this->fecha_poda = $fecha_poda;
  }

  public function setFechaProduccion($fecha_produccion) {
    $this->fecha_produccion = $fecha_produccion;
  }

  public function setNumHectarea($num_hectarea) {
    $this->num_hectarea = $num_hectarea;
  }

  public function setNumPlantaLevante($num_planta_levante) {
    $this->num_planta_levante = $num_planta_levante;
  }

  public function setNumPlantaProductiva($num_planta_productiva) {
    $this->num_planta_productiva = $num_planta_productiva;
  }

  public function setNumPlantaErradica($num_planta_erradica) {
    $this->num_planta_erradica = $num_planta_erradica;
  }

  public function setCreatedAt($created_at) {
    $this->created_at = $created_at;
  }

  public function setUpdatedAt($updated_at) {
    $this->updated_at = $updated_at;
  }

  public function setDeletedAt($deleted_at) {
    $this->deleted_at = $deleted_at;
  }

}
