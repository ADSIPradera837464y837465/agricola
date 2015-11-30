<?php

namespace FStudio\model\base;
use FStudio\fsModel as model;
use FStudio\myConfig as config;

/**
 * Clase base para la tabla labor
 * @author Emanuel Castillo Mosquera <corcel125@outlook.com>
 * @package FStudio
 * @subpackage model
 * @subpackage base
 * @version 1.0.0
 */
class laborBaseTable extends model {

  /**
   * ID del labor
   */
  const ID = lab_id;

  /**
   * Descripción de la labor
   */
  const DESCRIPCION = lab_descripcion;

  /**
   * Valor de la labor
   */
  const VALOR = lab_valor;

  /**
   * Estado de la labor
   */
  const ESTADO = lab_estado;

  /**
   * Fecha y hora de creación del registro
   */
  const CREATED_AT = 'lab_created_at';

  /**
   * Fecha y hora de la ultima actualización del registro
   */
  const UPDATED_AT = 'lab_updated_at';

  /**
   * Fecha y hora para controlar el borrado lógico
   */
  const DELETED_AT = 'lab_deleted_at';

  /**
   * Nombre de la secuencia del ID de la tabla
   */
  const _SEQUENCE = '';

  /**
   * Configuración del sistema
   * @var config
   */
  protected $config;

  /**
   * ID de la tabla labor
   * @var integer
   */
  private $id;

  /**
   * Descripción de la labor
   * @var string
   */
  private $descripcion;

  /**
   *
   * @var type 
   */
  private $valor;

  /**
   *
   * @var type 
   */
  private $estado;

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
   *  Constructor de la clase laborBaseTable
   * @version 1.0.0
   * @param config $config
   * @param integer $id [opcional] ID del registro
   * @param varchar $descripcion [opcional] Descripción de la labor
   * @param integer $valor valor de la labor
   * @param varchar $estado estado de la labor
   * @param string $createdAt [opcional] Fecha y hora de creación del registro
   * @param string $updatedAt [opcional] Fecha y hora de actualización del registro
   * @param string $deletedAt [opcional] Fecha y hora del borrado lógico del registro
   */
  public function __construct(config $config, $id = null, $descripcion = null,$valor = null,$estado = null, $createdAt = null, $updatedAt = null, $deletedAt = null) {
    $this->config = $config;
    $this->id = $id;
    $this->descripcion = $descripcion;
    $this->valor = $valor;
    $this->estado = $estado;
    $this->createdAt = $createdAt;
    $this->updatedAt = $updatedAt;
    $this->deletedAt = $deletedAt;
  }

  /**
   * Retorna el objeto config del sistema
   * @version 1.0.0
   * @return config
   */
  public function getConfig() {
    return $this->config;
  }

  /**
   * Retorna el ID del registro
   * @version 1.0.0
   * @return integer
   */
  public function getId() {
    return $this->id;
  }

  /**
   * Retorna la descripción del registro
   * @version 1.0.0
   * @return string
   */
  public function getDescripcion() {
    return $this->descripcion;
  }

  /**
   * Retorna el valor de la labor
   * @version 1.0.0
   * @return integer
   */
  public function getValor() {
    return $this->valor;
  }

  /**
   * retorna el estado de la labor
   * @version 1.0.0
   * @return varchar
   */
  public function getEstado() {
    return $this->estado;
  }

  /**
   * Retorna la fecha y la hora de creación del registro
   * @version 1.0.0
   * @return string
   */
  public function getCreatedAt() {
    return $this->createdAt;
  }

  /**
   * Retorna la fecha y la hora de la última actualización del registro
   * @version 1.0.0
   * @return string
   */
  public function getUpdatedAt() {
    return $this->updatedAt;
  }

  /**
   * Retorna la fecha y la hora del borrado lógico del registro
   * @version 1.0.0
   * @return string
   */
  public function getDeletedAt() {
    return $this->deletedAt;
  }

  /**
   * Fija el objeto de la configuración del sistema
   * @version 1.0.0
   * @param config $config Objeto de la configuración del sistema
   */
  public function setConfig(config $config) {
    $this->config = $config;
  }

  /**
   * Fija el ID para un registro del sistema
   * @version 1.0.0
   * @param integer $id ID de un registro
   */
  public function setId($id) {
    $this->id = $id;
  }

  /**
   * Fija la descripción del producto
   * @version 1.0.0
   * @param string $descripcion Descripción del producto
   */
  public function setDescripcion($descripcion) {
    $this->descripcion = $descripcion;
  }

  /**
   * Fija el valor de la labor
   * @version 1.0.0
   * @param  integer $valor
   */
  public function setValor(type $valor) {
    $this->valor = $valor;
  }

  /**
   * Fija el estado de la labor
   * @version 1.0.0
   * @param  varchar $estado
   */
  public function setEstado(type $estado) {
    $this->estado = $estado;
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
