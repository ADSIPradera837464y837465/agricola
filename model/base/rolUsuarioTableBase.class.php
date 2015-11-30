<?php

/**
 * Description of bda_rolUsuario
 * @author WilmerAndresMartinez wilmerelmejor94@hotmail.com
 * @package
 * @subpackage model
 * @subpackage table
 * @version 1.0.0
 */
class rolUsuarioTableBase extends model {
 
   /**
   * url_Id de la tabla
   * @var integer
   */
  
  const url_id = 'url_Id';
  /**
   * usr_usuario_id de la tabla
   * @var integer
   */
  const usr_usuario_id ='usr_usuario_id';
  /**
   * rol_id de la tabla
   * @var integer
   */
  const rol_id = 'rol_id ';
  /**
   * url_create_at de la tabla
   * @var date_time
   */
  const url_created_at ='url_create_at';
  
  /**
   *configuracion del sistema
   * @var config
   */
  
  protected $config;
  /**
   *urlId de la tabla 
   * @var integer
   */
  
  private $urlId;
  /**
   *usrUsuarioId
   * @var integer
   */
  private $usrUsuarioId;
  /**
   *rolId de la tabla
   * @var integer
   */
  private $rolId;
  /**
   *urlCreateAt de la tabla
   * @var date_time
   */
  private $urlCreatedAt;
  
  /**
   * 
   * @param config $config
   * @param type $urlId
   * @param type $usrUsuarioId
   * @param type $rolId
   * @param type $urlCreatedAt
   */
 
  public function __construct( config $config =null, $urlId=null, $usrUsuarioId=null, $rolId=null, $urlCreatedAt=null) {
    $this->config = $config;
    $this->urlId = $urlId;
    $this->usrUsuarioId = $usrUsuarioId;
    $this->rolId = $rolId;
    $this->urlCreatedAt = $urlCreatedAt;
  }
  
  /**
   * 
   * @retorna la configuracion del sistema 
   * @version 1.0.0
   * @return config
   */

  public function getConfig() {
    return $this->config;
  }
  /**
   * Retorna el UrlID del registro
   * @version 1.0.0
   * @return integer
   */

  public function getUrlId() {
    return $this->urlId;
  }
  /**
   *Retorna el UsrUsuarioId del registro
   * @version 1.0.0
   * @return integer
   */

  public function getUsrUsuarioId() {
    return $this->usrUsuarioId;
  }
/**
   * Retorna el RolId del registro
   * @version 1.0.0
   * @return integer
   */
  public function getRolId() {
    return $this->rolId;
  }
/**
   * Retorna la fecha y la hora de creación del registro
   * @version 1.0.0
   * @return string
   */
  public function getUrlCreatedAt() {
    return $this->urlCreateAt;
  }
  
  /**
   * fija la configuracion del sistema
   * @version 1.0.0
   * @param config $config objeto con configuracion del sistema
   */

  public function setConfig($config) {
    $this->config = $config;
  }
  /**
   * Fija el UrlID para un registro del sistema
   * @version 1.0.0
   * @param integer $urlId ID de un registro
   */
  public function setUrlId($urlId) {
    $this->urlId = $urlId;
  }
/**
   * Fija el ID de UsrUsurario
   * @version 1.0.0
   * @param integer $usrUsuarioId
   */
  public function setUsrUsuarioId($usrUsuarioId) {
    $this->usrUsuarioId = $usrUsuarioId;
  }
  /**
   * Fija el ID de la RolId
   * @version 1.0.0
   * @param integer $rolId
   */

  public function setRolId($rolId) {
    $this->rolId = $rolId;
  }
/**
   * Fija la fecha y la hora de creación del registro
   * @version 1.0.0
   * @param string $urlCreatedAt Fecha y hora de creación
   */
  public function setUrlCreatedAt($urlCreatedAt) {
    $this->urlCreatedAt = $urlCreatedAt;
  }


}