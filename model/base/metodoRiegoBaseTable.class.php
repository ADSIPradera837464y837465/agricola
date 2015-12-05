<?php

namespace FStudio\model\base;

use FStudio\fsModel as model;
use FStudio\myConfig as config;

/**
 * Description of metodoRiegoBaseTable
 * 
 * @author merian montaño<nichesitap@hotmail.com>
 * @package FStudio
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
   * descripcion del metodo de riego
   */
  const DESCRIPCION = 'met_rie_descripcion';

  /**
   * longuitud para la descripcion del  metodo
   */
  const DESCRIPCION_LENGTH = 80;

  /**
   * Fecha y hora de creación del registro
   */
  const CREATED_AT = 'met_created_at';

  /**
   * Fecha y hora de la ultima actualización del registro
   */
  const UPDATED_AT = 'met_updated_at';

  /**
   * Fecha y hora para controlar el borrado lógico
   */
  const DELETED_AT = 'met_deleted_at';

  /**
   * Nombre de la secuencia del ID de la tabla
   */
  const _SEQUENCE = 'bda_metodo_riego_met_rie_id_seq';

  /**
   * Nombre de la tabla
   */
  const _TABLE = 'bda_metodo_riego';

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
   * descripcion del metodo
   * @var string
   */
  private $descripcion;

  /**
   * Fecha y hora de la reacion del registro
   * @var
   */
  private $created_at;

  /**
   * Modificar  metodo de riego
   * @var
   */
  private $updated_at;

  /**
   * Fecha y hora para controlar el borrado logico
   * @var
   */
  private $deleted_at;

  public function __construct(config $config, $id = null, $descripcion = null, $created_at = null, $updated_at = null, $deleted_at = null) {
    $this->config = $config;
    $this->id = $id;
    $this->descripcion = $descripcion;
    $this->created_at = $created_at;
    $this->updated_at = $updated_at;
    $this->deleted_at = $deleted_at;
  }

  /**
   * Retorna el id del registro de la tabla
   * @version 1.0.0
   * @return integer
   */
  public function getId() {
    return $this->id;
  }

  /**
   * Retorna la descripcion del sistema de riego
   * @version 1.0.0
   * @return string
   */
  public function getDescripcion() {
    return $this->descripcion;
  }

  /**
   * Retorna la creacion de un metodo de riego
   * @version 1.0.0
   * @return
   */
  public function getCreatedAt() {
    return $this->created_at;
  }

  /**
   * Retorna la actualizacion de un metodo de riego
   * @version 1.0.0
   * @return
   */
  public function getUpdatedAt() {
    return $this->updated_at;
  }

  /**
   * Retorna la eliminacion de un metodo de riego
   * @version 1.0.0
   * @return
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
   * Fija la descripcion del metodo de riego
   * @version 1.0.0
   * @param integer $descripcion
   */
  public function setDescripcion($descripcion) {
    $this->descripcion = $descripcion;
  }

  /**
   * Fija los datos creados que se hayan hecho en la tabla
   * @version 1.0.0
   * @param integer $createdAt
   */
  public function setCreatedAt($created_at) {
    $this->created_at = $created_at;
  }

  /**
   * Fija las actualizaciones que se hayan hecho en la tabla
   * @version 1.0.0
   * @param integer $updatedAt
   */
  public function setUpdatedAt($updated_at) {
    $this->updated_at = $updated_at;
  }

  /**
   * Fija las datos eliminados que se hayan hecho en la tabla
   * @version 1.0.0
   * @param integer $deletedAt
   */
  public function setDeletedAt($deleted_at) {
    $this->deleted_at = $deleted_at;
  }

}
