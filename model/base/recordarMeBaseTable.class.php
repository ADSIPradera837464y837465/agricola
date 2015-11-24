<?php

namespace FStudio\model\base;

use FStudio\fsModel as model;
use FStudio\myConfig as config;

/**
 * clase base para la tabla recordarMe
 * @author maribel zamora <mazagi86@hotmail.com>
 * @package fStudio
 * @subpackage model
 * @subpackage base
 * @version 1.0.0
 */
class recordarMeBaseTable extends model {

  /**
   * ID de la tabla
   */
  const ID = 'rcm_id';

  /**
   * identificacion del usuario
   */
  const USUARIO_ID = 'usuario_id';

  /**
   * direccion ip del usuario
   */
  const IP_ADDRESS = 'rcm_ip_address';

  /**
   * longitud de direccion ip del usuario
   */
  const IP_ADDRESS_LENGTH = 50;

  /**
   * el valor hash del usuario
   */
  const HASH_COOKIE = 'rcm_hash_cookie';

  /**
   * longitud del valor hash del usuario
   */
  const HASH_COOKIE_LENGTH = 32;
  const CREATED_AT = 'rcm_created_at';
  const _SEQUENCE = 'recordar_me_id_seq';

  /**
   * nombre de la tabla
   */
  const _TABLE = 'recordar_me';

  /**
   *
   * @var integer
   */
  private $id;

  /**
   *
   * @var integer
   */
  private $usuario_id;

  /**
   *
   * @var varchar
   */
  private $ip_address;

  /**
   *
   * @var varchar
   */
  private $hash_cookie;

  /**
   *
   * @var date
   */
  private $created_at;

  /**
   * Configuración del sistema
   * @var config
   */
  protected $config;

  function __construct(config $config, $id = null, $usuario_id = null, $ip_address = null, $hash_cookie = null, $created_at = null) {
    $this->config = $config;
    $this->id = $id;
    $this->usuarioId = $usuario_id;
    $this->ipAddress = $ip_address;
    $this->hashCookie = $hash_cookie;
    $this->createdAt = $created_at;
  }

  /**
   * retorna la configuracion del sistema
   * @version 1.0.0
   * @return config
   */
  public function getConfig() {
    return $this->config;
  }

  /**
   * retorna el id del registro
   * @return integer
   */
  public function getId() {
    return $this->id;
  }

  /**
   * retorna id del usuario
   * @return integer
   */
  public function getUsuarioId() {
    return $this->usuario_id;
  }

  /**
   * retorna direccion ip
   * @return varchar
   */
  public function getIpAddress() {
    return $this->ip_address;
  }

  /**
   * retorna el hash de usuario
   * @varchar
   */
  public function getHashCookie() {
    return $this->hash_cookie;
  }

  /**
   * retorna la fecha de la creacion
   * @return date
   */
  public function getCreatedAt() {
    return $this->created_at;
  }

  /**
   * Fija la configuracion del sistema
   * version 1.0.0
   * config $config configuracion del sistema
   */
  public function setConfig(config $config) {
    $this->config = $config;
  }

  /**
   * Fija el id para el registro de la tabla
   * @param integer $id
   */
  public function setId($id) {
    $this->id = $id;
  }

  /**
   * fijar el id del usuario
   * @param integer $usuario_id
   */
  public function setUsuarioId($usuario_id) {
    $this->usuario_id = $usuario_id;
  }

  /**
   * fijar la direccion ip del usuario
   * @param varchar $ip_address
   */
  public function setIpAddress($ip_address) {
    $this->ip_address = $ip_address;
  }

  /**
   * fijar el valor hash del usuario
   * @param varchar $hash_cookie
   */
  public function setHashCookie($hash_cookie) {
    $this->hash_cookie = $hash_cookie;
  }

  /**
   * 
   * @param date_time $created_at
   */
  public function setCreatedAt($created_at) {
    $this->created_at = $created_at;
  }

}
