<?php

namespace FStudio\model\base;

use FStudio\fsModel as model;
use FStudio\myConfig as config;

/**
 * Description of maquinaTableBase
 * @author Johanna G <ladyjkaulitz@hotmail.com>
 * @package
 * @subpackage model
 * @subpackage table
 * @version 1.0.0
 */
class maquinaTableBase extends model {

  /**
   * ID de la tabla
   */
  const ID = 'maq_id';

  /**
   * estado de la tabla
   */
  const ESTADO = 'maq_estado';

  /**
   * Longitud del campo estado 
   */
  const ESTADO_LENGTH = 30;

  /**
   * valor de la maquina
   * 
   */
  const VALOR = 'maq_valor';

  /**
   * fecha de la compra de la maquina
   */
  const FECHA_COMPRA = 'maq_fecha_compra';

  /**
   * fecha de la compra de la maquina
   */
  const NUMERO_CHASIS = 'maq_numero_chasis';

  /**
   * Longitud del campo numero chasis 
   */
  const NUMERO_CHASIS_LENGTH = 80;

  /**
   * accesorio de la maquina
   */
  const T_ACCESORIO = 'maq_t_asesorio';

  /**
   * Longitud del campo accesorio 
   */
  const T_ACCESORIO_LENGTH = 80;

  /**
   * horas trabajadas de la maquina 
   */
  const HORAS_TRABAJADAS = 'maq_horas_trabajadas';

  /**
   * tiempo del mantenimiento de la maquina
   */
  const TIEMPO_MANTENIMIENTO_HORAS = 'maq_tiempo_mantenimiento_horas';

  /**
   * serie de la maquina
   */
  const NUMERO_SERIE = 'maq_numero_serie';

  /**
   * Longitud del campo numero serie 
   */
  const NUMERO_SERIE_LENGTH = 80;

  /**
   * modelo de la maquina
   */
  const MODELO = 'maq_modelo';

  /**
   * Longitud del campo modelo 
   */
  const MODELO_LENGTH = 80;

  /**
   * Horas de actividad de la maquina
   */
  const HORAS_ACTIVIDAD = 'maq_horas_actividad';

  /**
   * Valor de la hora
   */
  const VALOR_HORA = 'maq_valor_hora';

  /**
   * Fecha de creacion del registro
   */
  const CREATED_AT = 'maq_created_at';

  /**
   * Fecha de actualizacion del registro
   */
  const UPDATED_AT = 'maq_created_at';

  /**
   * Fecha de eliminacion del registro
   */
  const DELETED_AT = 'maq_deleted_at';

  /**
   * Secuencia de la tabla
   */
  const _SEQUENCE = '';

  /**
   * Tabla 
   */
  const _TABLE = 'bda_maquina';

  /**
   * Configuración del sistema
   * @var config
   */
  protected $config;

  /**
   * ID de la tabla
   * @var BigInt
   */
  private $id;

  /**
   * estado de la tabla maquina
   * @var Varchar
   */
  private $estado;

  /**
   * valor de la maquina
   * @var BigInt
   */
  private $valor;

  /**
   * fecha de la compra de la maquina 
   * @var date
   */
  private $fechaCompra;

  /**
   * numero del chasis de la maquina
   * @var varchar
   */
  private $numeroChasis;

  /**
   * Tipo de accesorio de la maquina
   * @var varchar
   */
  private $tAccesorio;

  /**
   * Horas de trabajo de la maquina
   * @var BigInt
   */
  private $horasTrabajadas;

  /**
   * Tiempo en horas de mantenimiento
   * @var BigInt
   */
  private $tiempoTrabajadoHoras;

  /**
   * numero de serie de la maquina
   * @var varchar
   */
  private $numeroSerie;

  /**
   * Modelo de la maquina
   * @var varchar
   */
  private $modelo;

  /**
   * Horas de actividad de la maquina
   * @var BigInt
   */
  private $horasActividad;

  /**
   * valor por hora
   * @var BigInt
   */
  private $valorHora;

  /**
   * Fecha de creacion del registro
   * @var date_time
   */
  private $createdAt;

  /**
   * Fecha de actualizacion del registro
   * @var date_time
   */
  private $updatedAt;

