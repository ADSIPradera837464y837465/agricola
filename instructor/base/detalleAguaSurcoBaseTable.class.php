<?php

namespace FStudio\model\base;

use FStudio\fsModel as model;
use FStudio\myConfig as config;

/**
 * Description of detalleAguaSurcoBaseTable
 *
 * @author nombre completo <su@correo.com>
 * @package FStudio
 * @subpackage model
 * @subpackage base
 * @version 1.0.0
 */
class detalleAguaSurcoBaseTable extends model {

  const ID = 'deaas_id';
  const ITEM = 'deaas_item';
  const ITEM_LENGTH = 80;
  const CANTIDAD_SURCO = 'deaas_cantidad_surco';
  const CONTROL_ADMINISTRATIVO_RIEGO_ID = 'fore_num_documento';
  const CREATED_AT = 'deaas_created_at';
  const UPDATED_AT = 'deaas_updated_at';
  const DELETED_AT = 'deaas_deleted_at';
  const _TABLE = 'bda_detalle_agua_surco';

  /**
   * Configuración del sistema
   * @var config
   */
  protected $config;
  private $id;
  private $item;
  private $cantidad_surco;
  private $control_administrativo_riego_id;
  private $created_at;
  private $updated_at;
  private $deleted_at;

  public function __construct(config $config, $id = null, $item = null, $cantidad_surco = null, $control_administrativo_riego_id = null, $created_at = null, $updated_at = null, $deleted_at = null) {
    $this->config = $config;
    $this->id = $id;
    $this->item = $item;
    $this->cantidad_surco = $cantidad_surco;
    $this->control_administrativo_riego_id = $control_administrativo_riego_id;
    $this->created_at = $created_at;
    $this->updated_at = $updated_at;
    $this->deleted_at = $deleted_at;
  }

  public function getId() {
    return $this->id;
  }

  public function getItem() {
    return $this->item;
  }

  public function getCantidadSurco() {
    return $this->cantidad_surco;
  }

  public function getControlAdministrativoRiegoId() {
    return $this->control_administrativo_riego_id;
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

  public function setItem($item) {
    $this->item = $item;
  }

  public function setCantidadSurco($cantidad_surco) {
    $this->cantidad_surco = $cantidad_surco;
  }

  public function setControlAdministrativoRiegoId($control_administrativo_riego_id) {
    $this->control_administrativo_riego_id = $control_administrativo_riego_id;
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
