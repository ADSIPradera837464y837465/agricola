<?php

namespace FStudio\model\base;

use FStudio\fsModel as model;
use FStudio\myConfig as config;

/**
 * Description of registroTractorBaseTable
 * 
 * @author Yuri Adriana Hurtado Rojas <yurodri.1996@gmail.com>
 * @package FStudio
 * @subpackage model
 * @subpackage base
 * @version 1.0.0
 */
class registroTractorBaseTable extends model {

  /**
   * Id de la tabla
   */
  const ID = 'rtr_item';

  /**
   * Foranea de la tabla controol_salida_de_cana
   */
  const ID = 'csc_id';

  /**
   * Foranea de la tabla controol_salida_de_cana
   */
  const CONTROL_SALIDA_CANA = 'csc_id';

  /**
   * hora de salida de la tabla registroTractor
   */
  const HORA_SALIDA = 'rtr_hora_salida';

  /**

   * fecha de creacion del  registroTractor
   */
  const CREATED_AT = 'rtr_created_at';

  /**
   * fecha de actualizacion del  registroTractor
   */
  const UPDATED_AT = 'rtr_updated_at';

  /**

   * fecha de eliminacion del registroTractor
   */
  const DELETED_AT = 'rtr_deleted_at';

  /**

   * Secuencia de la identificacion de la tabla
   */
  const _SEQUENCE = 'bda_registro_tractor_rt_item_seq';

  /**

   * Nombre de la tabla
   */
  const _TABLE = 'bda_registro_tractor';

  /**
   * Configuración del sistema
   * @var config
   */
  protected $config;

  /**
   * ID de la tabla
   * @version 1.0.0
   * @var integer
   */
  private $id;

  /**
   * control_salida_cana de la tabla
   * @version 1.0.0
   * @var time
   */
  private $control_salida_cana;

  /**
   * rt_hora_salida de la tabla
   * @version 1.0.0
   * @var time
   */
  private $hora_salida;

  /**
   * crea la tabla
   * @version 1.0.0
   * @var time_stamp
   */
  private $created_at;

  /**
   * actualiza la tabla
   * @version 1.0.0
   * @var time_stamp
   */
  private $updated_at;

  /**
   * elimina la tabla
   * @version 1.0.0
   * @var time_stamp
   */
  private $deleted_at;

  /**
   *
   * @param config $config
   * @param type $id
   * @param type $control_salida_cana
   * @param type $hora_salida
   * @param type $created_at
   * @param type $updated_at
   * @param type $deleted_at
   */
  public function __construct(config $config, $id = null, $control_salida_cana = null, $hora_salida = null, $created_at = null, $updated_at = null, $deleted_at = null) {
    $this->config = $config;
    $this->id = $id;
    $this->control_salida_cana = $control_salida_cana;
    $this->hora_salida = $hora_salida;
    $this->created_at = $created_at;
    $this->updated_at = $updated_at;
    $this->deleted_at = $deleted_at;
  }

  /**
   * Retorna el id del sistema
   * @version 1.0.0
   * @return integer
   */
  public function getId() {
    return $this->id;
  }

  /**
   * Retorna el control_salida_cana del sistema
   * @version 1.0.0
   * @return time
   */
  public function getControlSalidaCana() {
    return $this->control_salida_cana;
  }

  /**
   * Retorna la hora_salida del sistema
   * @version 1.0.0
   * @return varchar
   */
  public function getHoraSalida() {
    return $this->hora_salida;
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
   * @version 1.o.o
   * @param integer $id
   */
  public function setId($id) {
    $this->id = $id;
  }

  /**
   * Fija el control_ salida_cana para el registro en la tabla
   * @version 1.0.0
   * @param time $control_salida_cana
   */
  public function setControlSalidaCana($control_salida_cana) {
    $this->control_salida_cana = $control_salida_cana;
  }

  /**
   * Fija la hora_salida para el registro en la tabla
   * @version 1.0.0
   * @param varchar $hora_salida
   */
  public function setHoraSalida($hora_salida) {
    $this->hora_salida = $hora_salida;
  }

  /**
   * Fija los datos creados en la tabla
   * @version 1.0.0
   * @return time_stamp
   */
  public function setCreatedAt($created_at) {
    $this->created_at = $created_at;
  }

  /**
   * Fija las actualizaciones que se hayan hecho en la tabla
   * @version 1.0.0
   * @return time_stamp
   */
  public function setUpdatedAt($updated_at) {
    $this->updated_at = $updated_at;
  }

  /**
   * Fijalos datos eliminados de la tabla
   * @version 1.0.0
   * @return time_stamp
   */
  public function setDeletedAt($deleted_at) {
    $this->deleted_at = $deleted_at;
  }

}
