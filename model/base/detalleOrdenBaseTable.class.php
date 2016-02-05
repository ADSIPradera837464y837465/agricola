<?php

namespace FStudio\model\base;

use FStudio\fsModel as model;
use FStudio\myConfig as config;

/**
 * Description of detalleOrdenBaseTable
 * 
 * @author Daniela Barona Mosquera <mo_naok@hotmail.com>
 * @package FStudio
 * @subpackage model
 * @subpackage base
 * @version 1.0.0
 */
class detalleOrdenBaseTable extends model {

  /**
   * ID de la tabla
   */
  const ID = 'deo_id';

  /**
   * Foranea de la tabla orden servicio
   */
  const ORDEN_SERVICIO_ID = 'ors_id';

  /**
   * Foranea de la tabla servicio maquina
   */
  const SERVICIO_ID = 'ser_id';

  /**
   * Estado del registro
   */
  const ESTADO = 'deo_estado';

  /**
   * Fecha y hora de creación del registro
   */
  const CREATED_AT = 'deo_created_at';

  /**
   * Fecha y hora de la ultima actualización del registro
   */
  const UPDATED_AT = 'deo_updated_at';

  /**
   * Fecha y hora para controlar el borrado lógico
   */
  const DELETED_AT = 'deo_deleted_at';

  /**
   * Nombre de la secuencia del ID de la tabla
   */
  const _SEQUENCE = 'bda_detalle_orden_deo_id_seq';

  /**
   * Nombre de la tabla
   */
  const _TABLE = 'bda_detalle_orden';

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
   * Foranea de la tabla orden servicio
   * @var integer
   */
  private $orden_servicio_id;

  /**
   * Foranea de la tabla servicio maquina
   * @var integer
   */
  private $servicio_id;

  /**
   * Estado del registro
   * @var boolean
   */
  private $estado;

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
   * Constructor de la clase detalleOrdenBaseTable
   * @param config $config
   * @param type $id
   * @param type $orden_servicio_id
   * @param type $servicio_id
   * @param type $estado
   * @param \FStudio\model\base\date_time $created_at
   * @param \FStudio\model\base\date_time $updated_at
   * @param \FStudio\model\base\date_time $deleted_at
   */
  public function __construct(config $config, $id = null, $orden_servicio_id = null, $servicio_id = null, $estado = null, $created_at = null, $updated_at = null, $deleted_at = null) {
    $this->config = $config;
    $this->id = $id;
    $this->orden_servicio_id = $orden_servicio_id;
    $this->servicio_id = $servicio_id;
    $this->estado = $estado;
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
   * Retorna el id de la tabla orden servicio
   * @version 1.0.0
   * @return integer
   */
  public function getOrdenServicioId() {
    return $this->orden_servicio_id;
  }

  /**
   * Retorna el id de la tabla servicio maquina
   * @version 1.0.0
   * @return integer
   */
  public function getServicioId() {
    return $this->servicio_id;
  }

  /**
   * Retorna el estado del registro
   * @version 1.0.0
   * @return boolean
   */
  public function getEstado() {
    return $this->estado;
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
   * Fija el id de la tabla orden servicio
   * @version 1.0.0
   * @param integer $orden_servicio_id
   */
  public function setOrdenServicioId($orden_servicio_id) {
    $this->orden_servicio_id = $orden_servicio_id;
  }

  /**
   * Fija el id de la tabla servicio maquina
   * @version 1.0.0
   * @param integer $servicio_id
   */
  public function setServicioId($servicio_id) {
    $this->servicio_id = $servicio_id;
  }

  /**
   * Fija el id de la tabla servicio maquina
   * @version 1.0.0
   * @param boolean $estado
   */
  public function setEstado($estado) {
    $this->estado = $estado;
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