  /**
   * Fecha de eliminacion del registro
   * @var date_time
   */
  private $deletedAt;

  /**
   * Constructor de la tabla Maquina
   * @param config $config
   * @param BigInt $id
   * @param Varchar $estado
   * @param BigInt $valor
   * @param date $fechaCompra
   * @param varchar $numeroChasis
   * @param varchar $tAccesorio
   * @param BigInt $horasTrabajadas
   * @param BigInt $tiempoTrabajadoHoras
   * @param varchar $numeroSerie
   * @param varchar $modelo
   * @param BigInt $horasActividad
   * @param BigInt $valorHora
   * @param date_time $createdAt
   * @param date_time $updatedAt
   * @param date_time $deletedAt
   */
  function __construct(config $config, $id = null, $estado= null,  $valor = null,  $fechaCompra = null,  $numeroChasis = null,  $tAccesorio = null,  $horasTrabajadas = null, $tiempoTrabajadoHoras = null,  $numeroSerie = null,  $modelo = null,  $horasActividad = null,  $valorHora = null, $createdAt = null,  $updatedAt = null, $deletedAt = null) {
    $this->config = $config;
    $this->id = $id;
    $this->estado = $estado;
    $this->valor = $valor;
    $this->fechaCompra = $fechaCompra;
    $this->numeroChasis = $numeroChasis;
    $this->tAccesorio = $tAccesorio;
    $this->horasTrabajadas = $horasTrabajadas;
    $this->tiempoTrabajadoHoras = $tiempoTrabajadoHoras;
    $this->numeroSerie = $numeroSerie;
    $this->modelo = $modelo;
    $this->horasActividad = $horasActividad;
    $this->valorHora = $valorHora;
    $this->createdAt = $createdAt;
    $this->updatedAt = $updatedAt;
    $this->deletedAt = $deletedAt;
  }

  
   /**
   * Retorna la configuracion del sistema
   * @version 1.0.0
   * @return config
   */
  public function getConfig() {
    return $this->config;
  }

   /**
   * Retorna el Id de la tabla maquina
   * @version 1.0.0
   * @return config
   */
  public function getId() {
    return $this->id;
  }

  
   /**
   * Retorna el estado de la tabla maquina
   * @version 1.0.0
   * @return config
   */
  public function getEstado() {
    return $this->estado;
  }

  
   /**
   * Retorna el valor de la tabla maquina
   * @version 1.0.0
   * @return config
   */
  public function getValor() {
    return $this->valor;
  }

  
   /**
   * Retorna la fehca de la compra en la tabla maquina
   * @version 1.0.0
   * @return config
   */
  public function getFechaCompra() {
    return $this->fechaCompra;
  }

  
   /**
   * Retorna el numero del chasis de la maquina
   * @version 1.0.0
   * @return config
   */
  public function getNumeroChasis() {
    return $this->numeroChasis;
  }

  
   /**
   * Retorna el tipo de accesorio de la maquina
   * @version 1.0.0
   * @return config
   */
  public function getTAccesorio() {
    return $this->tAccesorio;
  }

  
  
   /**
   * Retorna las horas trabajadas de la tabla maquina
   * @version 1.0.0
   * @return config
   */
  public function getHorasTrabajadas() {
    return $this->horasTrabajadas;
  }
  
  
   /**
   * Retorna el tiempo en el que se trabajo en la tabla maquina
   * @version 1.0.0
   * @return config
   */

  public function getTiempoTrabajadoHoras() {
    return $this->tiempoTrabajadoHoras;
  }
  
  
   /**
   * Retorna el numero de serie de la  maquina
   * @version 1.0.0
   * @return config
   */

  public function getNumeroSerie() {
    return $this->numeroSerie;
  }
  
  
   /**
   * Retorna el modelo de la tabla maquina
   * @version 1.0.0
   * @return config
   */

  public function getModelo() {
    return $this->modelo;
  }

  
   /**
   * Retorna las horas de actividad de la tabla maquina
   * @version 1.0.0
   * @return config
   */
  public function getHorasActividad() {
    return $this->horasActividad;
  }

  
   /**
   * Retorna el valor de las horas de la tabla maquina
   * @version 1.0.0
   * @return config
   */
  public function getValorHora() {
    return $this->valorHora;
  }

  
   /**
   * Retorna la fecha de creación del registro
   * @version 1.0.0
   * @return date_time
   */
  public function getCreatedAt() {
    return $this->createdAt;
  }

