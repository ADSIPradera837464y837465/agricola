<?php

/**
 * Description of metodoRiegoBaseTable
 * @author merian montaño<nichesitap@hotmail.com>
 * @package 
 * @subpackage model
 * @subpackage base
 * @version 1.0.0
 */
class formularioRegistroBaseTable extends model {

  /**
   * ID de la tabla
   */
  const NUMDOCUMENTO = 'fore_num_documento';

  /**
   * 
   */
  const FECHA = 'fore_fecha';

  /**
   * Foranea de la tabla metodoRiego
   */
  const METODOID = 'met_rie_id';

  /**
   * Foranea de la tabla hacienda
   */
  const HACIENDA = 'hac_id';

  /**
   * Foranea de la tabla surete
   */
  const SUERTE = 'sue_id';

  /**
   * @version 1.0.0
   * Configuración del sistema
   * @var config
   */
  protected $config;

  /**
   *
   * @var integer
   */
  private $foreNumDocumento;

  /**
   *
   * @var date
   */
  private $foreFecha;

  /**
   *
   * @var string
   */
  private $metRieId;

  /**
   *
   * @var integer
   */
  private $hacId;

  /**
   *
   * @var integer
   */
  private $sueId;

  /**
   * Fecha y hora de la reacion del registro
   * @var 
   */
  private $foreCreatedAt;

  /**
   * Modificar el registro
   * @var 
   */
  private $foreUpdatedAt;

  /**
   * Fecha y hora para controlar el borrado logico
   * @var 
   */
  private $foreDeletedAt;

  /**
   * 
   * @param config $config
   * @param type $foreNumDocumento
   * @param date $foreFecha
   * @param type $metRieId
   * @param type $hacId
   * @param type $sueId
   * @param type $createdAt
   * @param type $updatedAt
   * @param type $deletedAt
   */
  public function __construct(config $config, $foreNumDocumento = null, date $foreFecha = null, $metRieId = null, $hacId = null, $sueId = null, $createdAt = null, $updatedAt = null, $deletedAt = null) {
    $this->config = $config;
    $this->foreNumDocumento = $foreNumDocumento;
    $this->foreFecha = $foreFecha;
    $this->metRieId = $metRieId;
    $this->hacId = $hacId;
    $this->sueId = $sueId;
    $this->foreCreatedAt= $foreCreatedAt;
    $this->foreUpdatedAt = $foreUpdatedAt;
    $this->foreDeletedAt = $foreDeletedAt;
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
   * Retorna el numero del registro
   * @return integer
   */
  public function getForeNumDocumento() {
    return $this->foreNumDocumento;
  }

  /**
   * Retorna la fecha de la creacion
   * @return 
   */
  public function getForeFecha() {
    return $this->foreFecha;
  }

  /**
   * Retorna el id del metodoRegistro
   * @return integer
   */
  public function getMetRieId() {
    return $this->metRieId;
  }

  /**
   * Retorna el id de la hacienda
   * @return integer
   */
  public function getHacId() {
    return $this->hacId;
  }

  /**
   * Retorna el id de la suerte
   * @return integer
   */
  public function getSueId() {
    return $this->sueId;
  }

  /**
   * Retorna la creacion de un formulario
   * @return 
   */
  public function getforeCreatedAt() {
    return $this->foreCreatedAt;
  }

  /**
   * Retorna la modificasion de un registro
   * @return 
   */
  public function getforeUpdatedAt() {
    return $this->foreUpdatedAt;
  }

  /**
   * Retorna la eliminacion de un registro
   * @return 
   */
  public function getforeDeletedAt() {
    return $this->foreDeletedAt;
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
   * Fijar el el numero del registro
   * @return integer
   */
  public function setForeNumDocumento($foreNumDocumento) {
    $this->foreNumDocumento = $foreNumDocumento;
  }

  /**
   * Fija la fecha de la creacion
   * @return 
   */
  public function setForeFecha(date $foreFecha) {
    $this->foreFecha = $foreFecha;
  }

  /**
   * Fijael id del metodoRegistro
   * @return integer
   */
  public function setMetRieId($metRieId) {
    $this->metRieId = $metRieId;
  }

  /**
   * Fija el id de la hacienda
   * @return integer
   */
  public function setHacId($hacId) {
    $this->hacId = $hacId;
  }

  /**
   * Fija el id de la suerte
   * @return integer
   */
  public function setSueId($sueId) {
    $this->sueId = $sueId;
  }

  /**
   * Fijala modificasion de un registro
   * @return 
   */
  public function setforeCreatedAt($createdAt) {
    $this->createdAt = $foreCreatedAt;
  }

  /**
   * Fija la modificasion de un registro
   * @return 
   */
  public function setforeUpdatedAt($updatedAt) {
    $this->updatedAt = $foreUpdatedAt;
  }

  /**
   * Fija la eliminacion de un registro
   * @return 
   */
  public function setforeDeletedAt($deletedAt) {
    $this->deletedAt = $foreDeletedAt;
  }

}
