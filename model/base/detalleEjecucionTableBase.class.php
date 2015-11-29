<?php

namespace FStudio\model\base;

use FStudio\fsModel as model;
use FStudio\myConfig as config;

/**
 * Description of bitacoraBaseTable
 * @author linaVanessaMontaño <linamontano-1995@hotmail.es>
 * @package estudio
 * @subpackage model
 * @subpackage base
 * @version 1.0.0
 */
class detalleEjecucionTableBase extends model {

    /**
     * ID de la tabla detalleEjecucion
     * @ var integer
     */
    const ID = 'dee_id';

    /**
     * ID de la tabla ordenEjecucion
     * @ var integer
     */
    const ID = 'ore_id';

    /**
     * ID de la tabla tercero
     *@ var integer
     */
    const ID = 'ter_id';

    /**
     * ID de la tabla servicioMaquina
     *@ var integer
     */
    const ID = 'ser_id';

    /**
     * ID de la tabla producto
     * @ var integer
     */
    const ID = 'pro_id';

    /**
     * cantidad de la tabla detalleEjecucion
     * @ var integer
     */
    const ID = 'dee_cantidad';

    /**
     * precio de la tabla detalleEjecucion
     * @ var integer
     */
    const precio = 'dee_precio';

   /**
   * Configuración del sistema
   * @var config
   */
  protected $config;
  
 /**
   * ID de la tabla detalleEjecucion
   * @var integer
   */
  private $deeId; 
  
  /**
   * ID de la tabla ordenEjecucion
   * @var integer
   */
  private $oreId; 
  
  /**
   * ID de la tabla tercero
   * @var integer
   */
  private $terId; 
  
  /**
   * ID de la tabla servicioMaquina
   * @var integer
   */
  private $serId; 
  
   /**
   * ID de la tabla producto
   * @var integer
   */
  private $proId; 
  
  /**
   * ID de la tabla detalleEjecucion
   * @var integer
   */
  private $cantidad;
  
   /**
   * ID de la tabla detalleEjecucion
   * @var integer
   */
  private $precio;
  
   /**
   * ID de la tabla 
   * @var  date_time
   */
  private $createdAt;
   /**
   * ID de la tabla
   * @var  date_time
   */
  private $updatedAt;
  
    /**
   * ID de la tabla
   * @var  date_time
   */
  private $deletedAt;
  
  /**
   * 
   * @param config $config
   * @param type $deeId
   * @param type $oreId
   * @param type $terId
   * @param type $serId
   * @param type $proId
   * @param type $cantidad
   * @param type $precio
   * @param \FStudio\model\base\date_time $createdAt
   * @param \FStudio\model\base\date_time $updatedAt
   * @param \FStudio\model\base\date_time $deletedAt
   */
  
  public function __construct(config $config, $deeId, $oreId, $terId, $serId, $proId, $cantidad, $precio, date_time $createdAt, date_time $updatedAt, date_time $deletedAt) {
      $this->config = $config;
      $this->deeId = $deeId;
      $this->oreId = $oreId;
      $this->terId = $terId;
      $this->serId = $serId;
      $this->proId = $proId;
      $this->cantidad = $cantidad;
      $this->precio = $precio;
      $this->createdAt = $createdAt;
      $this->updatedAt = $updatedAt;
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
   * @version 1.0.0
   * @return integer
   */
  public function getDeeId() {
      return $this->deeId;
  }
  
  /**
   * Retorna el id del registro
   * @version 1.0.0
   * @return integer
   */

  public function getOreId() {
      return $this->oreId;
  }
  
  /**
   * Retorna el id del registro
   * @version 1.0.0
   * @return integer
   */

  public function getTerId() {
      return $this->terId;
  }
  
  /**
   * Retorna el id del registro
   * @version 1.0.0
   * @return integer
   */

  public function getSerId() {
      return $this->serId;
  }
  
  /**
   * Retorna el id del registro
   * @version 1.0.0
   * @return integer
   */

  public function getProId() {
      return $this->proId;
  }
  /**
   * Retorna el id del registro
   * @version 1.0.0
   * @return integer
   */

  public function getCantidad() {
      return $this->cantidad;
  }

  /**
   * Retorna el id del registro
   * @version 1.0.0
   * @return integer
   */
  public function getPrecio() {
      return $this->precio;
  }
  
  /**
   * Retorna el id del registro
   * @version 1.0.0
   * @return integer
   */

  public function getCreatedAt() {
      return $this->createdAt;
  }
  
  /**
   * Retorna el id del registro
   * @version 1.0.0
   * @return integer
   */

  public function getUpdatedAt() {
      return $this->updatedAt;
  }
  
  /**
   * Retorna el id del registro
   * @version 1.0.0
   * @return integer
   */

  public function getDeletedAt() {
      return $this->deletedAt;
  }
  
 /**
   * fija la configuración del sistema
   * @version 1.0.0
   * @return config
   */

  public function setDeeId($deeId) {
      $this->deeId = $deeId;
  }
  
 /**
   * fija la configuración del sistema
   * @version 1.0.0
   * @return config
   */

  public function setOreId($oreId) {
      $this->oreId = $oreId;
  }

  /**
   * fija la configuración del sistema
   * @version 1.0.0
   * @return config
   */
  public function setTerId($terId) {
      $this->terId = $terId;
  }
  
  /**
   * fija la configuración del sistema
   * @version 1.0.0
   * @return config
   */

  public function setSerId($serId) {
      $this->serId = $serId;
  }
  
  /**
   * fija la configuración del sistema
   * @version 1.0.0
   * @return config
   */

  public function setProId($proId) {
      $this->proId = $proId;
  }
  
  /**
   * fija la configuración del sistema
   * @version 1.0.0
   * @return config
   */

  public function setCantidad($cantidad) {
      $this->cantidad = $cantidad;
  }
  
  /**
   * fija la configuración del sistema
   * @version 1.0.0
   * @return config
   */

  public function setPrecio($precio) {
      $this->precio = $precio;
  }
  
  /**
   * fija la configuración del sistema
   * @version 1.0.0
   * @return config
   */

  public function setCreatedAt(date_time $createdAt) {
      $this->createdAt = $createdAt;
  }
  
  /**
   * fija la configuración del sistema
   * @version 1.0.0
   * @return config
   */

  public function setUpdatedAt(date_time $updatedAt) {
      $this->updatedAt = $updatedAt;
  }
  
  /**
   * fija la configuración del sistema
   * @version 1.0.0
   * @return config
   */

  public function setDeletedAt(date_time $deletedAt) {
      $this->deletedAt = $deletedAt;
  }


  }
  
  
  
  

