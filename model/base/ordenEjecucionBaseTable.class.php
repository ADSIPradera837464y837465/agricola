<?php

namespace FStudio\model\base;

use FStudio\fsModel as model;
use FStudio\myConfig as config;

/**
 * Description of bda_rolUsuario
 * 
 * @author Wilmer Andres Martinez <wilmerelmejor94@hotmail.com>
 * @package FStudio
 * @subpackage model
 * @subpackage base
 * @version 1.0.0
 */
class ordenEjecucionBaseTable extends model {

  /**
   * Id de la tabla
   * @var integer
   */
  const ore_id = 'ore_id';

  /**
   * tercero de la tabla
   * @var integer
   */
  const ter_id_elabora = 'ter_id_elabora';

  /**
   * oreden servicio de la tabla
   * @var integer
   */
  const ors_id = 'ors_id';

  /**
   * maquina de la tabla
   * @var integer
   */
  const maq_id = 'maq_id';

  /**
   * fecha de la tabla
   * @var date_time
   */
  const ore_fecha = 'ore_fecha';

  /**
   * observacion de la tabla
   */
  const ore_observacion = 'ore_observacion';

  /**
   * Longitud del campo de observacion
   */
  const ore_observacion_lenght = 1024;

  /**
   * Fecha y hora de creación del registro
   */
  const ore_created_at = 'ore_created_at';

  /**
   * Fecha y hora de la ultima actualización del registro
   */
  const ore_update_at = 'ore_update_at';

  /**
   * Nombre de la secuencia del ID de la tabla
   */
  const ore_deleted_at = 'ore_deleted_at';

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
   * ID de la tabla
   * @var integer
   */
  private $terIdElabora;

  /**
   * ID de la tabla
   * @var integer
   */
  private $orsId;

  /**
   * ID de la maq
   * @var integer
   */
  private $maqId;

  /**
   * registro de la fecha
   * @var integer
   */
  private $oreFecha;

  /**
   * registro de la observacion
   * @var integer
   */
  private $oreObservacion;

  /**
   * Fecha y hora de creación del registro
   * @var string
   */
  private $oreCreatedAt;

  /**
   * Fecha y hora de la ultima actualización del registro
   * @var string
   */
  private $oreUpdatedAt;

  /**
   * Fecha y hora para controlar el borrado lógico
   * @var string
   */
  private $oreDeletedAt;

  /**
   * Constructor de la clase ordenEjecucionBaseTable
   * @param config $config
   * @param type $id
   * @param type $terIdElabora
   * @param type $orsId
   * @param type $maqId
   * @param type $oreFecha
   * @param type $oreObservacion
   * @param type $oreCreatedAt
   * @param type $oreUpdatedAt
   * @param type $oreDeletedAt
   */
  public function __construct(config $config = null, $id = null, $terIdElabora = null, $orsId = null, $maqId = null, $oreFecha = null, $oreObservacion = null, $oreCreatedAt = null, $oreUpdatedAt = null, $oreDeletedAt = null) {
    $this->config = $config;
    $this->id = $id;
    $this->terIdElabora = $terIdElabora;
    $this->orsId = $orsId;
    $this->maqId = $maqId;
    $this->oreFecha = $oreFecha;
    $this->oreObservacion = $oreObservacion;
    $this->oreCreatedAt = $oreCreatedAt;
    $this->oreUpdatedAt = $oreUpdatedAt;
    $this->oreDeletedAt = $oreDeletedAt;
  }

  /**
   * Retorna el objeto config del sistema
   * @version 1.0.0
   * @return config
   */
  public function getConfig() {
    return $this->config;
  }

  /**
   * Retorna la id del registro
   * @version 1.0.0
   * @return string
   */
  public function getid() {
    return $this->id;
  }

  /**
   * Retorna la elaboración del registro
   * @version 1.0.0
   * @return string
   */
  public function getTerIdElabora() {
    return $this->terIdElabora;
  }

  /**
   * retorna la orden de servicio de la tabla
   * @param type integer $orsId
   */
  public function getOrsId() {
    return $this->orsId;
  }

  /**
   * retorna el tipo maquina de la tabla
   * @return integer $maqId
   */
  public function getMaqId() {
    return $this->maqId;
  }

  /**
   * retorna la orden de la fecha
   * @return date_time $oreFecha
   */
  public function getOreFecha() {
    return $this->oreFecha;
  }

  /**
   * Retorna la observacion del registro
   * @version 1.0.0
   * @return varchar $oreObservacion
   */
  public function getOreObservacion() {
    return $this->oreObservacion;
  }

  /**
   * Fija la fecha y la hora de creación del registro
   * @version 1.0.0
   * @param string $createdAt Fecha y hora de creación
   */
  public function getOreCreatedAt() {
    return $this->oreCreatedAt;
  }

  /**
   * Retorna la fecha y la hora de la última actualización del registro
   * @version 1.0.0
   * @return string
   */
  public function getOreUpdatedAt() {
    return $this->oreUpdatedAt;
  }

  /**
   * Retorna la fecha y la hora del borrado lógico del registro
   * @version 1.0.0
   * @return string
   */
  public function getOreDeletedAt() {
    return $this->oreDeletedAt;
  }

  /**
   * Fija el objeto de la configuración del sistema
   * @version 1.0.0
   * @param config $config Objeto de la configuración del sistema
   */
  public function setConfig($config) {
    $this->config = $config;
  }

  /**
   * Fija el ID para un registro del sistema
   * @version 1.0.0
   * @param integer $id ID de un registro
   */
  public function setid($id) {
    $this->id = $id;
  }

  /**
   * fija la elaboración del registro
   * @version 1.0.0
   * @return string
   */
  public function setTerIdElabora($terIdElabora) {
    $this->terIdElabora = $terIdElabora;
  }

  /**
   * fija la orden de servicio de la tabla
   * @param type $orsId
   */
  public function setOrsId($orsId) {
    $this->orsId = $orsId;
  }

  /**
   * Id de la maquina de la tabla
   * @var date_time
   */
  public function setMaqId($maqId) {
    $this->maqId = $maqId;
  }

  /**
   * fecha  de la tabla
   * @var date_time
   */
  public function setOreFecha($oreFecha) {
    $this->oreFecha = $oreFecha;
  }

  /**
   * fija la obsevacion de la tabla
   * @param type $oreObservacion
   */
  public function setOreObservacion($oreObservacion) {
    $this->oreObservacion = $oreObservacion;
  }

  /**
   * Fija la fecha y la hora de creación del registro
   * @version 1.0.0
   * @param string $oreCreatedAt Fecha y hora de creación
   */
  public function setOreCreatedAt($oreCreatedAt) {
    $this->oreCreatedAt = $oreCreatedAt;
  }

  /**
   * Fija la fecha y la hora de la última actualización del registro
   * @version 1.0.0
   * @param sting $oreUpdatedAt Fecha y hora de la última actualización del registro
   */
  public function setOreUpdatedAt($oreUpdatedAt) {
    $this->oreUpdatedAt = $oreUpdatedAt;
  }

  /**
   * Fija la fecha y la hora del borrado lógico
   * @version 1.0.0
   * @param string $oreDeletedAt Fecha y hora del borrado lógico
   */
  public function setOreDeletedAt($oreDeletedAt) {
    $this->oreDeletedAt = $oreDeletedAt;
  }

}
