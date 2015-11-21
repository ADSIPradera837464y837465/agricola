<?php

namespace FStudio\model\base;
use FStudio\fsModel as model;
use FStudio\myConfig as config;

/**
 * Description of bda_rolUsuario
 * @author WilmerAndresMartinez wilmerelmejor94@hotmail.com
 * @package
 * @subpackage model
 * @subpackage table
 * @version 1.0.0
 */
class rolUsuarioBaseTable extends model {
 
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
  const url_create_at ='url_create_at';
  
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
  private $urlCreateAt;
  
  /**
   * 
   * @param config $config
   * @param type $urlId
   * @param type $usrUsuarioId
   * @param type $rolId
   * @param type $urlCreateAt
   */
 
  public function __construct( config $config =null, $urlId=null, $usrUsuarioId=null, $rolId=null, $urlCreateAt=null) {
    $this->config = $config;
    $this->urlId = $urlId;
    $this->usrUsuarioId = $usrUsuarioId;
    $this->rolId = $rolId;
    $this->urlCreateAt = $urlCreateAt;
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
   * 
   * @retorna el getUrlId del registro
   */

  public function getUrlId() {
    return $this->urlId;
  }

  public function getUsrUsuarioId() {
    return $this->usrUsuarioId;
  }

  public function getRolId() {
    return $this->rolId;
  }

  public function getUrlCreateAt() {
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
   * fija el id para el registro en la tabla
   * @param integer $urlId
   */

  public function setUrlId($urlId) {
    $this->urlId = $urlId;
  }

  public function setUsrUsuarioId($usrUsuarioId) {
    $this->usrUsuarioId = $usrUsuarioId;
  }

  public function setRolId($rolId) {
    $this->rolId = $rolId;
  }

  public function setUrlCreateAt($urlCreateAt) {
    $this->urlCreateAt = $urlCreateAt;
  }


}