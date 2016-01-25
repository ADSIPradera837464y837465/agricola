<?php

namespace FStudio\model\base;

use FStudio\fsModel as model;
use FStudio\myConfig as config;

/**
 * Description of bitacoraBaseTable
 * @author Diana Meneses <meneses_d@rocketmail.com>
 * @package FStudio
 * @subpackage model
 * @subpackage base
 * @version 1.0.0
 */
class bitacoraBaseTable extends model {

  /**
   * id de la tabla
   */
  const ID = 'bit_id';

  /**
   * Foranea en usuario
   */
  const USUARIO_ID = 'usr_id';

  /**
   * Accion de bitácora
   */
  const ACCION = 'bit_accion';

  /**
   * Longitud del campo acción
   */
  const ACCION_LENGTH = 80;

  /**
   * nombre de la tabla donde se ejecuta la accion
   */
  const TABLA = 'bit_tabla';

  /**
   * Longitud de la bit_tabla
   */
  const TABLA_LENGTH = 80;

  /**
   * Numero de registro
   */
  const REGISTRO = 'bit_registro';

  /**
   * Observaciones que se realizan en la tabla   
   */
  const OBSERVACION = 'bit_observacion';

  /**
   * Longitud del observacion
   */
  const OBSERVACION_LENGTH = 1024;

  /**
   * Fecha de registro
   */
  const FECHA = 'bit_fecha';

  /**
   * Secuencia de la identificacion de la tabla
   */
  const _SEQUENCE = 'bda_bitacora_bit_id_seq';

  /**
   * Nombre de la tabla
   */
  const _TABLE = 'bda_bitacora';

  /**
   * Configuración del sistema
   * @var config
   */
  protected $config;

  /**
   * Id de la tabla
   * @var integer 
   */
  private $id;

  /**
   * primaria de usuario
   * @var integer 
   */
  private $usuario_id;
  
  /**
   * Accion realizada
   * @var string 
   */
  private $accion;
  
  /**
   * nombre de la tabla
   * @var varchar 
   */
  private $tabla;
  
  /**
   * Descripcion del registro
   * @var varchar
   */
  private $registro;
  
  /**
   * descripcion realizada
   * @var varchar 
   */
  private $observacion;

  /**
   * fecha en la que se realiza el registro
   * @var date
   */
  private $fecha;

  /**
   * 
   * Constructor de la clase bitacoraBaseTable
   * @param integer $id
   * @param string $accion
   * @param integer $usuarioId
   * @param string $observacion
   * @param string $tabla
   * @param integer $registro
   * @param date $fecha
   * @version 1.0.0
   */
  public function __construct(config $config, $id = null, $usuario_id = null, $accion = null, $tabla = null, $registro = null, $observacion = null, $fecha = null) {
    $this->config = $config;
    $this->id = $id;
    $this->usuario_id = $usuario_id;
    $this->accion = $accion;
    $this->tabla = $tabla;
    $this->registro = $registro;
    $this->observacion = $observacion;
    $this->fecha = $fecha;
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
   * retorna el id (identificacion) del usuario
   * @version 1.0.0
   * @return integer
   */
  public function getUsuarioId() {
    return $this->usuarioId;
  }

  /**
   * retorna la accion realizada
   * @version 1.0.0
   * @return varchar
   */
  public function getAccion() {
    return $this->accion;
  }

    /**
   * Retorna el nombre de la tabla
   * @version 1.0.0
   * @return varchar
   */
  public function getTabla() {
    return $this->tabla;
  }
  
  
  /**
   * REtorna numero del registro
   * @version 1.0.0
   * @return integer
   */
  public function getRegistro() {
    return $this->registro;
  }
 

  /**
   * Retorna las observaciones realizadas
   * @version 1.0.0
   * @return varchar
   */
  public function getObservacion() {
    return $this->observacion;
  }




  /**
   * retorna fecha de registro
   * @version 1.0.0
   * @return date
   */
  public function getFecha() {
    return $this->fecha;
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
   * Fija el id del usuario
   * @version 1.0.0
   * @param integer $usuarioId
   */
  public function setUsuarioId($usuario_id) {
    $this->usuario_id = $usuario_id;
  }

  /**
   * Fija la accion que se realiza (borrar,insertar)
   * @version 1.0.0
   * @param varchar $accion
   */
  public function setAccion($accion) {
    $this->accion = $accion;
  }

    /**
   * Fija el nombre de la tabla
   * @version 1.0.0
   * @param varchar $tabla
   */
  public function setTabla($tabla) {
    $this->tabla = $tabla;
  }

  /**
   * fija registro realizado
   * @version 1.0.0
   * @param integer $registro
   */
  public function setRegistro($registro) {
    $this->registro = $registro;
  }


  /**
   * fija las observaciones que se realizaron
   * @version 1.0.0
   * @param varchar $observacion
   */
  public function setObservacion($observacion) {
    $this->observacion = $observacion;
  }



  /**
   * Fija La fecha de creacion del registro
   * @version 1.0.0
   * @param date $bit_fecha
   */
  public function setFecha($fecha) {
    $this->fecha = $fecha;
  }

}
