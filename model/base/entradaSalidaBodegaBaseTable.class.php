<?php

namespace FStudio\model\base;

use FStudio\fsModel as model;
use FStudio\myConfig as config;

/**
 * Description of entradaSalidaBodegaBaseTable
 * @author Jordan Marles <jordanmarles@hotmail.es>
 * @package FStudio
 * @subpackage model
 * @subpackage base
 * @version 1.0.0
 */
class entradaSalidaBodegaBaseTable extends model {

  /**
   * ID de la tabla
   */
  const ID = 'esb_id';

  /**
   * Foranea de la tabla bda_tercero 
   */
  const TERCERO_ID_ELABORA = 'ter_id_elabora';

  /**
   * Foranea de la tabla bda_tercero 
   */
  const TERCERO_ID_SOLICITA = 'ter_id_solicita';

  /**
   * Foranea de la tabla bda_tipo_documento
   */
  const TIPO_DOCUMENTO_ID = 'tpd_id';

  /**
   * Fecha de la tabla
   */
  const FECHA = 'esb_fecha';

  /**
   * Onservación de la tabla
   */
  const OBSERVACION = 'esb_observacion';

  /**
   * Longitud del campo OBSERVACION
   */
  const OBSERVACION_LENGTH = 1024;

  /**
   * Fecha de creacion del registro
   */
  const CREATED_AT = 'esb_created_at';

  /**
   * Fecha de actualizacion del registro
   */
  const UPDATED_AT = 'esb_created_at';

  /**
   * Fecha de eliminacion del registro
   */
  const DELETED_AT = 'esb_deleted_at';

  /**
   * Secuencia de la tabla para la llave primaria
   */
  const _SEQUENCE = '';

  /**
   * Nombre de la tabla
   */
  const _TABLE = 'bda_entrada_salida_bodega';

  /**
   * Configuración del sistema
   * @var config
   */
  protected $config;

  /**
   * ID de la tabla
   */
  private $id;

  /**
   * Foranea de la tabla bda_tercero
   * @var integer 
   */
  private $terIdElabora;

  /**
   * Foranea de la tabla bda_tercero
   * @var integer 
   */
  private $terIdSolicita;

  /**
   * Foranea de la tabla bda_tipo_documento
   * @var integer 
   */
  private $tpdId;

  /**
   * Fecha de la tabla
   * @var date 
   */
  private $esbFecha;

  /**
   * Observación de la tabla
   * @var string 
   */
  private $esbObservacion;

  /**
   * Fecha de creación del registro
   * @var date_time 
   */
  private $esbCreatedAt;

  /**
   * Fecha de actualización del registro
   * @var date_time
   */
  private $esbUpdatedAt;

  /**
   * Fecha de elimincación del registro
   * @var date _time
   */
  private $esbDeletedAt;

