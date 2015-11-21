<?php

namespace FStudio\model\base;

use FStudio\fsModel as model;
use FStudio\myConfig as config;

/**
 * Description of datoUsuarioBaseTable
 * @author Emanuel Castillo Mosquera <corcel125@outlook.com>
 * @package 
 * @subpackage model
 * @subpackage base
 * @version 1.0.0
 */
class datoUsuarioBaseTable extends model {

  /**
   * Id de la tabla
   * @var integer 
   */
  const ID = 'dus_id';

  /**
   * Foranea de la tabla usuario
   */

  /**
   * Id del usuario
   * @var varchar 
   */
  const USUARIO_ID = 'usr_id';

  /**
   * Numero del documento del usuario
   * @var string 
   */
  const CEDULA = 'dus_cedula';

  /**
   * Nombre del usuario
   * @var string 
   */
  const NOMBRE = 'dus_nombre';

  /**
   * Apellido del usuario
   * @var varchar 
   */
  const APELLIDO = 'dus_apellidos';

  /**
   * Numero del celular movil del usuario
   * @var varchar 
   */
  const MOVIL = 'dus_movil';

  /**
   * Direccion E-mail del usuario
   * @var string 
   */
  const CORREO = 'dus_correo';

  /**
   * 
   */
  const IMAGEN = 'dus_imagen';

  /**
   * Genero del usuario
   * @var string 
   */
  const SEXO = 'dus_sexo';

  /**
   * Date_time
   */
  const CREATE_DAT = 'dus_create_at';

  /**
   * Date_time
   */
  const UPDATED_AT = 'updated_at';

  /**
   * Date_time
   */
  const DELETED_AT = 'dus_deleted_at';

  /**
   * Configuracion del sistema
   * @var config 
   */
  protected $config;

  /**
   * Id del usuario en la base de datos
   * @var type 
   */
  private $id;

  /**
   * Tipo del usuario que ingresa en el sistema
   * @var integer 
   */
  private $usuario;

  /**
   * Numero de documento del usuario
   * @var varchar 
   */
  private $cedula;

  /**
   * nombre real del usuario
   * @var varchar 
   */
  private $nombre;

  /**
   * Apellido real del usuario
   * @var varchar 
   */
  private $apellido;

  /**
   * numero del telefono movil del usuario
   * @var varchar 
   */
  private $movil;

  /**
   * Dirrecion del E-mail del usuario
   * @var varchar 
   */
  private $correo;

  /**
   *
   * @var type 
   */
  private $imagen;

  /**
   * Genero del Usuario
   * @var varchar 
   */
  private $sexo;

  /**
   * Fecha de creacion del usuario en el sistema 
   * Data_time 
   */
  private $createdAt;

  /**
   * Fecha de actualisacion de los datos del usuario en el sistema
   * @var Data_time 
   */
  private $updatedAt;

  /**
   * Fecha de eliminacion de los datos del usuario en el sistema
   * @var type 
   */
  private $deletedAt;

  /**
   * Constructor de la clase datoUsuarioBaseTable
   * @param config $config
   * @param type $id
   * @param type $usuario
   * @param type $cedula
   * @param type $nombre
   * @param type $apellido
   * @param type $movil
   * @param type $correo
   * @param type $imagen
   * @param type $sexo
   * @param type $createdAt
   * @param type $updatedAt
   * @param type $deletedAt
   */
  public function __construct(config $config, $id = null, $usuario = null, $cedula = null, $nombre = null, $apellido = null, $movil = null, $correo = null, $imagen = null, $sexo = null, $createdAt = null, $updatedAt = null, $deletedAt = null) {
    $this->config = $config;
    $this->id = $id;
    $this->usuario = $usuario;
    $this->cedula = $cedula;
    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->movil = $movil;
    $this->correo = $correo;
    $this->imagen = $imagen;
    $this->sexo = $sexo;
    $this->createdAt = $createdAt;
    $this->updatedAt = $updatedAt;
    $this->deletedAt = $deletedAt;
  }