   /**
   * Retorna la fecha de actualización del registro
   * @version 1.0.0
   * @return date_time
   */
  public function getUpdatedAt() {
    return $this->updatedAt;
  }

  /**
   * Retorna la fecha de eliminacion del registro
   * @version 1.0.0
   * @return date_time
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
   * Fija el id para el registro en la tabla
   * @version 1.0.0
   * @param integer $id
   */
  public function setId(BigInt $id) {
    $this->id = $id;
  }
  /**
   * Fija el estado para el registro en la tabla
   * @version 1.0.0
  * @param Varchar $estado
   */
  public function setEstado(Varchar $estado) {
    $this->estado = $estado;
  }

   /**
   * Fija el valor para el registro en la tabla
   * @version 1.0.0
  * @param BigInt $valor
   */
  public function setValor(BigInt $valor) {
    $this->valor = $valor;
  }
  
   /**
   * Fija la fecha de la compra para el registro en la tabla
   * @version 1.0.0
  * @param date $fechaCompra
   */

  public function setFechaCompra(date $fechaCompra) {
    $this->fechaCompra = $fechaCompra;
  }

   /**
   * Fija numero de el chasis para el registro en la tabla
   * @version 1.0.0
  * @param varchar $numeroChasis
   */
  
  public function setNumeroChasis(varchar $numeroChasis) {
    $this->numeroChasis = $numeroChasis;
  }
  
   /**
   * Fija tipo de accesorio para el registro en la tabla
   * @version 1.0.0
  * @param varchar $tAccesorio
   */
  
  public function setTAccesorio(varchar $tAccesorio) {
    $this->tAccesorio = $tAccesorio;
  }
  
    /**
   * Fija el numero de horas trabajadas  para el registro en la tabla
   * @version 1.0.0
  * @param BigInt $horasTrabajadas
   */
  

  public function setHorasTrabajadas(BigInt $horasTrabajadas) {
    $this->horasTrabajadas = $horasTrabajadas;
  }

  
    /**
   * Fija tiempo trabajado en  horas para el registro en la tabla
   * @version 1.0.0
  * @param BigInt $tiempoTrabajadoHoras
   */
  
  public function setTiempoTrabajadoHoras(BigInt $tiempoTrabajadoHoras) {
    $this->tiempoTrabajadoHoras = $tiempoTrabajadoHoras;
  }

     /**
   * Fija el numero de serie para el registro en la tabla
   * @version 1.0.0
  * @param varchar $numeroSerie
   */
  public function setNumeroSerie(varchar $numeroSerie) {
    $this->numeroSerie = $numeroSerie;
  }

     /**
   * Fija el modelo para el registro en la tabla
   * @version 1.0.0
  * @param varchar $modelo
   */
  public function setModelo(varchar $modelo) {
    $this->modelo = $modelo;
  }

     /**
   * Fija la hora de actividad para el registro en la tabla
   * @version 1.0.0
  * @param BigInt $horasActividad
   */
  public function setHorasActividad(BigInt $horasActividad) {
    $this->horasActividad = $horasActividad;
  }

     /**
   * Fija el valor en  horas para el registro en la tabla
   * @version 1.0.0
  * @param BigInt $valorHora
   */
  public function setValorHora(BigInt $valorHora) {
    $this->valorHora = $valorHora;
  }

   /**
   * Fija la fecha de creacion del registro
   * @version 1.0.0
   * @param date_time $createdAt
   */
  public function setCreatedAt(date_time $createdAt) {
    $this->createdAt = $createdAt;
  }

    /**
   * Fija la fecha de actualización del registro
   * @version 1.0.0
   * @param date_time $updatedAt
   */
  public function setUpdatedAt(date_time $updatedAt) {
    $this->updatedAt = $updatedAt;
  }

     /**
   * Fija la fecha de eliminacion del registro
   * @version 1.0.0
   * @param date_time $deletedAt
   */
  public function setDeletedAt(date_time $deletedAt) {
    $this->deletedAt = $deletedAt;
  }


  
  
}
