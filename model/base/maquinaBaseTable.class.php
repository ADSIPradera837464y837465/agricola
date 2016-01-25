<?php

namespace FStudio\model\base;

use FStudio\fsModel as model;
use FStudio\myConfig as config;

/**
 * Description of maquinaBaseTable
 * @author Johanna G <ladyjkaulitz@hotmail.com>
 * @package
 * @subpackage model
 * @subpackage base
 * @version 1.0.0
 */
class maquinaBaseTable extends model {

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
  const TIPO_ACCESORIO = 'maq_tipo_accesorio';

  /**
   * Longitud del campo accesorio 
   */
  const TIPO_ACCESORIO_LENGTH = 80;

  /**
   * horas trabajadas de la maquina 
   */
  const HORAS_TRABAJADAS = 'maq_horas_trabajadas';

  /**
   * tiempo del mantenimiento de la maquina
   */
  const TIEMPO_MANTENIMIENTO_HORA = 'maq_tiempo_mantenimiento_hora';

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
  const UPDATED_AT = 'maq_updated_at';

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
  private $fecha_compra;

  /**
   * numero del chasis de la maquina
   * @var varchar
   */
  private $numero_chasis;

  /**
   * Tipo de accesorio de la maquina
   * @var varchar
   */
  private $tipo_accesorio;

  /**
   * Horas de trabajo de la maquina
   * @var BigInt
   */
  private $horas_trabajadas;

  /**
   * Tiempo en horas de mantenimiento
   * @var BigInt
   */
  private $tiempo_mantenimiento_hora;

  /**
   * numero de serie de la maquina
   * @var varchar
   */
  private $numero_serie;

  /**
   * Modelo de la maquina
   * @var varchar
   */
  private $modelo;

  /**
   * Horas de actividad de la maquina
   * @var BigInt
   */
  private $horas_actividad;

  /**
   * valor por hora
   * @var BigInt
   */
  private $valor_hora;

  /**
   * Fecha de creacion del registro
   * @var date_time
   */
  private $created_at;

  /**
   * Fecha de actualizacion del registro
   * @var date_time
   */
  private $updated_at;

  /**
   * Fecha de eliminacion del registro
   * @var date_time
   */
  private $deleted_at;

  /**
   * Constructor de la tabla Maquina
   * @version 1.0.0
   * @param config $config
   * @param BigInt $id
   * @param Varchar $estado
   * @param BigInt $valor
   * @param date $fechaCompra
   * @param varchar $numeroChasis
   * @param varchar $tAccesorio
   * @param BigInt $horasTrabajadas
   * @param BigInt $tiempoMantenientoHoras
   * @param varchar $numeroSerie
   * @param varchar $modelo
   * @param BigInt $horasActividad
   * @param BigInt $valorHora
   * @param date_time $createdAt
   * @param date_time $updatedAt
   * @param date_time $deletedAt
   */
  public function __construct(config $config, $id = null, $estado = null, $valor = null, $fecha_compra = null, $numero_chasis = null, $tipo_accesorio = null, $horas_trabajadas = null, $tiempo_mantenimiento_hora = null, $numero_serie = null, $modelo = null, $horas_actividad = null, $valor_hora = null, $created_at = null, $updated_at = null, $deleted_at = null) {
    $this->config = $config;
    $this->id = $id;
    $this->estado = $estado;
    $this->valor = $valor;
    $this->fecha_compra = $fecha_compra;
    $this->numero_chasis = $numero_chasis;
    $this->tipo_accesorio = $tipo_accesorio;
    $this->horas_trabajadas = $horas_trabajadas;
    $this->tiempo_mantenimiento_hora = $tiempo_mantenimiento_hora;
    $this->numero_serie = $numero_serie;
    $this->modelo = $modelo;
    $this->horas_actividad = $horas_actividad;
    $this->valor_hora = $valor_hora;
    $this->created_at = $created_at;
    $this->updated_at = $updated_at;
    $this->deleted_at = $deleted_at;
  }

  

  /**
   * Retorna el Id de la tabla maquina
   * @return config
   */
  public function getId() {
    return $this->id;
  }

  /**
   * Retorna el estado de la tabla maquina
   * @return config
   */
  public function getEstado() {
    return $this->estado;
  }

  /**
   * Retorna el valor de la tabla maquina
   * @return config
   */
  public function getValor() {
    return $this->valor;
  }

  /**
   * Retorna la fehca de la compra en la tabla maquina
   * @return config
   */
  public function getFechaCompra() {
    return $this->fecha_compra;
  }

  /**
   * Retorna el numero del chasis de la maquina
   * @return config
   */
  public function getNumeroChasis() {
    return $this->numero_chasis;
  }

