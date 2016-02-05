<?php

namespace FStudio\model\base;

use FStudio\fsModel as model;
use FStudio\myConfig as config;

/**
 * Description of recordarMeBaseTable
 *
 * @author nombre completo <su@correo.com>
 * @package FStudio
 * @subpackage model
 * @subpackage base
 * @version 1.0.0
 */
class recordarMeBaseTable extends model {

  const ID = 'rcm_id';
  const USUARIO_ID = 'usuario_id';
  const IP_ADDRESS = 'rcm_ip_address';
  const IP_ADDRESS_LENGTH = 50;
  const HASH_COOKIE = 'rcm_hash_cookie';
  const HASH_COOKIE_LENGTH = 32;
  const CREATED_AT = 'rcm_created_at';
  const _SEQUENCE = 'bda_recordar_me_rcm_id_seq';
  const _TABLE = 'bda_recordar_me';

  /**
   * Configuración del sistema
   * @var config
   */
  protected $config;
  private $id;
  private $usuario_id;
  private $ip_address;
  private $hash_cookie;
  private $created_at;

  public function __construct(config $config, $id = null, $usuario_id = null, $ip_address = null, $hash_cookie = null, $created_at = null) {
    $this->config = $config;
    $this->id = $id;
    $this->usuario_id = $usuario_id;
    $this->ip_address = $ip_address;
    $this->hash_cookie = $hash_cookie;
    $this->created_at = $created_at;
  }

  public function getId() {
    return $this->id;
  }

  public function getUsuarioId() {
    return $this->usuario_id;
  }

  public function getIpAddress() {
    return $this->ip_address;
  }

  public function getHashCookie() {
    return $this->hash_cookie;
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

  public function setIpAddress($ip_address) {
    $this->ip_address = $ip_address;
  }

  public function setHashCookie($hash_cookie) {
    $this->hash_cookie = $hash_cookie;
  }

  public function setCreatedAt($created_at) {
    $this->created_at = $created_at;
  }

}
