<?php

/**
 * Description of bda_usuario
 * @author Magda lucia Chaux martinez <lucia_chaux@hotmail.com>
 * @package 
 * @subpackage model
 * @subpackage base
 * @version 1.0.0
 */
class usuarioBaseTable extends model {

  /**
   * Id de la tabla
   *  @var string 
   */
  const ID = 'usr_id';

  /**
   * foranea de la tabla bda_usuario
   * @var 
   */
  const USUARIO = 'usr_user';

  /**
   * clave de ingreso del usuario
   */
  const PASSWORD = 'usr_password';

  /**
   * usuario activo e inactivo
   */
  const ACTIVITED = 'usr_actived';

  /**
   * fecha y hora del ultimo acceso del usuario
   */
  const LAST_LOGIN_AT = 'usr_last_login_at';

  /**
   * Date_Time
   */
  const CREATED_AT = 'usr_created_at';

  /**
   * Date_Time
   */
  const UPDATED_AT = 'updated_at';

  /**
   * Date_Time
   */
  const DELETED_AT = 'usr_deleted_at';

  /**
   *
   * configuracion del sistema
   * @var config
   */
  protected $config;

  /**
   * id de la base de datos
   * @var integer 
   */
  private $id;

  /**
   * tipo de usuario de ingresa al sistema
   * @var varchar
   */
  private $usuario;

  /**
   * seguridad del sistema
   * @var varchar
   */
  private $password;

  /**
   * fecha y hora de ingreso al usuario
   * @var varchar
   */
  private $activited;

  /**
   * Data_time
   * @var interger
   */
  private $createdAt;

  /**
   * Data_Time
   * @var integer
   */
  private $updatedAt;

  /*
   * Data_Time
   * var@ integer
   */
  private $deleted;

  /**
   * Eliminacion de los datos del sistema
   * @var varchar
   */
  private $usrDeletedAt;

  /**
   * constructor de la clase usuarioBaseTable
   * @param config $config
   * @param type $id
   * @param type $usuario
   * @param type $password
   * @param type $activited
   * @param type $createdAt
   * @param type $updatedAt
   * @param type $deleted
   * @param type $usrDeletedAt
   */
  public function __construct(config $config, $id = null, $usuario = null, $password = null, $activited = null, $createdAt = null, $updatedAt = null, $deleted = null, $usrDeletedAt = null) {
    $this->config = $config;
    $this->id = $id;
    $this->usuario = $usuario;
    $this->password = $password;
    $this->activited = $activited;
    $this->createdAt = $createdAt;
    $this->updatedAt = $updatedAt;
    $this->deleted = $deleted;
    $this->usrDeletedAt = $usrDeletedAt;
  }

  /**
   * retorna la configuracion del sistema
   * @return config
   */
  public function getConfig() {
    return $this->config;
  }

  public function getId() {
    return $this->id;
  }

  /**
   * Retorna el id del sistema
   * @return interger
   */
  public function getUsuario() {
    return $this->usuario;
  }

  /**
   * retorna numero
   * @return type
   */
  public function getPassword() {
    return $this->password;
  }

  /**
   * Retorna fecha y hora del usuario
   * @return interger
   */
  public function getActivited() {
    return $this->activited;
  }

  /**
   * Retorna fecha de creacion del usuario
   * @return integer
   */
  public function getCreatedAt() {
    return $this->createdAt;
  }

  /**
   * Retorna fecha de actualizacion de los datos del usuario
   * @return integer
   */
  public function getUpdatedAt() {
    return $this->updatedAt;
  }

  /**
   * Retorna fecha de la eliminacion de los datos del usuario
   * @return type
   */
  public function getDelected() {
    return $this->deleted;
  }

  /**
   * 
   * @return 
   */
  public function getUsrDeletedAt() {
    return $this->usrDeletedAt;
  }

  /**
   * fija la configuracion del sistema
   * @param type $config
   */
  public function setConfig($config) {
    $this->config = $config;
  }

  /**
   * fija el id del sistema
   * @param type $id
   */
  public function setId($id) {
    $this->id = $id;
  }

  /**
   * fija numero
   * @param type $usuario
   */
  public function setUsuario($usuario) {
    $this->usuario = $usuario;
  }

  /**
   * fija hora del usuario
   * @param type $password
   */
  public function setPassword($password) {
    $this->password = $password;
  }

  /**
   * fija fecha y  del usuario
   * @param type $activited
   */
  public function setActivited($activited) {
    $this->activited = $activited;
  }

  /**
   * fija fecha y creacion del usuario
   * @param type $createdAt
   */
  public function setCreatedAt($createdAt) {
    $this->createdAt = $createdAt;
  }

  /**
   * fija la fecha de actualizacion del usuario
   * @param type $updatedAt
   */
  public function setUpdatedAt($updatedAt) {
    $this->updatedAt = $updatedAt;
  }

  /**
   * fija la fecha de eliminacion de los datos del usuario
   * @param type $deleted
   */
  public function setDelected($deleted) {
    $this->deleted = $deleted;
  }

  /**
   * fija fecha y hora para controlar el borrado logico
   * @param type $usrDeletedAt
   */
  public function setUsrDeletedAt($usrDeletedAt) {
    $this->usrDeletedAt = $usrDeletedAt;
  }

}