  /**
   * Retorna la configuracion del sistema
   * @return Config
   */
  public function getConfig() {
    return $this->config;
  }

  /**
   * Retorna el Numero Id de la tabla bda_dato_usuario
   * @return Integer
   */
  public function getId() {
    return $this->id;
  }

  /**
   * Retorna Id del usuario
   * @return Integer
   */
  public function getUsuario() {
    return $this->usuario;
  }

  /**
   * Retorna el Numero de cedula
   * @return Integer
   */
  public function getCedula() {
    return $this->cedula;
  }

  /**
   * Retorna nombre real del usuario
   * @return varchar
   */
  public function getNombre() {
    return $this->nombre;
  }

  /**
   * Retorna Apellido del usuario
   * @return varchar
   */
  public function getApellido() {
    return $this->apellido;
  }

  /**
   * Retorna el numero del Numero cel de usuario
   * @return Varchar
   */
  public function getMovil() {
    return $this->movil;
  }

  /**
   * Retorna la direccion del E_mail del usuario
   * @return Varchar
   */
  public function getCorreo() {
    return $this->correo;
  }

  /**
   * 
   * @return type
   */
  public function getImagen() {
    return $this->imagen;
  }

  /**
   * Retorna el genero del usuario
   * @return varchar
   */
  public function getSexo() {
    return $this->sexo;
  }

  /**
   * Retorna la fecha de creacion del registro del usuario
   * @return type
   */
  public function getCreatedAt() {
    return $this->createdAt;
  }

  /**
   * retorna fecha de actualizacion de los datos del usuario
   * @return varchar
   */
  public function getUpdatedAt() {
    return $this->updatedAt;
  }

  /**
   * Retorna fecha de eliminacion de los datos del usuario del sistema
   * @return type
   */
  public function getDeletedAt() {
    return $this->deletedAt;
  }

  /**
   * Fija la configuracion del sistema
   * @param type $config
   */
  public function setConfig($config) {
    $this->config = $config;
  }

  /**
   * Fija id de la tabla bda_dato_usuario
   * @param type $id
   */
  public function setId($id) {
    $this->id = $id;
  }

  /**
   * Fija en Id el id del usuario
   * @param type $usuario
   */
  public function setUsuario($usuario) {
    $this->usuario = $usuario;
  }

  /**
   * fija el numero de cedula del usuario
   * @param type $cedula
   */
  public function setCedula($cedula) {
    $this->cedula = $cedula;
  }

  /**
   * Fija el nombre del usuario
   * @param type $nombre
   */
  public function setNombre($nombre) {
    $this->nombre = $nombre;
  }

  /**
   * Fija el apellido del usuario
   * @param type $apellido
   */
  public function setApellido($apellido) {
    $this->apellido = $apellido;
  }

  /**
   * Fija el numero del telefono movil del usuario
   * @param type $movil
   */
  public function setMovil($movil) {
    $this->movil = $movil;
  }

  /**
   * Fija el la direccion E-mail del usuario
   * @param type $correo
   */
  public function setCorreo($correo) {
    $this->correo = $correo;
  }

  /**
   * 
   * @param type $imagen
   */
  public function setImagen($imagen) {
    $this->imagen = $imagen;
  }

  public function setSexo($sexo) {
    $this->sexo = $sexo;
  }

  /**
   * Fija fecha creacion del registro del usuario
   * @param type $createdAt
   */
  public function setCreatedAt($createdAt) {
    $this->createdAt = $createdAt;
  }

  /**
   * Fija la fecha de actualizacion de los datos del usuario
   * @param type $updatedAt
   */
  public function setUpdatedAt($updatedAt) {
    $this->updatedAt = $updatedAt;
  }

  /**
   * Fija la fecha de eliminacion de los datos del usuario
   * @param type $deletedAt
   */
  public function setDeletedAt($deletedAt) {
    $this->deletedAt = $deletedAt;
  }

}
