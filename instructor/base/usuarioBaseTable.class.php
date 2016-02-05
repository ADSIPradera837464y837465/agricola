<?php

namespace FStudio\model\base;

use FStudio\fsModel as model;
use FStudio\myConfig as config;

/**
 * Description of usuarioBaseTable
 *
 * @author nombre completo <su@correo.com>
 * @package FStudio
 * @subpackage model
 * @subpackage base
 * @version 1.0.0
 */
class usuarioBaseTable extends model {

  const ID = 'usr_id';
  const USER = 'usr_user';
  const USER_LENGTH = 80;
  const PASSWORD = 'usr_password';
  const ACTIVED = 'usr_actived';
  const LAST_LOGIN_AT = 'usr_last_login_at';
  const CREATED_AT = 'usr_created_at';
  const UPDATED_AT = 'usr_updated_at';
  const DELETED_AT = 'usr_deleted_at';
  const _SEQUENCE = 'bda_usuario_usr_id_seq';
  const _TABLE = 'bda_usuario';

  /**
   * Configuración del sistema
   * @var config
   */
  protected $config;
  private $id;
  private $user;
  private $password;
  private $actived;
  private $last_login_at;
  private $created_at;
  private $updated_at;
  private $deleted_at;

  public function __construct(config $config, $id = null, $user = null, $password = null, $actived = null, $last_login_at = null, $created_at = null, $updated_at = null, $deleted_at = null) {
    $this->config = $config;
    $this->id = $id;
    $this->user = $user;
    $this->password = $password;
    $this->actived = $actived;
    $this->last_login_at = $last_login_at;
    $this->created_at = $created_at;
    $this->updated_at = $updated_at;
    $this->deleted_at = $deleted_at;
  }

  public function getId() {
    return $this->id;
  }

  public function getUser() {
    return $this->user;
  }

  public function getPassword() {
    return $this->password;
  }

  public function getActived() {
    return $this->actived;
  }

  public function getLastLoginAt() {
    return $this->last_login_at;
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

  public function setUser($user) {
    $this->user = $user;
  }

  public function setPassword($password) {
    $this->password = hash('md5', $password);
  }

  public function setActived($actived) {
    $this->actived = $actived;
  }

  public function setLastLoginAt($last_login_at) {
    $this->last_login_at = $last_login_at;
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
