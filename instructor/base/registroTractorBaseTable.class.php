<?php

namespace FStudio\model\base;

use FStudio\fsModel as model;
use FStudio\myConfig as config;

/**
 * Description of registroTractorBaseTable
 *
 * @author nombre completo <su@correo.com>
 * @package FStudio
 * @subpackage model
 * @subpackage base
 * @version 1.0.0
 */
class registroTractorBaseTable extends model {

  const ITEM = 'rtr_item';
  const CONTROL_SALIDA_CANA = 'csc_id';
  const HORA_SALIDA = 'rtr_hora_salida';
  const CREATED_AT = 'rtr_created_at';
  const UPDATED_AT = 'rtr_updated_at';
  const DELETED_AT = 'rtr_deleted_at';
  const _SEQUENCE = 'bda_registro_tractor_rt_item_seq';
  const _TABLE = 'bda_registro_tractor';

  /**
   * Configuración del sistema
   * @var config
   */
  protected $config;
  private $item;
  private $control_salida_cana;
  private $hora_salida;
  private $created_at;
  private $updated_at;
  private $deleted_at;

  public function __construct(config $config, $item = null, $control_salida_cana = null, $hora_salida = null, $created_at = null, $updated_at = null, $deleted_at = null) {
    $this->config = $config;
    $this->item = $item;
    $this->control_salida_cana = $control_salida_cana;
    $this->hora_salida = $hora_salida;
    $this->created_at = $created_at;
    $this->updated_at = $updated_at;
    $this->deleted_at = $deleted_at;
  }

  public function getItem() {
    return $this->item;
  }

  public function getControlSalidaCana() {
    return $this->control_salida_cana;
  }

  public function getHoraSalida() {
    return $this->hora_salida;
  }

  public function getCreatedAt() {
    return $this->created_at;
  }

  public function getUpdatedAt() {
    return $this->updated_at;
  }

  public function getDeletedAt() {
    return $this->deleted_at;
  }

  public function setItem($item) {
    $this->item = $item;
  }

  public function setControlSalidaCana($control_salida_cana) {
    $this->control_salida_cana = $control_salida_cana;
  }

  public function setHoraSalida($hora_salida) {
    $this->hora_salida = $hora_salida;
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
