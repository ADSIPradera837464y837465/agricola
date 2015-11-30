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

   * hora de de inicio de la tabla turno
   */
  const Hora_Inicio = 'tur_hora_inicio';

  /**
   * Hora fin fe la tabla turno
   */
  const Hora_Fin = 'tur_hora_fin';

  /**

   * turno de la tabla estado
   */
  const ESTADO = 'tur_estado';

  /**

   * longitud de las observaciones
   */
  const TABLE = 'bda_Turno';

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
  private $tabla;

  /**
   * crea la tabla
   * @var time_stamp
   */
  private $createdAt;

  /**
   * actualiza la tabla
   * @var time_stamp
   */
  private $updatedAt;

  /**
   * elimina la tabla
   * @var time_stamp
   */
  private $deletedAt;

  /**
   * 
   * @param config $config
   * @param type $id
   * @param varchar $descripcion
   * @param time $hora_inicio
   * @param time $hora_fin
   * @param varchar $estado
   * @param type $tabla
   * @param time_stamp $createdAt
   * @param time_stamp $updatedAt
   * @param time_stamp $deletedAt
   */
  public function __construct(config $config, $id, varchar $descripcion, time $hora_inicio, time $hora_fin, varchar $estado, $tabla, time_stamp $createdAt, time_stamp $updatedAt, time_stamp $deletedAt) {
    $this->config = $config;
    $this->id = $id;
    $this->descripcion = $descripcion;
    $this->hora_inicio = $hora_inicio;
    $this->hora_fin = $hora_fin;
    $this->estado = $estado;
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

  /**
   * Retorna la hora-inicio del registro
   * version 1.0.o
   * @return time_date
   */
  public function getHora_inicio() {
    return $this->hora_inicio;
  }

  /**
   * Retorna la hora_fin del registro
   * version 1.0.o
   * @return time_date
   */
  public function getHora_fin() {
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
   * Retorna la tabla del registro
   * version 1.0.o
   * @return integer
   */
  public function getTabla() {
    return $this->tabla;
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
   * Fija el id para el registro en la tabla
   * @version 1.0.0
   * @param integer $id
   */
  public function setId($id) {
    $this->id = $id;
  }

/**
   * Fija la descripcion para el registro en la tabla
   * @version 1.0.0
   * @param varchar $descripcion
   */

  public function setDescripcion(varchar $descripcion) {
    $this->descripcion = $descripcion;
  }

  /**
   * Fija la Hora_inicio para el registro en la tabla
   * @version 1.0.0
   * @param date_time $Hora_inicio
   */
  public function setHora_inicio(time $hora_inicio) {
    $this->hora_inicio = $hora_inicio;
  }

  /**
   * Fija la Hora_fin para el registro en la tabla
   * @version 1.0.0
   * @param date_time $Hora_fin
   */
  public function setHora_fin(time $hora_fin) {
    $this->hora_fin = $hora_fin;
  }

  /**
   * Fija el estado para el registro en la tabla
   * @version 1.0.0
   * @param varchar $estado
   */
  public function setEstado(varchar $estado) {
    $this->estado = $estado;
  }

  /**
   * Fija el registro en la tabla
   * @version 1.0.0
   * @param integer $tabla
   */
  public function setTabla($tabla) {
    $this->tabla = $tabla;
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
