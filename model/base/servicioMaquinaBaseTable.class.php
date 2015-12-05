<?php

namespace FStudio\model\base;

use FStudio\fsModel as model;
use FStudio\myConfig as config;

/**
 * Description of servicioMaquinaBaseTable
 * 
 * @author Yuri Adriana Hurtado Rojas <yurodri.1996@gmail.com>
 * @package FStudio
 * @subpackage model
 * @subpackage base
 * @version 1.0.0
 */
class servicioMaquinaBaseTable extends model {

  /**
   * Id de la tabla
   * @var integer
   */
  const ID = 'ser_id';

  /**
   * Descripcion de la tabla
   * @var varchaR
   */
  const DESCRIPCION = 'ser_descripcion';

  /**
   * Longitud de la descripcion de la tabla
   * @var varchaR
   */
  const DESCRIPCION_LENGTH = 80;

  /**
   * Estado de la tabla
   * @var varchaR
   */
  const ESTADO = 'ser_estado';

  /**
   * Estado de la longitud de la tabla
   * @var varchaR
   */
  const ESTADO_LENGTH = 30;

  /**
   * Fecha y hora de creación del registro
   */
  const CREATED_AT = 'ser_created_at';

  /**
   * Fecha y hora de la ultima actualización del registro
   */
  const UPDATED_AT = 'ser_updated_at';

  /**
   * Fecha y hora para controlar el borrado lógico
   */
  const DELETED_AT = 'ser_deleted_at';

  /**

   * Secuencia de la identificacion de la tabla
   */
  const _SEQUENCE = 'bda_servicio_maquina_seq';

  /**

   * Nombre de la tabla
   */
  const _TABLE = 'bda_servicio_maquina';

  /**
   * Configuración del sistema
   * @var config
   */
  protected $config;

  /**
   * Id del servicio_maquina en la base de datos
   * @var integer
   */
  private $id;

  /**
   * Descripcion del servicio_maquina en la base de datos
   * @var varchar
   */
  private $descripcion;

  /**
   * Estado del servicio_maquina en la base de datos
   * @var varchar
   */
  private $estado;

  /**
   * Fecha de creacion de los datos del servicio_maquina en el sistema
   * @var type
   */
  private $created_at;

  /**
   * Fecha de actualizacion de los datos del servicio_maquina en el sistema
   * @var type
   */
  private $updated_at;

  /**
   * Fecha de eliminacion de los datos del servicio_maquina en el sistema
   * @var type
   */
  private $deleted_at;

  /**
   *
   * @param config $config
   * @param type $id
   * @param type $descripcion
   * @param type $estado
   * @param type $created_at
   * @param type $updated_at
   * @param type $deleted_at
   */
  public function __construct(config $config, $id = null, $descripcion = null, $estado = null, $created_at = null, $updated_at = null, $deleted_at = null) {
    $this->config = $config;
    $this->id = $id;
    $this->descripcion = $descripcion;
    $this->estado = $estado;
    $this->created_at = $created_at;
    $this->updated_at = $updated_at;
    $this->deleted_at = $deleted_at;
  }

  /**
   * Retorna el Numero Id de la tabla servicio_maquina
   * @return Integer
   */
  public function getId() {
    return $this->id;
  }

  /**
   * Retorna la descripcion de la tabla servicio_maquina
   * @return Varchar
   */
  public function getDescripcion() {
    return $this->descripcion;
  }

  /**
   * Retorna el estado de la tabla servicio_maquina
   * @return Varchar
   */
  public function getEstado() {
    return $this->estado;
  }

  /**
   * Retorna la fecha de creacion del registro del servicio_maquina
   * @return time
   */
  public function getCreatedAt() {
    return $this->created_at;
  }

  /**
   * retorna fecha de actualizacion de los datos del servicio_maquina
   * @return time
   */
  public function getUpdatedAt() {
    return $this->updated_at;
  }

  /**
   * Retorna fecha de eliminacion de los datos del servicio_maquina del sistema
   * @return time
   */
  public function getDeletedAt() {
    return $this->deleted_at;
  }

  /**
   * Fija id de la tabla servicio_maquina
   * @param type $id
   */
  public function setId($id) {
    $this->id = $id;
  }

  /**
   * Fija la descripcion de la tabla servicio_maquina
   * @param type $descripcion
   */
  public function setDescripcion($descripcion) {
    $this->descripcion = $descripcion;
  }

  /**
   * Fija el estado de la tabla servicio_maquina
   * @param type $estado
   */
  public function setEstado($estado) {
    $this->estado = $estado;
  }

  /**
   * Fija fecha creacion del registro del servicio_maquina
   * @param type $createdAt
   */
  public function setCreatedAt($created_at) {
    $this->created_at = $created_at;
  }

  /**
   * Fija la fecha de actualizacion de los datos del servicio_maquina
   * @param type $updatedAt
   */
  public function setUpdatedAt($updated_at) {
    $this->updated_at = $updated_at;
  }

  /**
   * Fija la fecha de eliminacion de los datos del servicio_maquina
   * @param type $deletedAt
   */
  public function setDeletedAt($deleted_at) {
    $this->deleted_at = $deleted_at;
  }

}
