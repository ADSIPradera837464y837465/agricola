<?php

namespace FStudio\model\base;

use FStudio\fsModel as model;
use FStudio\myConfig as config;

/**
 * Description of detalleOrdenTableBase
 * @author Daniela Barona Mosquera <mo_naok@hotmail.com>
 * @package 
 * @subpackage model
 * @subpackage base
 * @version 1.0.0
 */
class detalleOrdenTableBase extends model {

    /**
     * ID de la tabla
     */
    const ID = 'deo_id';

    /**
     * Foranea de la tabla orden servicio
     */
    const ORDEN_SERVIVIO_ID = 'ors_id';

    /**
     * Foranea de la tabla servicio maquina
     */
    const SERVICIO_MAQUINA_ID = 'ser_id';

    /**
     * Fecha y hora de creación del registro
     */
    const CREATED_AT = 'deo_created_at';

    /**
     * Fecha y hora de la ultima actualización del registro
     */
    const UPDATED_AT = 'deo_updated_at';

    /**
     * Fecha y hora para controlar el borrado lógico
     */
    const DELETED_AT = 'deo_deleted_at';

    /**
     * Nombre de la secuencia del ID de la tabla
     */
    const _SEQUENCE = '';

    /**
     * Nombre de la tabla
     */
    const _TABLE = 'bda_detalle_orden';

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
     * Foranea de la tabla orden servicio
     * @var integer 
     */
    private $orsId;

    /**
     * Foranea de la tabla servicio maquina
     * @var integer 
     */
    private $serId;

    /**
     * Crea los registros de la tabla
     * @var date_time 
     */
    private $createdAt;

    /**
     * Actualiza registros de la tabla
     * @var date_time 
     */
    private $updatedAt;

    /**
     * Elimina registros de la tabla
     * @var date_time 
     */
    private $deletedAt;

    /**
     * Constructor de la clase detalleOrdenTableBase
     * @param config $config
     * @param type $id
     * @param type $orsId
     * @param type $serId
     * @param \FStudio\model\base\date_time $createdAt
     * @param \FStudio\model\base\date_time $updatedAt
     * @param \FStudio\model\base\date_time $deletedAt
     */
    public function __construct(config $config, $id, $orsId, $serId, date_time $createdAt, date_time $updatedAt, date_time $deletedAt) {
        $this->config = $config;
        $this->id = $id;
        $this->orsId = $orsId;
        $this->serId = $serId;
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
     * Retorna el id del registro de la tabla
     * @version 1.0.0
     * @return integer
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Retorna el id de la tabla orden servicio
     * @version 1.0.0
     * @return integer
     */
    public function getOrsId() {
        return $this->orsId;
    }

    /**
     * Retorna el id de la tabla servicio maquina
     * @version 1.0.0
     * @return integer
     */
    public function getSerId() {
        return $this->serId;
    }

    /**
     * Retorna los datos creados en la tabla
     * @version 1.0.0
     * @return date_time
     */
    public function getCreatedAt() {
        return $this->createdAt;
    }

    /**
     * Retorna las actualizaciones que se hayan hecho en la tabla
     * @version 1.0.0
     * @return date_time
     */
    public function getUpdatedAt() {
        return $this->updatedAt;
    }

    /**
     * Retorna los datos eliminados de la tabla
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
    public function setId($id) {
        $this->id = $id;
    }

    /**
   * Fija el id de la tabla orden servicio
   * @version 1.0.0
   * @param integer $orsId
   */
    public function setOrsId($orsId) {
        $this->orsId = $orsId;
    }

    /**
   * Fija el id de la tabla servicio maquina
   * @version 1.0.0
   * @param integer $serId
   */
    public function setSerId($serId) {
        $this->serId = $serId;
    }

    /**
   * Fija los datos creados que se hayan hecho en la tabla
   * @version 1.0.0
   * @param integer $createdAt
   */
    public function setCreatedAt(date_time $createdAt) {
        $this->createdAt = $createdAt;
    }
/**
   * Fija las actualizaciones que se hayan hecho en la tabla
   * @version 1.0.0
   * @param integer $updatedAt
   */
    public function setUpdatedAt(date_time $updatedAt) {
        $this->updatedAt = $updatedAt;
    }

    /**
   * Fija las datos eliminados que se hayan hecho en la tabla
   * @version 1.0.0
   * @param integer $deletedAt
   */
    public function setDeletedAt(date_time $deletedAt) {
        $this->deletedAt = $deletedAt;
    }

}
