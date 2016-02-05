<?php

namespace FStudio\model\base;

use FStudio\fsModel as model;
use FStudio\myConfig as config;

/**
 * Description of controlSalidaCanaBaseTable
 * 
 * @author Daniela Barona Mosquera <mo_naok@hotmail.com>
 * @package FStudio
 * @subpackage model
 * @subpackage base
 * @version 1.0.0
 */
class controlSalidaCanaBaseTable extends model {

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
  const CREATED_AT = 'csc_created_at';

  /**
   * Fecha y hora de la ultima actualización del registro
   */
  const UPDATED_AT = 'csc_updated_at';

  /**
   * Fecha y hora para controlar el borrado lógico
   */
  const DELETED_AT = 'csc_deleted_at';

  /**
   * Nombre de la secuencia del ID de la tabla
   */
  const _SEQUENCE = 'bda_control_salida_cana_csc_id_seq';

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
  private $total_vagones;

  /**
   * Notas de la tabla
   * @var text
   */
  private $notas;

  /**
   * Total de trenes de la tabla
   * @var integer
   */
  private $total_trenes;

  /**
   * Foranea de la tabla turno
   * @var integer
   */
  private $turno_id;

  /**
   * Foranea de la tabla suerte
   * @var integer
   */
  private $suerte_id;

  /**
   * Foranea de la tabla tercero
   * @var integer
   */
  private $tercero_id;

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
   * Constructor de la clase controlSalidaCanaBaseTable
   * @param config $config
   * @param type $id
   * @param date $fecha
   * @param type $total_vagones
   * @param text $notas
   * @param type $total_trenes
   * @param type $turno_id
   * @param type $suerte_id
   * @param type $tercero_id
   * @param date_time $created_at
   * @param date_time $updated_at
   * @param date_time $deleted_at
   */
  public function __construct(config $config, $id = null, $fecha = null, $total_vagones = null, $notas = null, $total_trenes = null, $turno_id = null, $suerte_id = null, $tercero_id = null, $created_at = null, $updated_at = null, $deleted_at = null) {
    $this->config = $config;
    $this->id = $id;
    $this->fecha = $fecha;
    $this->total_vagones = $total_vagones;
    $this->notas = $notas;
    $this->total_trenes = $total_trenes;
    $this->turno_id = $turno_id;
    $this->suerte_id = $suerte_id;
    $this->tercero_id = $tercero_id;
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
    return $this->total_vagones;
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
    return $this->total_trenes;
  }

  /**
   * Retorna el id de la tabla turno
   * @version 1.0.0
   * @return integer
   */
  public function getTurnoId() {
    return $this->turno_id;
  }

  /**
   * Retorna el id de la tabla suerte
   * @version 1.0.0
   * @return integer
   */
  public function getSuerteId() {
    return $this->suerte_id;
  }

  /**
   * Retorna el id de la tabla tercero
   * @version 1.0.0
   * @return integer
   */
  public function getTerceroId() {
    return $this->tercero_id;
  }

  /**
   * Retorna los datos creados en la tabla
   * @version 1.0.0
   * @return date_time
   */
  public function getCreatedAt() {
    return $this->created_at;
  }

  /**
   * Retorna las actualizaciones que se hayan hecho en la tabla
   * @version 1.0.0
   * @return date_time
   */
  public function getUpdatedAt() {
    return $this->updated_at;
  }

  /**
   * Retorna los datos eliminados de la tabla
   * @version 1.0.0
   * @return date_time
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
   * Fija la fecha para el registro en la tabla
   * @version 1.0.0
   * @param date $fecha
   */
  public function setFecha($fecha) {
    $this->fecha = $fecha;
  }

  /**
   * Fija el total de vagones que se obtengan para el registro en la tabla
   * @version 1.0.0
   * @param integer $total_vagones
   */
  public function setTotalVagones($total_vagones) {
    $this->total_vagones = $total_vagones;
  }

  /**
   * Fija las notas que se obtengan para el registro en la tabla
   * @version 1.0.0
   * @param text $notas
   */
  public function setNotas($notas) {
    $this->notas = $notas;
  }

  /**
   * Fija el total de trenes que se obtengan para el registro en la tabla
   * @version 1.0.0
   * @param integer $total_trenes
   */
  public function setTotalTrenes($total_trenes) {
    $this->total_trenes = $total_trenes;
  }

  /**
   * Fija el id de la tabla turno
   * @version 1.0.0
   * @param integer $turno_id
   */
  public function setTurnoId($turno_id) {
    $this->turno_id = $turno_id;
  }

  /**
   * Fija el id de la tabla suerte
   * @version 1.0.0
   * @param integer $suerte_id
   */
  public function setSuerteId($suerte_id) {
    $this->suerte_id = $suerte_id;
  }

  /**
   * Fija el id de la tabla tercero
   * @version 1.0.0
   * @param integer $tercero_id
   */
  public function setTerceroId($tercero_id) {
    $this->tercero_id = $tercero_id;
  }

  /**
   * Fija los datos creados que se hayan hecho en la tabla
   * @version 1.0.0
   * @param integer $created_at
   */
  public function setCreatedAt($created_at) {
    $this->created_at = $created_at;
  }

  /**
   * Fija las actualizaciones que se hayan hecho en la tabla
   * @version 1.0.0
   * @param integer $updated_at
   */
  public function setUpdatedAt($updated_at) {
    $this->updated_at = $updated_at;
  }

  /**
   * Fija las datos eliminados que se hayan hecho en la tabla
   * @version 1.0.0
   * @param integer $deleted_at
   */
  public function setDeletedAt($deleted_at) {
    $this->deleted_at = $deleted_at;
  }

}
