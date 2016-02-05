<?php

namespace FStudio\model\base;

use FStudio\fsModel as model;
use FStudio\myConfig as config;

/**
 * Description of contolAdministrativoRiego
 * 
 * @author Marian Montaño <nichesitap@hotmail.com>
 * @package FStudio
 * @subpackage model
 * @subpackage base
 * @version 1.0.0
 */
class controlAdministrativoRiegoBaseTable extends model {

  /**
   * id de la tabla base
   */
  const ID = 'car_num_documento';

  /**
   * fecha control administrativo
   */
  const FECHA = 'car_fecha';

  /**
   * id de la tabla metodo riego
   */
  const METODO_RIEGO_ID = 'met_rie_id';

  /**
   * id de la tabla hacienda
   */
  const HACIENDA_ID = 'hac_id';

  /**
   * id de la tabla suerte
   */
  const SUERTE_ID = 'sue_id';

  /**
   *
   */
  const CAUDAL_RIEGO = 'car_caudal_riego';

  /**
   * tiempo que dura el riego
   */
  const TIEMPO_RIEGO = 'car_tiempo_riego';

  /**
   * extension para el registro de riego
   */
  const TIEMPO_RIEGO_LENGTH = 5;

  /**
   * tiempo de suspension de riego
   */
  const TIEMPO_TOTAL_SUSPENSION = 'car_tiempo_total_suspension';

  /**
   * extension para el rejistro de la suspension
   */
  const TIEMPO_TOTAL_SUSPENSION_LENGTH = 5;

  /**
   * medicion del surco
   */
  const LONGITUD_SURCO = 'car_longitud_surco';

  /**
   *
   */
  const ESPACIO_SURCO = 'car_espacio_surco';

  /**
   * total de surcos regados
   */
  const NUM_SURCO_REGADOS = 'car_num_surco_regados';

  /**
   * descripcion del estado de humedad
   */
  const ESTADO_HUMEDAD = 'car_estado_humedad';

  /**
   * extencion para el registro de la humedad
   */
  const ESTADO_HUMEDAD_LENGTH = 80;

  /**
   *
   */
  const SUELO_GRIETA = 'car_suelo_grieta';

  /**
   *
   */
  const FACIL_AVANCE_AGUA = 'car_facil_avance_agua';

  /**
   *
   */
  const PENDIENTE_DIR_SURCO = 'car_pendiente_dir_surco';

  /**
   *
   */
  const AGUA_COSTADO = 'car_agua_costado';

  /**
   * Fecha y hora de creación del registro
   */
  const CREATED_AT = 'car_created_at';

  /**
   * Fecha y hora de la ultima actualización del registro
   */
  const UPDATED_AT = 'car_updated:at';

  /**
   * Fecha y hora para controlar el borrado lógico
   */
  const DELETED_AT = 'car_deleted_at';

  /**
   * Nombre de la secuencia del ID de la tabla
   */
  const _SEQUENCE = 'bda_control_administrativo_riego_car_num_documento_seq';

  /**
   * Nombre de la tabla
   */
  const _TABLE = 'bda_control_administrativo_riego';

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
   * fecha de control
   * @var date
   */
  private $fecha;

  /**
   * foranea de  la tabla metodo riego
   * @var integer
   */
  private $metodo_riego_id;

  /**
   * foranea de la tabla hacienda
   * @var integer
   */
  private $hacienda_id;

  /**
   * foranea de la tabla suerte
   * @var integer
   */
  private $suerte_id;

  /**
   *
   * @var integer
   */
  private $caudal_riego;

  /**
   *
   * @var varchar
   */
  private $tiempo_riego;

  /**
   *
   * @var varchar
   */
  private $tiempo_total_suspension;

  /**
   *
   * @var integer
   */
  private $longitud_surco;

  /**
   *
   * @var integer
   */
  private $espacio_surco;

  /**
   *
   * @var integer
   */
  private $num_surco_regados;

