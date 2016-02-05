<?php

namespace FStudio\model\base;

use FStudio\fsModel as model;
use FStudio\myConfig as config;

/**
 * Description of usuarioBaseTable
 * 
 * @author Magda Lucia Chaux Martinez <lucia_chaux@hotmail.com>
 * @package FStudio
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
  const USER = 'usr_user';
  const USER_LENGTH = 80;

  /**
   * clave de ingreso del usuario
   */
  const PASSWORD = 'usr_password';

  /**
   * usuario activo e inactivo
   */
  const ACTIVED = 'usr_actived';

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
  const UPDATED_AT = 'usr_updated_at';

  /**
   * Date_Time
   */
  const DELETED_AT = 'usr_deleted_at';
  const _SEQUENCE = 'bda_usuario_usr_id_seq';
  const _TABLE = 'bda_usuario';

  /**
   * Configuración del sistema
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
  private $user;

  /**
   * seguridad del sistema
   * @var varchar
   */
  private $password;

  /**
   * fecha y hora de ingreso al usuario
   * @var varchar
   */
  private $actived;
  private $last_login_at;

  /**
   * Data_time
   * @var interger
   */
  private $created_at;

  /**
   * Data_Time
   * @var integer
   */
  private $updated_at;

  /*
   * Data_Time
   * var@ integer
   */
  private $deleted_at;

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

  /**
   * Retorna el id del sistema
   * @return interger
   */
  public function getUser() {
    return $this->user;
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
  public function getActived() {
    return $this->actived;
  }

  public function getLastLoginAt() {
    return $this->last_login_at;
  }

  public function getCreatedAt() {
    return $this->created_at;
  }

  /**
   * Retorna fecha de actualizacion de los datos del usuario
   * @return integer
   */
  public function getUpdatedAt() {
    return $this->updated_at;
  }

  /**
   * Retorna fecha de la eliminacion de los datos del usuario
   * @return type
   */
  public function getDeletedAt() {
    return $this->deleted_at;
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
  public function setUser($user) {
    $this->user = $user;
  }

  /**
   * fija hora del usuario
   * @param type $password
   */
  public function setPassword($password) {
    $this->password = hash('md5', $password);
  }

  /**
   * fija fecha y  del usuario
   * @param type $activited
   */
  public function setActived($actived) {
    $this->actived = $actived;
  }

  /**
   * fija fecha y creacion del usuario
   * @param type $createdAt
   */
  public function setLastLoginAt($last_login_at) {
    $this->last_login_at = $last_login_at;
  }

  /**
   * fija la fecha de actualizacion del usuario
   * @param type $updatedAt
   */
  public function setCreatedAt($created_at) {
    $this->created_at = $created_at;
  }

  /**
   * fija la fecha de eliminacion de los datos del usuario
   * @param type $deleted
   */
  public function setUpdatedAt($updated_at) {
    $this->updated_at = $updated_at;
  }

  /**
   * fija fecha y hora para controlar el borrado logico
   * @param type $usrDeletedAt
   */
  public function setDeletedAt($deleted_at) {
    $this->deleted_at = $deleted_at;
  }

}
