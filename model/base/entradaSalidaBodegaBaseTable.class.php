<?php

namespace FStudio\model\base;

use FStudio\fsModel as model;
use FStudio\myConfig as config;

/**
 * Description of entradaSalidaBodegaBaseTable
 * 
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
  const UPDATED_AT = 'esb_updated_at';

  /**
   * Fecha de eliminacion del registro
   */
  const DELETED_AT = 'esb_deleted_at';

  /**
   * Secuencia de la tabla para la llave primaria
   */
  const _SEQUENCE = 'bda_entrada_salida_bodega_esb_id_seq';

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
  private $tercero_id_elabora;

  /**
   * Foranea de la tabla bda_tercero
   * @var integer
   */
  private $tercero_id_solicita;

  /**
   * Foranea de la tabla bda_tipo_documento
   * @var integer
   */
  private $tipo_documento_id;

  /**
   * Fecha de la tabla
   * @var date
   */
  private $fecha;

  /**
   * Observación de la tabla
   * @var string
   */
  private $observacion;

  /**
   * Fecha de creación del registro
   * @var date_time
   */
  private $created_at;

  /**
   * Fecha de actualización del registro
   * @var date_time
   */
  private $updated_at;

  /**
   * Fecha de elimincación del registro
   * @var date _time
   */
  private $deleted_at;

  /**
   * Constructor de la clase entradaSalidaBodegBaseTable
   * @param config $config
   * @param type $id
   * @param type $tercero_id_elabora
   * @param type $tercero_id_solicita
   * @param type $tipo_documento_id
   * @param type $fecha
   * @param type $observacion
   * @param type $created_at
   * @param type $updated_at
   * @param type $deleted_at
   */
  public function __construct(config $config, $id = null, $tercero_id_elabora = null, $tercero_id_solicita = null, $tipo_documento_id = null, $fecha = null, $observacion = null, $created_at = null, $updated_at = null, $deleted_at = null) {
    $this->config = $config;
    $this->id = $id;
    $this->tercero_id_elabora = $tercero_id_elabora;
    $this->tercero_id_solicita = $tercero_id_solicita;
    $this->tipo_documento_id = $tipo_documento_id;
    $this->fecha = $fecha;
    $this->observacion = $observacion;
    $this->created_at = $created_at;
    $this->updated_at = $updated_at;
    $this->deleted_at = $deleted_at;
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
  public function getTerceroIdElabora() {
    return $this->tercero_id_elabora;
  }

  /**
   * Obtiene el identificador de la bda_tabla tercero
   * @version 1.0.0
   * @return integer
   */
  public function getTerceroIdSolicita() {
    return $this->tercero_id_solicita;
  }

  /**
   * Obtiene el identificador de la tabla bda_tipo_documento
   * @version 1.0.0
   * @return integer
   */
  public function getTipoDocumentoId() {
    return $this->tipo_documento_id;
  }

  /**
   * Almacena la fecha de la tabla
   * @return date
   */
  public function getFecha() {
    return $this->fecha;
  }

  /**
   * Obtiene la observación de la tabla
   * @version 1.0.0
   * @return string
   */
  public function getObservacion() {
    return $this->observacion;
  }

  /**
   * Obtiene la hora y fecha de la creacion de un registro en la tabla
   * @version 1.0.0
   * @return date_time
   */
  public function getCreatedAt() {
    return $this->created_at;
  }

  /**
   * Obtiene la hora y fecha de la actualización de un registro en la tabla
   * @version 1.0.0
   * @return date_time
   */
  public function getUpdatedAt() {
    return $this->updated_at;
  }

  /**
   * Obtiene la hora y fecha de la eliminación de un registro en la tabla
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
   * Fija la foranea de la tabla bda_tercero
   * @version 1.0.0
   * @param integer $terIdElabora
   */
  public function setTerceroIdElabora($tercero_id_elabora) {
    $this->tercero_id_elabora = $tercero_id_elabora;
  }

  /**
   * Fija la foranea de la tabla bda_tercero
   * @version 1.0.0
   * @param integer $terIdSolicita
   */
  public function setTerceroIdSolicita($tercero_id_solicita) {
    $this->tercero_id_solicita = $tercero_id_solicita;
  }

  /**
   * Fija la foranea de la tabla bda_tipo_documento
   * @version 1.0.0
   * @param integer $tpdId
   */
  public function setTipoDocumentoId($tipo_documento_id) {
    $this->tipo_documento_id = $tipo_documento_id;
  }

  /**
   * Fija la fecha de la tabla
   * @version 1.0.0
   * @param integer $esbFecha
   */
  public function setFecha($fecha) {
    $this->fecha = $fecha;
  }

  /**
   * Fija la observacion de la tabla
   * @version 1.0.0
   * @param string $esbObservacion
   */
  public function setObservacion($observacion) {
    $this->observacion = $observacion;
  }

  /**
   * Fija la hora y fecha de la creación de un registro en la tabla
   * @version 1.0.0
   * @param date_time $esbCreatedAt
   */
  public function setCreatedAt($created_at) {
    $this->created_at = $created_at;
  }

  /**
   * Fija la hora y fecha de la actualización de un registro en la tabla
   * @version 1.0.0
   * @param date_time $esbUpdatedAt
   */
  public function setUpdatedAt($updated_at) {
    $this->updated_at = $updated_at;
  }

  /**
   * Fija la hora y fecha de la eliminación de un registro en la tabla
   * @version 1.0.0
   * @param date_time $esbDeletedAt
   */
  public function setDeletedAt($deleted_at) {
    $this->deleted_at = $deleted_at;
  }

}