  /**
   *
   * @var varchar
   */
  private $estado_humedad;

  /**
   *
   * @var boolean
   */
  private $suelo_grieta;

  /**
   *
   * @var boolean
   */
  private $facil_avance_agua;

  /**
   *
   * @var varchar
   */
  private $pendiente_dir_surco;

  /**
   *
   * @var boolean
   */
  private $agua_costado;

  /**
   * Crea los registros de la tabla
   * @var date_time
   */
  private $created_at;

  /**
   * Actualiza registros de la tabla
   * @var date_time
   */
  private $updated_at;

  /**
   * Elimina registros de la tabla
   * @var date_time
   */
  private $deleted_at;

  /**
   *
   * @param config $config
   * @param type $id
   * @param type $fecha
   * @param type $metodo_riego_id
   * @param type $hacienda_id
   * @param type $suerte_id
   * @param type $caudal_riego
   * @param type $tiempo_riego
   * @param type $tiempo_total_suspension
   * @param type $longitud_surco
   * @param type $espacio_surco
   * @param type $num_surco_regados
   * @param type $estado_humedad
   * @param type $suelo_grieta
   * @param type $facil_avance_agua
   * @param type $pendiente_dir_surco
   * @param type $agua_costado
   * @param type $created_at
   * @param type $updated_at
   * @param type $deleted_at
   */
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

  /**
   * Retorna el id del registro de la tabla
   * @version 1.0.0
   * @return integer
   */
  public function getId() {
    return $this->id;
  }

  /**
   * retorna la fecha del control administrativo
   * @version 1.0.0
   * @return date
   */
  public function getFecha() {
    return $this->fecha;
  }

  /**
   * retorna el id de la tabla metodo riego
   * @version 1.0.0
   * @return integer
   */
  public function getMetodoRiegoId() {
    return $this->metodo_riego_id;
  }

  /**
   * retorna el id de la tabla hacienda
   * @version 1.0.0
   * @return integer
   */
  public function getHaciendaId() {
    return $this->hacienda_id;
  }

  /**
   * retorna el id de la tabla suerte
   * @version 1.0.0
   * @return integer
   */
  public function getSuerteId() {
    return $this->suerte_id;
  }

  /**
   *
   * @version 1.0.0
   * @return integer
   */
  public function getCaudalRiego() {
    return $this->caudal_riego;
  }

  /**
   *
   * @version 1.0.0
   * @return integer
   */
  public function getTiempoRiego() {
    return $this->tiempo_riego;
  }

  /**
   *
   * @version 1.0.0
   * @return integer
   */
  public function getTiempoTotalSuspension() {
    return $this->tiempo_total_suspension;
  }

  /**
   *
   * @version 1.0.0
   * @return integer
   */
  public function getLongitudSurco() {
    return $this->longitud_surco;
  }

  /**
   *
   * @version 1.0.0
   * @return integer
   */
  public function getEspacioSurco() {
    return $this->espacio_surco;
  }

  /**
   *
   * @version 1.0.0
   * @return integer
   */
  public function getNumSurcoRegados() {
    return $this->num_surco_regados;
  }

  /**
   *
   * @version 1.0.0
   * @return integer
   */
  public function getEstadoHumedad() {
    return $this->estado_humedad;
  }

  /**
   *
   * @version 1.0.0
   * @return integer
   */
  public function getSueloGrieta() {
    return $this->suelo_grieta;
  }

  /**
   *
   * @version 1.0.0
   * @return integer
   */
  public function getFacilAvanceAgua() {
    return $this->facil_avance_agua;
  }

  /**
   *
   * @version 1.0.0
   * @return integer
   */
  public function getPendienteDirSurco() {
    return $this->pendiente_dir_surco;
  }

  /**
   *
   * @version 1.0.0
   * @return integer
   */
  public function getAguaCostado() {
    return $this->agua_costado;
  }