  /**
   * Constructor de la clase entradaSalidaBodegBaseTable
   * @param config $config
   * @param type $id
   * @param type $terIdElabora
   * @param type $terIdSolicita
   * @param type $tpdId
   * @param \FStudio\model\base\date $esbFecha
   * @param type $esbObservacion
   * @param \FStudio\model\base\date_time $esbCreatedAt
   * @param \FStudio\model\base\date_time $esbUpdatedAt
   * @param \FStudio\model\base\date $esbDeletedAt
   */
  public function __construct(config $config, $id = null, $terIdElabora = null, $terIdSolicita = null, $tpdId = null, date $esbFecha = null, $esbObservacion = null, date_time $esbCreatedAt = null, date_time $esbUpdatedAt = null, date $esbDeletedAt = null) {
    $this->config = $config;
    $this->id = $id;
    $this->terIdElabora = $terIdElabora;
    $this->terIdSolicita = $terIdSolicita;
    $this->tpdId = $tpdId;
    $this->esbFecha = $esbFecha;
    $this->esbObservacion = $esbObservacion;
    $this->esbCreatedAt = $esbCreatedAt;
    $this->esbUpdatedAt = $esbUpdatedAt;
    $this->esbDeletedAt = $esbDeletedAt;
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
   * Retorna el id del registro
   * @version 1.0.0
   * @return integer
   */
  public function getId() {
    return $this->id;
  }

  /**
   * Obtiene el identificador de la bda_tabla tercero
   * @version 1.0.0
   * @return integer
   */
  public function getTerIdElabora() {
    return $this->terIdElabora;
  }

  /**
   * Obtiene el identificador de la bda_tabla tercero
   * @version 1.0.0
   * @return integer
   */
  public function getTerIdSolicita() {
    return $this->terIdSolicita;
  }

  /**
   * Obtiene el identificador de la tabla bda_tipo_documento
   * @version 1.0.0
   * @return integer
   */
  public function getTpdId() {
    return $this->tpdId;
  }

  /**
   * Almacena la fecha de la tabla
   * @return date
   */
  public function getEsbFecha() {
    return $this->esbFecha;
  }

  /**
   * Obtiene la observación de la tabla
   * @version 1.0.0
   * @return string
   */
  public function getEsbObservacion() {
    return $this->esbObservacion;
  }

  /**
   * Obtiene la hora y fecha de la creacion de un registro en la tabla
   * @version 1.0.0
   * @return date_time
   */
  public function getEsbCreatedAt() {
    return $this->esbCreatedAt;
  }

  /**
   * Obtiene la hora y fecha de la actualización de un registro en la tabla
   * @version 1.0.0
   * @return date_time
   */
  public function getEsbUpdatedAt() {
    return $this->esbUpdatedAt;
  }

  /**
   * Obtiene la hora y fecha de la eliminación de un registro en la tabla
   * @version 1.0.0
   * @return date_time
   */
  public function getEsbDeletedAt() {
    return $this->esbDeletedAt;
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
   * Fija la foranea de la tabla bda_tercero
   * @version 1.0.0
   * @param integer $terIdElabora
   */
  public function setTerIdElabora($terIdElabora) {
    $this->terIdElabora = $terIdElabora;
  }

  /**
   * Fija la foranea de la tabla bda_tercero
   * @version 1.0.0
   * @param integer $terIdSolicita
   */
  public function setTerIdSolicita($terIdSolicita) {
    $this->terIdSolicita = $terIdSolicita;
  }

  /**
   * Fija la foranea de la tabla bda_tipo_documento
   * @version 1.0.0
   * @param integer $tpdId
   */
  public function setTpdId($tpdId) {
    $this->tpdId = $tpdId;
  }

  /**
   * Fija la fecha de la tabla
   * @version 1.0.0
   * @param integer $esbFecha
   */
  public function setEsbFecha(date $esbFecha) {
    $this->esbFecha = $esbFecha;
  }

  /**
   * Fija la observacion de la tabla
   * @version 1.0.0
   * @param string $esbObservacion
   */
  public function setEsbObservacion($esbObservacion) {
    $this->esbObservacion = $esbObservacion;
  }

  /**
   * Fija la hora y fecha de la creación de un registro en la tabla
   * @version 1.0.0
   * @param date_time $esbCreatedAt
   */
  public function setEsbCreatedAt(date_time $esbCreatedAt) {
    $this->esbCreatedAt = $esbCreatedAt;
  }

  /**
   * Fija la hora y fecha de la actualización de un registro en la tabla
   * @version 1.0.0
   * @param date_time $esbUpdatedAt
   */
  public function setEsbUpdatedAt(date_time $esbUpdatedAt) {
    $this->esbUpdatedAt = $esbUpdatedAt;
  }

  /**
   * Fija la hora y fecha de la eliminación de un registro en la tabla
   * @version 1.0.0
   * @param date_time $esbDeletedAt
   */
  public function setEsbDeletedAt(date $esbDeletedAt) {
    $this->esbDeletedAt = $esbDeletedAt;
  }

}
