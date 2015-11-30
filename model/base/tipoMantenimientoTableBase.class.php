<?php

/**
 * Description of tipoMantenimientoTableBase
 * @author merian montaño<nichesitap@hotmail.com>
 * @package 
 * @subpackage model
 * @subpackage base
 * @version 1.0.0
 */
class tipoMantenimientoTableBase extends model {

  /**
   * ID de la tabla
   */
  const ID = 'tma_id';

  /**
   * descripcion de tipo de mantenimiento
   */
  const DESCRIPCION = 'tma_descripcion';

  /**
   * longitud del campo de la descripcion
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
  private $tmaId;

  /**
   * Descripcion del tipo  de mantenimiento
   * @var string
   */
  private $tmaDescripcion;

  /**
   * Fecha y hora del tipo de mantenimiento
   * @var 
   */
  private $tmaCreatedAt;

  /**
   * Modificar el tipo de mantenimiento
   * @var 
   */
  private $tmaUpdateAt;

  /**
   * Fecha y hora para controlar el borrado logico
   * @var 
   */
  private $tmaDeletedAt;

  /**
   * 
   * @param config $config
   * @param type $tmaId
   * @param type $tmaDescripcion
   * @param type $tmaCreatedAt
   * @param type $tmaUpdateAt
   * @param type $tmaDeletedAt
   */
  function __construct(config $config, $tmaId = null, $tmaDescripcion = null, $tmaCreatedAt = null, $tmaUpdateAt = null, $tmaDeletedAt = null) {
    $this->config = $config;
    $this->tmaId = $tmaId;
    $this->tmaDescripcion = $tmaDescripcion;
    $this->tmaCreatedAt = $tmaCreatedAt;
    $this->tmaUpdateAt = $tmaUpdateAt;
    $this->tmaDeletedAt = $tmaDeletedAt;

    /**
     * Retorna la configuración del sistema
     * @version 1.0.0
     * @return config
     */
    function getConfig() {
      return $this->config;
    }

    /**
     * Retorna el id del registro
     * @return integer
     */
    function gettmaId() {
      return $this->tmaId;
    }

    /**
     * Retorna la descripcion del tipo de mantenimiento
     * @return string
     */
    function gettmaDescripcion() {
      return $this->tmaDescripcion;
    }

    /**
     * Retorna la creacion de tipo de mantenimiento nuevo
     * @return 
     */
    function gettmaCreatedAt() {
      return $this->tmaCreatedAt;
    }

    /**
     * Retorna la modificasion de un tipo de mantenimiento
     * @return 
     */
    function gettmaUpdateAt() {
      return $this->tmaUpdateAt;
    }

    /**
     * Retorna la eliminacion de un tipo de mantenimiento
     * @return 
     */
    function gettmaDeletedAt() {
      return $this->tmaDeletedAt;
    }

    /**
     * Fija la configuración del sistema
     * @version 1.0.0
     * @param config $config Objeto con configuración del sistema
     */
    function setConfig(config $config) {
      $this->config = $config;
    }

    /**
     * Retorna el id del registro
     * @return integer
     */
    function settmaId($tmaId) {
      $this->id = $tmaId;
    }

    /**
     * Retorna la descripcion del tipo de mantenimiento
     * @return string
     */
    function settmaDescripcion($tmaDescripcion) {
      $this->descripcion = $tmaDescripcion;
    }

    /**
     * Retorna la modificasion de un tipo de mantenimiento
     * @return 
     */
    function settmaCreatedAt($tmaCreatedAt) {
      $this->createdAt = $tmaCreatedAt;
    }

    /**
     * Retorna la modificasion de un tipo de mantenimiento
     * @return 
     */
    function settmaUpdateAt($tmaUpdatedAt) {
      $this->updateAt = $tmaUpdatedAt;
    }

    /**
     * Retorna la eliminacion de un tipo de mantenimiento
     * @return 
     */
    function settmaDeletedAt($tmaDeletedAt) {
      $this->deletedAt = $tmaDeletedAt;
    }

  }

}
