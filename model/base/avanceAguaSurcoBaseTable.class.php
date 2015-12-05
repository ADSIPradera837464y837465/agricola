<?php

namespace FStudio\model\base;

use FStudio\fsModel as model;
use FStudio\myConfig as config;

/**
 * Description of avanceAguaSurcoBaseTable
 *
 * @author Julian Andrés Lasso Figueroa <ingeniero.julianlasso@gmail.com>
 * @package FStudio
 * @subpackage model
 * @subpackage base
 * @version 1.0.0
 */
class avanceAguaSurcoBaseTable extends model {

  const ID = 'aas_item';
  const CONTROL_ADMINISTRATIVO_RIEGO_ID = 'car_num_documento';
  const SURCO_ID = 'aas_surco_id';
  const CREATED_AT = 'aas_created_at';
  const UPDATED_AT = 'aas_updated_at';
  const DELETED_AT = 'aas_deleted_at';
  const _SEQUENCE = 'bda_avance_agua_surco_aas_item_seq';
  const _TABLE = 'bda_avance_agua_surco';

  /**
   * Configuración del sistema
   * @var config
   */
  protected $config;
  private $id;
  private $control_administrativo_riego_id;
  private $surco_id;
  private $created_at;
  private $updated_at;
  private $deleted_at;

  public function __construct(config $config, $id = null, $control_administrativo_riego_id = null, $surco_id = null, $created_at = null, $updated_at = null, $deleted_at = null) {
    $this->config = $config;
    $this->id = $id;
    $this->control_administrativo_riego_id = $control_administrativo_riego_id;
    $this->surco_id = $surco_id;
    $this->created_at = $created_at;
    $this->updated_at = $updated_at;
    $this->deleted_at = $deleted_at;
  }

  public function getId() {
    return $this->id;
  }

  public function getControlAdministrativoRiegoId() {
    return $this->control_administrativo_riego_id;
  }

  public function getSurcoId() {
    return $this->surco_id;
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

  public function setId($id) {
    $this->id = $id;
  }

  public function setControlAdministrativoRiegoId($control_administrativo_riego_id) {
    $this->control_administrativo_riego_id = $control_administrativo_riego_id;
  }

  public function setSurcoId($surco_id) {
    $this->surco_id = $surco_id;
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
