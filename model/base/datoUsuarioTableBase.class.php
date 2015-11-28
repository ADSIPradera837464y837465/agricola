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
class datoUsuarioTableBase extends model {

  /**
   * Id de la dato_usuario   
   */
  const ID = 'dus_id';

  /**
   * Id del usuario   
   */
  const USUARIO_ID = 'usr_id';

  /**
   * Numero del documento del usuario

   */
  const CEDULA = 'dus_cedula';

  /**
   * Nombre del usuario   
   */
  const NOMBRE = 'dus_nombre';

  /**
   * Apellido del usuario

   */
  const APELLIDO = 'dus_apellidos';

  /**
   * Numero del celular movil del usuario

   */
  const MOVIL = 'dus_movil';

  /**
   * Direccion E-mail del usuario

   */
  const CORREO = 'dus_correo';

  /**
   * 
   */
  const IMAGEN = 'dus_imagen';

  /**
   * Genero del usuario

   */
  const SEXO = 'dus_sexo';

  /**
   * Fecha y hora de creación del registro
   */
  const CREATED_AT = 'dus_created_at';

  /**
   * Fecha y hora de la ultima actualización del registro
   */
  const UPDATED_AT = 'dus_updated_at';

  /**
   * Fecha y hora para controlar el borrado lógico
   */
  const DELETED_AT = 'dus_deleted_at';
  
  /**
   * Nombre de la secuencia del ID de la tabla
   */
  const _SEQUENCE = '';

  /**
   * Configuracion del sistema

   */
  protected $config;

  /**
   * Id de la tabla
   * @var integer 
   */
  private $id;

  /**
   * Tipo del usuario que ingresa en el sistema
   * @var varchar 
   */
  private $usuario;

  /**
   * Numero de documento del usuario
   * @var integer 
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
   * @var  
   */
  private $imagen;

  /**
   * Genero del Usuario
   * @var varchar 
   */
  private $sexo;

  /**
   * Fecha y hora de creación del registro
   * @var string
   */
  private $createdAt;

   /**
   * Fecha y hora de la ultima actualización del registro
   * @var string
   */
  private $updatedAt;

  /**
   * Fecha y hora para controlar el borrado lógico
   * @var string
   */
  private $deletedAt;

  /**
   * Constructor de la clase datoUsuarioTableBase
   *@version 1.0.0
   * @param config $config
   * @param integer $id Id de la tabla
   * @param varchar $usuario Tipo del usuario que ingresa en el sistema
   * @param integer $cedula Numero de documento del usuario
   * @param varchar $nombre nombre real del usuario
   * @param varchar $apellido Apellido real del usuario
   * @param varchar $movil numero del telefono movil del usuario
   * @param varchar $correo Dirrecion del E-mail del usuario
   * @param type $imagen
   * @param varchar $sexo Genero del Usuario
   * @param string $createdAt [opcional] Fecha y hora de creación del registro
   * @param string $updatedAt [opcional] Fecha y hora de la ultima actualización del registro
   * @param string $deletedAt [opcional] Fecha y hora para controlar el borrado lógico
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
   * @version 1.0.0
   * @return Config
   */
  public function getConfig() {
    return $this->config;
  }

  /**
   * Retorna el Numero Id de la tabla bda_dato_usuario
   * @version 1.0.0
   * @return Integer
   */
  public function getId() {
    return $this->id;
  }

  /**
   * Retorna Id del usuario
   * @version 1.0.0
   * @return Integer
   */
  public function getUsuario() {
    return $this->usuario;
  }

  /**
   * Retorna el Numero de cedula
   * @version 1.0.0
   * @return Integer
   */
  public function getCedula() {
    return $this->cedula;
  }

  /**
   * Retorna nombre real del usuario
   * @version 1.0.0
   * @return varchar
   */
  public function getNombre() {
    return $this->nombre;
  }

