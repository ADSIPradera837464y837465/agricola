<?php

namespace FStudio\model\base;

use FStudio\fsModel as model;
use FStudio\myConfig as config;

/**
 * Description of bda_rolUsuario
 * @author WilmerAndresMartinez wilmerelmejor94@hotmail.com
 * @package
 * @subpackage model
 * @subpackage base
 * @version 1.0.0
 */
class usuarioRolBaseTable extends model {
 
   /**
   * url_Id de la tabla
   * @var integer
   */
  
  const ID = 'url_id';
  /**
   * usr_usuario_id de la tabla
   * @var integer
   */
  const USUARIO_ID = 'usr_id';
  /**
   * rol_id de la tabla
   * @var integer
   */
  const ROL_ID = 'rol_id';
  /**
   * url_create_at de la tabla
   * @var date_time
   */
  const CREATED_AT = 'url_created_at';
  /**
   * nombre de la secuencia ID de la tabla
   */
  const _SEQUENCE = 'bda_unidad_medida_unm_id_seq';
  /**
   * bda_usuario de la tabla
   */
  const _TABLE = 'bda_usuario_rol';
  
  /**
   * Configuración del sistema
   * @var config
   */
  
  protected $config;
  /**
   *urlId de la tabla 
   * @var integer
   */
  
  private $id;
  /**
   *usrUsuarioId
   * @var integer
   */
  private $usuario_id;
  /*
   *rolId de la tabla
   * @var integer
   */
  private $rol_id;
  /*
   *urlCreateAt de la tabla
   * @var date_time
   */
  private $created_at;
  
  /*
   * 
   * @param config $config
   * @param type $urlId
   * @param type $usrUsuarioId
   * @param type $rolId
   * @param type $urlCreatedAt
   */
 
  public function __construct(config $config, $id = null, $usuario_id = null, $rol_id = null, $created_at = null) {
    $this->config = $config;
    $this->id = $id;
    $this->usuario_id = $usuario_id;
    $this->rol_id = $rol_id;
    $this->created_at = $created_at;
  }
  
  /*
   * 
   * @retorna la configuracion del sistema 
   * @version 1.0.0
   * @return config
   */

  public function getId() {
    return $this->id;
  }
  /*
   * Retorna el UrlID del registro
   * @version 1.0.0
   * @return integer
   */

  public function getUsuarioId() {
    return $this->usuario_id;
  }
  
/*
   * Retorna el RolId del registro
   * @version 1.0.0
   * @return integer
   */
  public function getRolId() {
    return $this->rol_id;
  }
/*
   * Retorna la fecha y la hora de creación del registro
   * @version 1.0.0
   * @return string
   */
  public function getCreatedAt() {
    return $this->created_at;
  }
  
  /*
   * Fija el UrlID para un registro del sistema
   * @version 1.0.0
   * @param integer $urlId ID de un registro
   */
  public function setId($id) {
    $this->id = $id;
  }

/*
   * Fija el ID de Usuario
   * @version 1.0.0
   * @param integer $usrUsuarioId
   */
  public function setUsuarioId($usuario_id) {
    $this->usuario_id = $usuario_id;
  }
  /*
   * Fija el ID de la RolId
   * @version 1.0.0
   * @param integer $rolId
   */

  public function setRolId($rol_id) {
    $this->rol_id = $rol_id;
  }
/*
   * Fija la fecha y la hora de creación del registro
   * @version 1.0.0
   * @param string $urlCreatedAt Fecha y hora de creación
   */
  public function setCreatedAt($created_at) {
    $this->created_at = $created_at;
  }

}