<?php

namespace FStudio\model\base;

use FStudio\fsModel as model;
use FStudio\myConfig as config;

/**
 * Description of usuarioRolBaseTable
 *
 * @author nombre completo <su@correo.com>
 * @package FStudio
 * @subpackage model
 * @subpackage base
 * @version 1.0.0
 */
class usuarioRolBaseTable extends model {

  const ID = 'url_id';
  const USUARIO_ID = 'usr_id';
  const ROL_ID = 'rol_id';
  const CREATED_AT = 'url_created_at';
  const _SEQUENCE = 'bda_unidad_medida_unm_id_seq';
  const _TABLE = 'bda_usuario_rol';

  /**
   * Configuración del sistema
   * @var config
   */
  protected $config;
  private $id;
  private $usuario_id;
  private $rol_id;
  private $created_at;

  public function __construct(config $config, $id = null, $usuario_id = null, $rol_id = null, $created_at = null) {
    $this->config = $config;
    $this->id = $id;
    $this->usuario_id = $usuario_id;
    $this->rol_id = $rol_id;
    $this->created_at = $created_at;
  }

  public function getId() {
    return $this->id;
  }

  public function getUsuarioId() {
    return $this->usuario_id;
  }

  public function getRolId() {
    return $this->rol_id;
  }

  public function getCreatedAt() {
    return $this->created_at;
  }

  public function setId($id) {
    $this->id = $id;
  }

  public function setUsuarioId($usuario_id) {
    $this->usuario_id = $usuario_id;
  }

  public function setRolId($rol_id) {
    $this->rol_id = $rol_id;
  }

  public function setCreatedAt($created_at) {
    $this->created_at = $created_at;
  }

}
