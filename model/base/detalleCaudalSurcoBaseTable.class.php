<?php

namespace FStudio\model\base;

use FStudio\fsModel as model;
use FStudio\myConfig as config;

/**
 * Description of detallecaudalSurcoBaseTable
 * 
 * @author Itiani Moreno Rosero <itiani2811@gmail.com>
 * @package FStudio
 * @subpackage model
 * @subpackage base
 * @version 1.0.0
 */
class detalleCaudalSurcoBaseTable extends model {

  /**
   * ID de la tabla
   *
   */
  const ID = 'decs_id';

  /**
   * Secuencia del identificador de la tabla
   */
  const ITEM = 'decs_item';

  /**
   * Longitud del campo item
   */
  const ITEM_LENGTH = 80;

  /**
   * cantidad de surco
   */
  const CANTIDAD_SURCO = 'decs_cantidad_surco';

  /**
   * numero de documento
   */
  const CONTROL_ADMINISTRATIVO_RIEGO_ID = 'car_num_documento';

  /**
   * Fecha y hora de la creacion de un registro
   */
  const CREATED_AT = 'decs_created_at';

  /**
   * Fecha y hora de la ultima actualización del registro
   */
  const UPDATED_AT = 'decs_updated_at';

  /**
   * Fecha y hora para controlar el borrado lógico
   */
  const DELETED_AT = 'decs_deleted_at';

  /**
   * Nombre de la secuencia del ID de la tabla
   */
  const _SEQUENCE = 'bda_detalle_caudal_surco_decs_id_seq';

  /**
   *  Nombre de la tabla
   */
  const _TABLE = 'bda_detalle_caudal_surco';

  /**
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
   * Secuencia del identificador de la tabla
   * @var string
   */
  private $item;

  /**
   * cantidad de surco
   * @var integer
   */
  private $cantidad_surco;

  /**
   * numero de documento
   * @var integer
   */
  private $control_administrativo_riego_id;

  /**
   * fecha y hora de cuando se creo  un registro
   * @var date_time
   */
  private $created_at;

  /**
   * fecha y hora de la ultima modificacion de un registro
   * @var date_time
   */
  private $updated_at;

  /**
   * fecha y hora para controlar el borrado logico
   * @var date_time
   */
  private $deleted_at;

  /**
   *
   * Constructor de la clase detalleCaudalSurcoBaseTable
   * @param integer $id
   * @param string $item
   * @param integer $cantidad_surco
   * @param integer $control_administrativo_riego_id
   * @param date_time $created_at
   * @param date_time $updated_at
   * @param date_time $deleted_at
   * @version 1.0.0
   */
  public function __construct(config $config, $id = null, $item = null, $cantidad_surco = null, $control_administrativo_riego_id = null, $created_at = null, $updated_at = null, $deleted_at = null) {
    $this->config = $config;
    $this->id = $id;
    $this->item = $item;
    $this->cantidad_surco = $cantidad_surco;
    $this->control_administrativo_riego_id = $control_administrativo_riego_id;
    $this->created_at = $created_at;
    $this->updated_at = $updated_at;
    $this->deleted_at = $deleted_at;
  }

  /**
   * Retorna el id del registro
   * @version 1.0.0
   * @return integer
   */
  public function getId() {
    return $this->id;
  }

  /**
   * Retorna la secuencia del registro
   * @version 1.0.0
   * @return string
   */
  public function getItem() {
    return $this->item;
  }

  /**
   * Retorna la cantidad del registro
   * @version 1.0.0
   * @return integer
   */
  public function getCantidadSurco() {
    return $this->cantidad_surco;
  }

  /**
   * Retorna el numero del documento
   * @version 1.0.0
   * @return integer
   */
  public function getControlAdministrativoRiegoId() {
    return $this->control_administrativo_riego_id;
  }

  /**
   * Retorna fecha y hora de cuando se creo un registro
   * @version 1.0.0
   * @return integer
   */
  public function getCreatedAt() {
    return $this->created_at;
  }

  /**
   * Retorna fecha y hora de cuando se modifico el ultimo registro
   * @version 1.0.0
   * @return integer
   */
  public function getUpdatedAt() {
    return $this->updated_at;
  }

  /**
   * Retorna fecha y hora el borrado logico
   * @version 1.0.0
   * @return integer
   */
  public function getDeletedAt() {
    return $this->deleted_at;
  }

  /**
   * Fija el id para el registro en la tabla
   * @version 1.0.0
   * @param integer $id
   */
  public function setId($id) {
    $this->id = $id;
  }

  /**
   * Fija la secuencia para el registro en la tabla
   * @version 1.0.0
   * @param integer $item
   */
  public function setItem($item) {
    $this->item = $item;
  }

  /**
   * Fija la cantidad para el registro en la tabla
   * @version 1.0.0
   * @param integer $cantidadSurco
   */
  public function setCantidadSurco($cantidad_surco) {
    $this->cantidad_surco = $cantidad_surco;
  }

  /**
   * Fija el numero de documento para el registro en la tabla
   * @version 1.0.0
   * @param integer $numDocumento
   */
  public function setControlAdministrativoRiegoId($control_administrativo_riego_id) {
    $this->control_administrativo_riego_id = $control_administrativo_riego_id;
  }

  /**
   * Fija fecha y hora de cuando se creo  un registro
   * @version 1.0.0
   * @param integer $createdAt
   */
  public function setCreatedAt($created_at) {
    $this->created_at = $created_at;
  }

  /**
   * Fija fecha y hora de cuando se modifico el ultimo registro
   * @version 1.0.0
   * @param integer $updatedAt
   */
  public function setUpdatedAt($updated_at) {
    $this->updated_at = $updated_at;
  }

  /**
   * Fija fecha y hora del borrado logico
   * @version 1.0.0
   * @param integer $deletedAt
   */
  public function setDeletedAt($deleted_at) {
    $this->deleted_at = $deleted_at;
  }

}
