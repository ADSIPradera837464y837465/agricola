<?php

namespace FStudio\model\base;

use FStudio\fsModel as model;
use FStudio\myConfig as config;

/**
 * Description of turnoBaseTable
 * 
 * @author Yuri Adriana Hurtado Rojas <yurodri.1996@gmail.com.com>
 * @package FStudio
 * @subpackage model
 * @subpackage base
 * @version 1.0.0
 */
class turnoBaseTable extends model {

  /**
   * ID de la tabla
   */
  const ID = 'tur_id';

  /**
   * descripcion de la tabla turno
   */
  const DESCRIPCION = 'tur_descripcion';

  /**
   * descripcion de loggitud de la tabla turno
   */
  const DESCRIPCION_LENGTH = 80;

  /**

   * hora de de inicio de la tabla turno
   */
  const HORA_INICIO = 'tur_hora_inicio';

  /**
   * Hora fin fe la tabla turno
   */
  const HORA_FIN = 'tur_hora_fin';

  /**

   * turno de la tabla estado
   */
  const ESTADO = 'tur_estado';

  /**

   * estado de longitud de la tabla turno
   */
  const ESTADO_LENGTH = 80;

  /**
   * crea los datos de la  tabla turno
   */
  const CREATED_AT = 'tur_created_at';

  /**
   * actualiza los datos de la tabla turno
   */
  const UPDATED_AT = 'tur_updated_at';

  /**
   * elimina los datos dela tabla turno
   */
  const DELETED_AT = 'tur_deleted_at';

  /**
   * Secuencia de la identificacion de la tabla
   */
  const _SEQUENCE = 'bda_turno_tur_id_seq';

  /**
   * nombre de la tabla
   */
  const _TABLE = 'bda_turno';

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
   * Descripcion de la tabla
   * @var varchar
   */
  private $descripcion;

  /**
   * hora inicio de la tabla
   * @var time
   */
  private $hora_inicio;

  /**
   * hora fin de la tabla
   * @var time
   */
  private $hora_fin;

  /**
   * estado de la tabla
   * @var varchar
   */
  private $estado;

  /**
   * crea la tabla
   * @var time_stamp
   */
  private $created_at;

  /**
   * actualiza la tabla
   * @var time_stamp
   */
  private $updated_at;

  /**
   * elimina la tabla
   * @var time_stamp
   */
  private $deleted_at;

  public function __construct(config $config, $id = null, $descripcion = null, $hora_inicio = null, $hora_fin = null, $estado = null, $created_at = null, $updated_at = null, $deleted_at = null) {
    $this->config = $config;
    $this->id = $id;
    $this->descripcion = $descripcion;
    $this->hora_inicio = $hora_inicio;
    $this->hora_fin = $hora_fin;
    $this->estado = $estado;
    $this->created_at = $created_at;
    $this->updated_at = $updated_at;
    $this->deleted_at = $deleted_at;
  }

  /**
   * Retorna el id del registro
   * version 1.0.o
   * @return integer
   */
  public function getId() {
    return $this->id;
  }

  /**
   * Retorna la descripcion del registro
   * version 1.0.o
   * @return time_date
   */
  public function getDescripcion() {
    return $this->descripcion;
  }

  public function getHoraInicio() {
    return $this->hora_inicio;
  }

  public function getHoraFin() {
    return $this->hora_fin;
  }

  /**
   * Retorna el estado del registro
   * version 1.0.o
   * @return varchar
   */
  public function getEstado() {
    return $this->estado;
  }

  /**
   * Retorna los datos creados en la tabla
   * @version 1.0.0
   * @return time_stamp
   */
  public function getCreatedAt() {
    return $this->created_at;
  }

  /**
   * Retorna las actualizaciones que se hayan hecho en la tabla
   * @version 1.0.0
   * @return time_stamp
   */
  public function getUpdatedAt() {
    return $this->updated_at;
  }

  /**
   * Retorna los datos eliminados de la tabla
   * @version 1.0.0
   * @return time_stamp
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

  public function setDescripcion($descripcion) {
    $this->descripcion = $descripcion;
  }

  public function setHoraInicio($hora_inicio) {
    $this->hora_inicio = $hora_inicio;
  }

  public function setHoraFin($hora_fin) {
    $this->hora_fin = $hora_fin;
  }

  public function setEstado($estado) {
    $this->estado = $estado;
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