  /**
   * Retorna el tipo de accesorio de la maquina
   * @return config
   */
  public function getTipoAccesorio() {
    return $this->tipo_accesorio;
  }

  /**
   * Retorna las horas trabajadas de la tabla maquina
   * @return config
   */
  public function getHorasTrabajadas() {
    return $this->horas_trabajadas;
  }

  /**
   * Retorna el tiempo en el que se trabajo en la tabla maquina
   * @return config
   */
    public function getTiempoMantenimientoHora() {
    return $this->tiempo_mantenimiento_hora;
  }

  /**
   * Retorna el numero de serie de la  maquina
   * @return config
   */
  public function getNumeroSerie() {
    return $this->numero_serie;
  }

  /**
   * Retorna el modelo de la tabla maquina
   * @return config
   */
  public function getModelo() {
    return $this->modelo;
  }

  /**
   * Retorna las horas de actividad de la tabla maquina
   * @return config
   */
  public function getHorasActividad() {
    return $this->horas_actividad;
  }

  /**
   * Retorna el valor de las horas de la tabla maquina
   * @return config
   */
  public function getValorHora() {
    return $this->valor_hora;
  }

  /**
   * Retorna la fecha de creación del registro
   * @return date_time
   */
  public function getCreatedAt() {
    return $this->created_at;
  }

  /**
   * Retorna la fecha de actualización del registro
   * @return date_time
   */
  public function getUpdatedAt() {
    return $this->updated_at;
  }

  /**
   * Retorna la fecha de eliminacion del registro
   * @return date_time
   */
  public function getDeletedAt() {
    return $this->deleted_at;
  }


  /**
   * Fija el id para el registro en la tabl
   * @param integer $id
   */
  public function setId($id) {
    $this->id = $id;
  }

  /**
   * Fija el estado para el registro en la tabla
   * @param Varchar $estado
   */
  public function setEstado($estado) {
    $this->estado = $estado;
  }

  /**
   * Fija el valor para el registro en la tabla
   * @param BigInt $valor
   */
  public function setValor($valor) {
    $this->valor = $valor;
  }

  /**
   * Fija la fecha de la compra para el registro en la tabla
   * @param date $fechaCompra
   */
  public function setFechaCompra($fecha_compra) {
    $this->fecha_compra = $fecha_compra;
  }

  /**
   * Fija numero de el chasis para el registro en la tabl
   * @param varchar $numeroChasis
   */
  public function setNumeroChasis($numero_chasis) {
    $this->numero_chasis = $numero_chasis;
  }

  /**
   * Fija tipo de accesorio para el registro en la tabla
   * @param varchar $tAccesorio
   */
  public function setTipoAccesorio($tipo_accesorio) {
    $this->tipo_accesorio = $tipo_accesorio;
  }

  /**
   * Fija el numero de horas trabajadas  para el registro en la tabla
   * @param BigInt $horasTrabajadas
   */
  public function setHorasTrabajadas($horas_trabajadas) {
    $this->horas_trabajadas = $horas_trabajadas;
  }

  /**
   * Fija tiempo del mantenimiento en  horas para el registro en la tabla
   * @param BigInt $tiempoMantenientoHoras
   */
  public function setTiempoMantenimientoHora($tiempo_mantenimiento_hora) {
    $this->tiempo_mantenimiento_hora = $tiempo_mantenimiento_hora;
  }


  /**
   * Fija el numero de serie para el registro en la tabla
   * @param varchar $numeroSerie
   */
  public function setNumeroSerie($numero_serie) {
    $this->numero_serie = $numero_serie;
  }

  /**
   * Fija el modelo para el registro en la tabla
   * @param varchar $modelo
   */
  public function setModelo($modelo) {
    $this->modelo = $modelo;
  }

  /**
   * Fija la hora de actividad para el registro en la tabla
   * @param BigInt $horasActividad
   */
  public function setHorasActividad($horas_actividad) {
    $this->horas_actividad = $horas_actividad;
  }

  /**
   * Fija el valor en  horas para el registro en la tabla
   * @param BigInt $valorHora
   */
  public function setValorHora($valor_hora) {
    $this->valor_hora = $valor_hora;
  }

  /**
   * Fija la fecha de creacion del registro
   * @param date_time $createdAt
   */
  public function setCreatedAt($created_at) {
    $this->created_at = $created_at;
  }

  /**
   * Fija la fecha de actualización del registro
   * @param date_time $updatedAt
   */
  public function setUpdatedAt($updated_at) {
    $this->updated_at = $updated_at;
  }

  /**
   * Fija la fecha de eliminacion del registro
   * @param date_time $deletedAt
   */
  public function setDeletedAt($deleted_at) {
    $this->deleted_at = $deleted_at;
  }

}
