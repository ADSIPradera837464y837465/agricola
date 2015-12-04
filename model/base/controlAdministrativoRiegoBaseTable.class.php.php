<?php

namespace FStudio\model\base;

use FStudio\fsModel as model;
use FStudio\myConfig as config;

/**
 * Description of contolAdministrativoRiego
 * @author marian montaño<nichesitap@hotmail.com>
 * @package 
 * @subpackage model
 * @subpackage base
 * @version 1.0.0
 */
class controlAdministrativoRiegoBaseTable extends model {

/**
 * ID de la tabla
 */
const NUMDOCUMENTO = 'car_num_documento';

/**
 * tipo:date
 */
const FECHA = 'car_fecha';

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
 * 
 */
const CAUDAL_RIEGO = 'car_caudal_riego';

/**
 * 
 */
const TIEMPO_RIEGO = 'car_tiempo_riego';

/**
 * 
 */
const LONGITUD_SURCO = 'car_longitud_surco';

/**
 * 
 */
const ESPACIO_SURCO = 'car_espacio_surco';

/**
 * 
 */
const SURCO_REGADOS = ' car_surcos_regados';

/**
 * 
 */
const HUMEDAD = 'car_estado_humedad';

/**
 * 
 */
const SUELO_GRIETA = 'car_suelo_grieta';

/**
 * 
 */
const AVANCE_AGUA = 'car_facil_avance_agua';

/**
 * 
 */
const PENDIENTE_SURCO = 'car_pendiente_surco';

/**
 * 
 */
const AGUA_COSTADO = 'car_agua_costado';

/**
 * fecha y hora de un nuevo registro
 */
const CREATED_AT = 'car_created_at';

/**
 * fecha y hora de la actualizacion de un registro
 */
const UPDATED_AT = 'car_updated_at';

/**
 * fecha y hora del borrado de un registro
 */
const DELETED_AT = 'car_deleted_at';

/**
 * Configuración del sistema
 * @var config
 */
protected $config;

/**
 * id de la tabla
 * @var integer
 */
private $carNumDocumento;

/**
 * fecha del registro
 * @var date
 */
private $carFecha;

/**
 * foranea de la tabla metodo riego
 * @var string
 */
private $metRieId;

/**
 * foranea de la tabla hacienda
 * @var integer
 */
private $hacId;

/**
 * foranea de la tabla suete
 * @var integer
 */
private $sueId;
/**
 *
 * @var type 
 */
private $carCaudalRiego;
/**
 *
 * @var time
 */
private $carTiempoRiego;
/**
 *
 * @var type 
 */
private $carLongitudSurco;
/**
 *
 * @var type 
 */
private $carEspacioSurco;
/**
 *
 * @var type 
 */
private $carSurcosRegados;
/**
 *
 * @var type 
 */
private $carEstadoHumedad;
/**
 *
 * @var type 
 */
private $carSueloGrieta;
/**
 *
 * @var type 
 */
private $carFacilAvanceAgua;
/**
 *
 * @var type 
 */
private $carPendienteSurco;
/**
 *
 * @var type 
 */
private $carAguaCostado;

/**
 * Fecha y hora de la reacion del registro
 * @var 
 */
private $CreatedAt;

/**
 * Modificar el registro
 * @var 
 */
private $UpdatedAt;

/**
 * Fecha y hora para controlar el borrado logico
 * @var 
 */
private $DeletedAt;
/**
 * 
 * @param config $config
 * @param type $carNumDocumento
 * @param \FStudio\model\base\date $carFecha
 * @param type $metRieId
 * @param type $hacId
 * @param type $sueId
 * @param \FStudio\model\base\type $carCaudalRiego
 * @param \FStudio\model\base\time $carTiempoRiego
 * @param \FStudio\model\base\type $carLongitudSurco
 * @param \FStudio\model\base\type $carEspacioSurco
 * @param \FStudio\model\base\type $carSurcosRegados
 * @param \FStudio\model\base\type $carEstadoHumedad
 * @param \FStudio\model\base\type $carSueloGrieta
 * @param \FStudio\model\base\type $carFacilAvanceAgua
 * @param \FStudio\model\base\type $carPendienteSurco
 * @param \FStudio\model\base\type $carAguaCostado
 * @param type $CreatedAt
 * @param type $UpdatedAt
 * @param type $DeletedAt
 */

function __construct(config $config, $carNumDocumento=null, date $carFecha=null, $metRieId=null, $hacId=null,
        $sueId=null, type $carCaudalRiego, time $carTiempoRiego, type $carLongitudSurco, 
        type $carEspacioSurco, type $carSurcosRegados, type $carEstadoHumedad,
        type $carSueloGrieta, type $carFacilAvanceAgua, type $carPendienteSurco, 
        type $carAguaCostado, $CreatedAt, $UpdatedAt, $DeletedAt) {
  
  $this->config = $config;
  $this->carNumDocumento = $carNumDocumento;
  $this->carFecha = $carFecha;
  $this->metRieId = $metRieId;
  $this->hacId = $hacId;
  $this->sueId = $sueId;
  $this->carCaudalRiego = $carCaudalRiego;
  $this->carTiempoRiego = $carTiempoRiego;
  $this->carLongitudSurco = $carLongitudSurco;
  $this->carEspacioSurco = $carEspacioSurco;
  $this->carSurcosRegados = $carSurcosRegados;
  $this->carEstadoHumedad = $carEstadoHumedad;
  $this->carSueloGrieta = $carSueloGrieta;
  $this->carFacilAvanceAgua = $carFacilAvanceAgua;
  $this->carPendienteSurco = $carPendienteSurco;
  $this->carAguaCostado = $carAguaCostado;
  $this->CreatedAt = $CreatedAt;
  $this->UpdatedAt = $UpdatedAt;
  $this->DeletedAt = $DeletedAt;
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
 * @version 1.0.0
 * @param integer $numDocumento
 */
public function setForeNumDocumento($foreNumDocumento) {
$this->foreNumDocumento = $foreNumDocumento;
}

/**
 * Fija la fecha de la creacion
 * @version 1.0.0
 * @param date $fecha
 */
public function setForeFecha(date $foreFecha) {
$this->foreFecha = $foreFecha;
}

/**
 * Fijael id del metodoRegistro
 * @version 1.0.0
 * @param integer $metRieid
 */
public function setMetRieId($metRieId) {
$this->metRieId = $metRieId;
}

/**
 * Fija el id de la hacienda
 * @version 1.0.0
 * @param integer $haciId 
 */
public function setHacId($hacId) {
$this->hacId = $hacId;
}

/**
 * Fija el id de la suerte
 * @version 1.0.0
 * @param integer $sueId
 */
public function setSueId($sueId) {
$this->sueId = $sueId;
}

/**
 * Fijala modificasion de un registro
 * @version 1.0.0 
 * @param date_time $created_at
 */
public function setforeCreatedAt($createdAt) {
$this->createdAt = $foreCreatedAt;
}

/**
 * Fija la modificasion de un registro
 * @version 1.0.0
 * @param date_time  $updated_at 
 */
public function setforeUpdatedAt($updatedAt) {
$this->updatedAt = $foreUpdatedAt;
}

/**
 * Fija la eliminacion de un registro
 * @version 1.0.0
 * @param date_time $deleted_atd
 */
public function setforeDeletedAt($deletedAt) {
$this->deletedAt = $foreDeletedAt;
}

}
