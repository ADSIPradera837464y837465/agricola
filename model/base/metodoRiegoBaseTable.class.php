<?php

/**
 * Description of metodoRiegoBaseTable
 * @author merian montaño<nichesitap@hotmail.com>
 * @package 
 * @subpackage model
 * @subpackage base
 * @version 1.0.0
 */
class metodoRiegoBaseTable extends model {

  /**
   * ID de la tabla
   */
  const ID = 'met_rie_id';

  /**
   * Descripcion del metodo de riego
   */
  const DESCRIPCION = 'met_rie_descripcion';

  /**
   * Longitud del campo de descripcion
   */
  const DESCRIPCION_LENGTH = 80;

  /**
   * @version 1.0.0
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
   * Descripcion del metodo de riego
   * @var string
   */
  private $descripcion;

  /**
   * Fecha y hora de la reacion del registro
   * @var 
   */
  private $createdAt;

  /**
   * Modificar  metodo de riego
   * @var 
   */
  private $updateAt;

  /**
   * Fecha y hora para controlar el borrado logico
   * @var 
   */
  private $deletedAt;

  /**
   * Constructor de la clase metodoRiegoBaseTable
   * 
   * @param config $config
   * @param integer $id
   * @param string $descripcion
   * @param date_time $createdAt
   * @param date_time $updateAt
   * @param date_time $deletedAt
   */
  public function __construct(config $config, $id = null, $descripcion = null, $createdAt = null, $updateAt = null, $deletedAt = null) {
    $this->config = $config;
    $this->id = $id;
    $this->descripcion = $descripcion;
    $this->createdAt = $createdAt;
    $this->updateAt = $updateAt;
    $this->deletedAt = $deletedAt;
  }

  /**
   * Retorna la configuración del sistema
   * @version 1.0.0
   * @return config
   */
  public function getConfig() {
    return $this->config;
  }

  /**
   * Retorna el id del registro
   * @return integer
   */
  public function getId() {
    return $this->id;
  }

  /**
   * Retorna la descripcion del sistema de riego
   * @return string
   */
  public function getDescripcion() {
    return $this->descripcion;
  }

  /**
   * Retorna la creacion de un metodo de riego
   * @return 
   */
  public function getCreatedAt() {
    return $this->createdAt;
  }

  /**
   * Retorna la modificasion de un metodo de riego
   * @return 
   */
  public function getUpdateAt() {
    return $this->updateAt;
  }

  /**
   * Retorna la eliminacion de un metodo de riego
   * @return 
   */
  public function getDeletedAt() {
    return $this->deletedAt;
  }

  /**
   * Fija la configuración del sistema
   * @version 1.0.0
   * @param config $config Objeto con configuración del sistema
   */
  public function setConfig(config $config) {
    $this->config = $config;
  }

  /**
   * Retorna el id del registro
   * @return integer
   */
  public function setId($id) {
    $this->id = $id;
  }

  /**
   * Retorna la descripcion del sistema de riego
   * @return string
   */
  public function setDescripcion($descripcion) {
    $this->descripcion = $descripcion;
  }

  /**
   * Retorna la modificasion de un metodo de riego
   * @return 
   */
  public function setCreatedAt($createdAt) {
    $this->createdAt = $createdAt;
  }

  /**
   * Retorna la modificasion de un metodo de riego
   * @return 
   */
  public function setUpdateAt($updateAt) {
    $this->updateAt = $updateAt;
  }

  /**
   * Retorna la eliminacion de un metodo de riego
   * @return 
   */
  public function setDeletedAt($deletedAt) {
    $this->deletedAt = $deletedAt;
  }

}