  /**
   *
   * @version 1.0.0
   * @return integer
   */
  public function getCreatedAt() {
    return $this->created_at;
  }

  /**
   *
   * @version 1.0.0
   * @return integer
   */
  public function getUpdatedAt() {
    return $this->updated_at;
  }

  /**
   *
   * @version 1.0.0
   * @return integer
   */
  public function getDeletedAt() {
    return $this->deleted_at;
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
   * Fija la fecha registro en la tabla
   * @version 1.0.0
   * @param integer $fecha
   */
  public function setFecha($fecha) {
    $this->fecha = $fecha;
  }

  /**
   * Fija el id de la tabla metodo riego
   * @version 1.0.0
   * @param integer $metRieId
   */
  public function setMetodoRiegoId($metodo_riego_id) {
    $this->metodo_riego_id = $metodo_riego_id;
  }

  /**
   * Fija el id de la tabla hacienda
   * @version 1.0.0
   * @param integer $hac_id
   */
  public function setHaciendaId($hacienda_id) {
    $this->hacienda_id = $hacienda_id;
  }

  /**
   * Fija el id de la tabla suerte
   * @version 1.0.0
   * @param integer $sue_id
   */
  public function setSuerteId($suerte_id) {
    $this->suerte_id = $suerte_id;
  }

  /**
   *
   * @version 1.0.0
   * @param integer
   */
  public function setCaudalRiego($caudal_riego) {
    $this->caudal_riego = $caudal_riego;
  }

  /**
   *
   * @version 1.0.0
   * @param integer
   */
  public function setTiempoRiego($tiempo_riego) {
    $this->tiempo_riego = $tiempo_riego;
  }

  /**
   *
   * @version 1.0.0
   * @param integer
   */
  public function setTiempoTotalSuspension($tiempo_total_suspension) {
    $this->tiempo_total_suspension = $tiempo_total_suspension;
  }

  /**
   *
   * @version 1.0.0
   * @param integer
   */
  public function setLongitudSurco($longitud_surco) {
    $this->longitud_surco = $longitud_surco;
  }

  /**
   *
   * @version 1.0.0
   * @param integer
   */
  public function setEspacioSurco($espacio_surco) {
    $this->espacio_surco = $espacio_surco;
  }

  /**
   *
   * @version 1.0.0
   * @param integer
   */
  public function setNumSurcoRegados($num_surco_regados) {
    $this->num_surco_regados = $num_surco_regados;
  }

  /**
   *
   * @version 1.0.0
   * @param integer
   */
  public function setEstadoHumedad($estado_humedad) {
    $this->estado_humedad = $estado_humedad;
  }

  public function setSueloGrieta($suelo_grieta) {
    $this->suelo_grieta = $suelo_grieta;
  }

  /**
   *
   * @version 1.0.0
   * @param integer
   */
  public function setFacilAvanceAgua($facil_avance_agua) {
    $this->facil_avance_agua = $facil_avance_agua;
  }

  /**
   *
   * @version 1.0.0
   * @param integer
   */
  public function setPendienteDirSurco($pendiente_dir_surco) {
    $this->pendiente_dir_surco = $pendiente_dir_surco;
  }

  /**
   *
   * @version 1.0.0
   * @param integer
   */
  public function setAguaCostado($agua_costado) {
    $this->agua_costado = $agua_costado;
  }

  /**
   * Retorna los datos creados en la tabla
   * @version 1.0.0
   * @return date_time
   */
  public function setCreatedAt($created_at) {
    $this->created_at = $created_at;
  }

  /**
   * Retorna las actualizaciones que se hayan hecho en la tabla
   * @version 1.0.0
   * @return date_time
   */
  public function setUpdatedAt($updated_at) {
    $this->updated_at = $updated_at;
  }

  /**
   * Retorna los datos eliminados de la tabla
   * @version 1.0.0
   * @return date_time
   */
  public function setDeletedAt($deleted_at) {
    $this->deleted_at = $deleted_at;
  }

}