  /**
   * Retorna Apellido del usuario
   * @version 1.0.0
   * @return varchar
   */
  public function getApellido() {
    return $this->apellido;
  }

  /**
   * Retorna el numero del Numero cel de usuario
   * @version 1.0.0
   * @return Varchar
   */
  public function getMovil() {
    return $this->movil;
  }

  /**
   * Retorna la direccion del E_mail del usuario
   * @version 1.0.0
   * @return Varchar
   */
  public function getCorreo() {
    return $this->correo;
  }

  /**
   * 
   * @version 1.0.0
   * @return type
   */
  public function getImagen() {
    return $this->imagen;
  }

  /**
   * Retorna el genero del usuario
   * @version 1.0.0
   * @return varchar
   */
  public function getSexo() {
    return $this->sexo;
  }

  /**
   * Retorna la fecha de creacion del registro del usuario
   * @version 1.0.0
   * @return string
   */
  public function getCreatedAt() {
    return $this->createdAt;
  }

  /**
   * retorna fecha de actualizacion de los datos del usuario
   * @version 1.0.0
   * @return string
   */
  public function getUpdatedAt() {
    return $this->updatedAt;
  }

  /**
   * Retorna fecha de eliminacion de los datos del usuario del sistema
   * @version 1.0.0
   * @return string
   */
  public function getDeletedAt() {
    return $this->deletedAt;
  }

  /**
   * Fija la configuracion del sistema
   * @version 1.0.0
   * @param config $config
   */
  public function setConfig($config) {
    $this->config = $config;
  }

  /**
   * Fija id de la tabla bda_dato_usuario
   * @version 1.0.0
   * @param integer $id
   */
  public function setId($id) {
    $this->id = $id;
  }

  /**
   * Fija en Id el id del usuario
   * @version 1.0.0
   * @param varchar $usuario
   */
  public function setUsuario($usuario) {
    $this->usuario = $usuario;
  }

  /**
   * fija el numero de cedula del usuario
   * @version 1.0.0
   * @param integer $cedula
   */
  public function setCedula($cedula) {
    $this->cedula = $cedula;
  }

  /**
   * Fija el nombre del usuario
   * @version 1.0.0
   * @param varchar $nombre
   */
  public function setNombre($nombre) {
    $this->nombre = $nombre;
  }

  /**
   * Fija el apellido del usuario
   * @version 1.0.0
   * @param varchar $apellido
   */
  public function setApellido($apellido) {
    $this->apellido = $apellido;
  }

  /**
   * Fija el numero del telefono movil del usuario
   * @version 1.0.0
   * @param varchar $movil
   */
  public function setMovil($movil) {
    $this->movil = $movil;
  }

  /**
   * Fija la direccion E-mail del usuario
   * @version 1.0.0
   * @param varchar $correo
   */
  public function setCorreo($correo) {
    $this->correo = $correo;
  }

  /**
   * 
   * @version 1.0.0
   * @param type $imagen
   */
  public function setImagen($imagen) {
    $this->imagen = $imagen;
  }

  /**
   * Fija el genero del usuario
   * @version 1.0.0
   * @param string $sexo
   */
  public function setSexo($sexo) {
    $this->sexo = $sexo;
  }

  /**
   * Fija la fecha y la hora de creación del registro
   * @version 1.0.0
   * @param string $createdAt Fecha y hora de creación
   */
  public function setCreatedAt($createdAt) {
    $this->createdAt = $createdAt;
  }

  /**
   * Fija la fecha y la hora de la última actualización del registro
   * @version 1.0.0
   * @param sting $updatedAt Fecha y hora de la última actualización del registro
   */
  public function setUpdatedAt($updatedAt) {
    $this->updatedAt = $updatedAt;
  }

  /**
   * Fija la fecha y la hora del borrado lógico
   * @version 1.0.0
   * @param string $deletedAt Fecha y hora del borrado lógico
   */
  public function setDeletedAt($deletedAt) {
    $this->deletedAt = $deletedAt;
  }

}
