<?php

namespace FStudio\model\base;

use FStudio\fsModel as model;
use FStudio\myConfig as config;


/**
 * Description of registroTractorBaseTable
 * @author yuri adriana hurtado rojas <yurodri.1996@gmail.com>
 * @package 
 * @subpackage model
 * @subpackage base
 * @version 1.0.0
 */
class registroTractorTableBase extends model {
  

  /**
   * Item de la tabla
   */
  const ITEM = 'rt_item';

  /**
   * Foranea de la tabla usuario
   */
  const ID = 'csc_id';

  /**

   * hora de salida de la tabla registroTractor
   */
  const Hora_Salida = 'rt_hora_salida';

  /**
   * Longitud del campo acción
   */
  const TRACTOR_LENGTH = 80;

  /**

   * observaciones de la tabla registroTractor
   */
  const OBSERVACION = 'rt_observacion';

  /**

   * longitud de las observaciones
   */
  const OBSERVACION_LENGTH = 'rt_observacion';
  const TABLE = 'bda_registroTractor';

  /**
   * Configuración del sistema
   * @var config
   */
  protected $config;

  /**
   * ITEM de la tabla
   * @version 1.0.0
   * @var integer
   */
  private $item;

  /**
   * ID de la tabla
   * @version 1.0.0
   * @var integer
   */
  private $id;

  /**
   * rt_hora_salida de la tabla
   * @version 1.0.0
   * @var time
   */
  private $horaSalida;

  /**
   * rt_tractor de la tabla
   * @version 1.0.0
   * @var varchar
   */
  private $tractor;

  /**
   * rt_observacion de la tabla
   * @version 1.0.0
   * @var string
   */
  private $observacion;

  /**
   * crea la tabla
   * @version 1.0.0
   * @var time_stamp
   */
  private $createdAt;

  /**
   * actualiza la tabla
   * @version 1.0.0
   * @var time_stamp
   */
  private $updatedAt;

  /**
   * elimina la tabla
   * @version 1.0.0
   * @var time_stamp
   */
  private $deletedAt;

  /**
   * Constructor de la clase registroTractorBaseTable
   * @param config $config
   * @param integer $item
   * @param integer $id
   * @param time $horaSalida
   * @param varchar $tractor
   * @param text   $observacion
   * @param string $tabla
   * @param stamp_time $createdAt
   * @param stamp_time $updatedAt
   * @param stamp_time $deletedAt
   */
  public function __construct(config $config, $item = null, $id = null, $horaSalida = null, $tractor = null, $tabla = null, $observacion = null, $createdAt = null, $updatedAt = null, $deletedAt = null) {
    $this->config = $config;
    $this->item = $item;
    $this->id = $id;
    $this->horaSalida = $horaSalida;
    $this->tractor = $tractor;
    $this->observacion = $observacion;
    $this->tabla = $tabla;
    $this->createdAt = $createdAt;
    $this->updatedAt = $updatedAt;
    $this->deletedAt = $deletedAt;
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
   * Retorna el item del sistema
   * @version 1.0.0
   * @return integer
   */
  public function getItem() {
    return $this->item;
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
   * Retorna la hora_salida del sistema
   * @version 1.0.0
   * @return time
   */
  public function gethoraSalida() {
    return $this->horaSalida;
  }

  /**
   * Retorna el el tractor del sistema
   * @version 1.0.0
   * @return varchar
   */
  public function gettractor() {
    return $this->tractor;
  }

  /**
   * Retorna la  longitud de las observacion
   * @version 1.0.0 
   * @return text
   */
  public function getobservacion() {
    return $this->observacion;
  }

  /**
   * Retorna los datos creados en la tabla
   * @version 1.0.0
   * @return time_stamp
   */
  public function getCreatedAt() {
    return $this->createdAt;
  }

  /**
   * Retorna las actualizaciones que se hayan hecho en la tabla
   * @version 1.0.0
   * @return time_stamp
   */
  public function getUpdatedAt() {
    return $this->updatedAt;
  }

  /**
   * Retorna los datos eliminados de la tabla
   * @version 1.0.0
   * @return time_stamp
   */
  public function getDeletedAt() {
    return $this->deletedAt;
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
   * Fija el item para el registro en la tabla
   * version 1.0.0
   * @param integer $item
   */
  public function setItem($item) {
    $this->item = $item;
  }

  /**
   * Fija el id para el registro en la tabla
   * @version 1.o.o
   * @param integer $id
   */
  public function setId($id) {
    $this->id = $id;
  }

  /**
   * Fija la hora_salida para el registro en la tabla
   * @version 1.0.0
   * @param time $hora_salida
   */
  public function sethoraSalida(time $horaSalida) {
    $this->horaSalida = $horaSalida;
  }

  /**
   * Fija el tractor para el registro en la tabla
   * @version 1.0.0
   * @param varchar $tractor
   */
  public function setractor(varchar $tractor) {
    $this->tractor = $tractor;
  }

  /**
   * Fija la observacion para el registro en la tabla
   * @version 1.0.0
   * @param text $observacion
   */
  public function setobservacion($observacion) {
    $this->observacion = $observacion;
  }

  /**
   * Fija los datos creados en la tabla
   * @version 1.0.0
   * @return time_stamp
   */
  public function setCreatedAt(time_stamp $createdAt) {
    $this->createdAt = $createdAt;
  }

  /**
   * Fija las actualizaciones que se hayan hecho en la tabla
   * @version 1.0.0
   * @return time_stamp
   */
  public function setUpdatedAt(time_stamp $updatedAt) {
    $this->updatedAt = $updatedAt;
  }

  /**
   * Fijalos datos eliminados de la tabla
   * @version 1.0.0
   * @return time_stamp
   */
  public function setDeletedAt(time_stamp $deletedAt) {
    $this->deletedAt = $deletedAt;
  }

}
