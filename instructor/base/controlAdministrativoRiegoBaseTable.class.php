<?php

namespace FStudio\model\base;

use FStudio\fsModel as model;
use FStudio\myConfig as config;

/**
 * Description of controlAdministrativoRiegoBaseTable
 *
 * @author nombre completo <su@correo.com>
 * @package FStudio
 * @subpackage model
 * @subpackage base
 * @version 1.0.0
 */
class controlAdministrativoRiegoBaseTable extends model {

  const ID = 'car_num_documento';
  const FECHA = 'car_fecha';
  const METODO_RIEGO_ID = 'met_rie_id';
  const HACIENDA_ID = 'hac_id';
  const SUERTE_ID = 'sue_id';
  const CAUDAL_RIEGO = 'car_caudal_riego';
  const TIEMPO_RIEGO = 'car_tiempo_riego';
  const TIEMPO_RIEGO_LENGTH = 5;
  const TIEMPO_TOTAL_SUSPENSION = 'car_tiempo_total_suspension';
  const TIEMPO_TOTAL_SUSPENSION_LENGTH = 5;
  const LONGITUD_SURCO = 'car_longitud_surco';
  const ESPACIO_SURCO = 'car_espacio_surco';
  const NUM_SURCO_REGADOS = 'car_num_surco_regados';
  const ESTADO_HUMEDAD = 'car_estado_humedad';
  const ESTADO_HUMEDAD_LENGTH = 80;
  const SUELO_GRIETA = 'car_suelo_grieta';
  const FACIL_AVANCE_AGUA = 'car_facil_avance_agua';
  const PENDIENTE_DIR_SURCO = 'car_pendiente_dir_surco';
  const AGUA_COSTADO = 'car_agua_costado';
  const CREATED_AT = 'car_created_at';
  const UPDATED_AT = 'car_updated:at';
  const DELETED_AT = 'car_deleted_at';
  const _SEQUENCE = 'bda_control_administrativo_riego_car_num_documento_seq';
  const _TABLE = 'bda_control_administrativo_riego';

  /**
   * Configuración del sistema
   * @var config
   */
  protected $config;
  private $id;
  private $fecha;
  private $metodo_riego_id;
  private $hacienda_id;
  private $suerte_id;
  private $caudal_riego;
  private $tiempo_riego;
  private $tiempo_total_suspension;
  private $longitud_surco;
  private $espacio_surco;
  private $num_surco_regados;
  private $estado_humedad;
  private $suelo_grieta;
  private $facil_avance_agua;
  private $pendiente_dir_surco;
  private $agua_costado;
  private $created_at;
  private $updated_at;
  private $deleted_at;

  public function __construct(config $config, $id = null, $fecha = null, $metodo_riego_id = null, $hacienda_id = null, $suerte_id = null, $caudal_riego = null, $tiempo_riego = null, $tiempo_total_suspension = null, $longitud_surco = null, $espacio_surco = null, $num_surco_regados = null, $estado_humedad = null, $suelo_grieta = null, $facil_avance_agua = null, $pendiente_dir_surco = null, $agua_costado = null, $created_at = null, $updated_at = null, $deleted_at = null) {
    $this->config = $config;
    $this->id = $id;
    $this->fecha = $fecha;
    $this->metodo_riego_id = $metodo_riego_id;
    $this->hacienda_id = $hacienda_id;
    $this->suerte_id = $suerte_id;
    $this->caudal_riego = $caudal_riego;
    $this->tiempo_riego = $tiempo_riego;
    $this->tiempo_total_suspension = $tiempo_total_suspension;
    $this->longitud_surco = $longitud_surco;
    $this->espacio_surco = $espacio_surco;
    $this->num_surco_regados = $num_surco_regados;
    $this->estado_humedad = $estado_humedad;
    $this->suelo_grieta = $suelo_grieta;
    $this->facil_avance_agua = $facil_avance_agua;
    $this->pendiente_dir_surco = $pendiente_dir_surco;
    $this->agua_costado = $agua_costado;
    $this->created_at = $created_at;
    $this->updated_at = $updated_at;
    $this->deleted_at = $deleted_at;
  }

  public function getId() {
    return $this->id;
  }

  public function getFecha() {
    return $this->fecha;
  }

  public function getMetodoRiegoId() {
    return $this->metodo_riego_id;
  }

  public function getHaciendaId() {
    return $this->hacienda_id;
  }

  public function getSuerteId() {
    return $this->suerte_id;
  }

  public function getCaudalRiego() {
    return $this->caudal_riego;
  }

  public function getTiempoRiego() {
    return $this->tiempo_riego;
  }

  public function getTiempoTotalSuspension() {
    return $this->tiempo_total_suspension;
  }

  public function getLongitudSurco() {
    return $this->longitud_surco;
  }

  public function getEspacioSurco() {
    return $this->espacio_surco;
  }

  public function getNumSurcoRegados() {
    return $this->num_surco_regados;
  }

  public function getEstadoHumedad() {
    return $this->estado_humedad;
  }

  public function getSueloGrieta() {
    return $this->suelo_grieta;
  }

  public function getFacilAvanceAgua() {
    return $this->facil_avance_agua;
  }

  public function getPendienteDirSurco() {
    return $this->pendiente_dir_surco;
  }

  public function getAguaCostado() {
    return $this->agua_costado;
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

  public function setFecha($fecha) {
    $this->fecha = $fecha;
  }

  public function setMetodoRiegoId($metodo_riego_id) {
    $this->metodo_riego_id = $metodo_riego_id;
  }

  public function setHaciendaId($hacienda_id) {
    $this->hacienda_id = $hacienda_id;
  }

  public function setSuerteId($suerte_id) {
    $this->suerte_id = $suerte_id;
  }

  public function setCaudalRiego($caudal_riego) {
    $this->caudal_riego = $caudal_riego;
  }

  public function setTiempoRiego($tiempo_riego) {
    $this->tiempo_riego = $tiempo_riego;
  }

  public function setTiempoTotalSuspension($tiempo_total_suspension) {
    $this->tiempo_total_suspension = $tiempo_total_suspension;
  }

  public function setLongitudSurco($longitud_surco) {
    $this->longitud_surco = $longitud_surco;
  }

  public function setEspacioSurco($espacio_surco) {
    $this->espacio_surco = $espacio_surco;
  }

  public function setNumSurcoRegados($num_surco_regados) {
    $this->num_surco_regados = $num_surco_regados;
  }

  public function setEstadoHumedad($estado_humedad) {
    $this->estado_humedad = $estado_humedad;
  }

  public function setSueloGrieta($suelo_grieta) {
    $this->suelo_grieta = $suelo_grieta;
  }

  public function setFacilAvanceAgua($facil_avance_agua) {
    $this->facil_avance_agua = $facil_avance_agua;
  }

  public function setPendienteDirSurco($pendiente_dir_surco) {
    $this->pendiente_dir_surco = $pendiente_dir_surco;
  }

  public function setAguaCostado($agua_costado) {
    $this->agua_costado = $agua_costado;
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
