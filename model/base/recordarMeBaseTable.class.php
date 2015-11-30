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

  /**
   * fecha de creacion del registro
   */
  const CREATED_AT = 'rcm_created_at';

  /**
   * secuencia de la tabla para la llave foranea
   */
  const _SEQUENCE = '';

  /**
   * nombre de la tabla
   */
  const _TABLE = 'bda_recordar_me';

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
   * identificacion del usuario
   * @var integer
   */
  private $usuario_id;

  /**
   * direccion ip del usuario
   * @var string
   * 
   */
  private $ip_address;

  /**
   * valor hash del usuario
   * @var string
   */
  private $hash_cookie;

  /**
   * fecha de creacion del registro
   * @var date
   */
  private $created_at;

  /**
   * Constructor de la clase recordarMeBaseTable
   * @version 1.0.0
   * @param config $config
   * @param integer $id
   * @param integer $usuarioId
   * @param string $ipAddress
   * @param string $hashCookie
   * @param date_time $createdAt
   */
  public function __construct(config $config, $id = null, $usuarioId = null, $ipAddress = null, $hashCookie = null, $createdAt = null) {
    $this->config = $config;
    $this->id = $id;
    $this->usuarioId = $usuarioId;
    $this->ipAddress = $ipAddress;
    $this->hashCookie = $hashCookie;
    $this->createdAt = $createdAt;
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
   * @version 1.0.0
   * @return integer
   */
  public function getId() {
    return $this->id;
  }

  /**
   * retorna id del usuario
   * @version 1.0.0
   * @return integer
   */
  public function getUsuarioId() {
    return $this->usuario_id;
  }

  /**
   * retorna direccion ip
   ** @version 1.0.0 
   * @return string
   */
  public function getIpAddress() {
    return $this->ip_address;
  }

  /**
   * retorna el hash de usuario
   * @version 1.0.0 
   * @return string
   */
  public function getHashCookie() {
    return $this->hash_cookie;
  }

  /**
   * retorna la fecha de la creacion
   * @version 1.0.0 
   * @return date
   */
  public function getCreatedAt() {
    return $this->created_at;
  }

  /**
   * Fija la configuracion del sistema
   * version 1.0.0
   * config $config objeto con configuracion del sistema
   */
  public function setConfig(config $config) {
    $this->config = $config;
  }

  /**
   * Fija el id para el registro de la tabla
   *version 1.0.0 
   * @param integer $id
   */
  public function setId($id) {
    $this->id = $id;
  }

  /**
   * fijar el id del usuario
   * version 1.0.0
   * @param integer $usuario_id
   */
  public function setUsuarioId($usuario_id) {
    $this->usuario_id = $usuario_id;
  }

  /**
   * fijar la direccion ip del usuario
   * version 1.0.0
   * @param string $ip_address
   */
  public function setIpAddress($ip_address) {
    $this->ip_address = $ip_address;
  }

  /**
   * fijar el valor hash del usuario
   * version 1.0.0
   * @param string $hash_cookie
   */
  public function setHashCookie($hash_cookie) {
    $this->hash_cookie = $hash_cookie;
  }

  /**
   * fijar la fecha de creacion del registro
   * version 1.0.0
   * @param date_time $created_at
   */
  public function setCreatedAt($created_at) {
    $this->created_at = $created_at;
  }

}
