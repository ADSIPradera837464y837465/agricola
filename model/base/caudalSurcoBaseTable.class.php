<?php

namespace FStudio\model\base;

use FStudio\fsModel as model;
use FStudio\myConfig as config;

/**
 * Description of caudalSurcoBaseTable
 * @author Itiani Moreno Rosero <itiani2811@gmail.com>
 * @package 
 * @subpackage model
 * @subpackage base
 * @version 1.0.0
 */
class caudalSurcoBaseTable extends model {

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
    const NUM_DOCUMENTO = 'fore_num_documento';

    /**
     * Fecha y hora de creación del registro
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
    private $cantidadSurco;

    /**
     * numero de documento
     * @var integer
     */
    private $numDocumento;

    /**
     * fecha y hora de cuando se creo  un registro
     * @var date_time
     */
    private $createdAt;

    /**
     * fecha y hora de la ultima modificacion de un registro
     * @var date_time
     */
    private $updatedAt;
    

    /**
     * fecha y hora para controlar el borrado logico
     * @var date_time
     */
    private $deletedAt;
    public function __construct(config $config, $id, $item, $cantidadSurco, $numDocumento, date_time $createdAt, date_time $updatedAt, date_time $deletedAt) {
        $this->config = $config;
        $this->id = $id;
        $this->item = $item;
        $this->cantidadSurco = $cantidadSurco;
        $this->numeroDocumento = $numDocumento;
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
        return $this->cantidadSurco;
    }

    /**
     * Retorna el numero del documento
     * @version 1.0.0
     * @return integer
     */
    public function getNumeroDocumento() {
        return $this->numDocumento;
    }

    /**
     * Retorna fecha y hora de cuando se creo un registro
     * @version 1.0.0
     * @return integer
     */
    public function getCreatedAt() {
        return $this->createdAt;
    }

    /**
     * Retorna fecha y hora de cuando se modifico el ultimo registro
     * @version 1.0.0
     * @return integer
     */
    public function getUpdatedAt() {
        return $this->updatedAt;
    }

    /**
     * Retorna fecha y hora el borrado logico
     * @version 1.0.0
     * @return integer
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
    public function setCantidadSurco($cantidadSurco) {
        $this->cantidadSurco = $cantidadSurco;
    }

    /**
     * Fija el numero de documento para el registro en la tabla
     * @version 1.0.0
     * @param integer $numDocumento
     */
    public function setNumDocumento($numDocumento) {
        $this->numeroDocumento = $numeroDocumento;
    }

    /**
     * Fija fecha y hora de cuando se creo  un registro
     * @version 1.0.0
     * @param integer $createdAt
     */
    public function setCreatedAt(date_time $createdAt) {
        $this->createdAt = $createdAt;
    }

    /**
     * Fija fecha y hora de cuando se modifico el ultimo registro
     * @version 1.0.0
     * @param integer $updatedAt
     */
    public function setUpdatedAt(date_time $updatedAt) {
        $this->updatedAt = $updatedAt;
    }

    /**
     * Fija fecha y hora del borrado logico
     * @version 1.0.0
     * @param integer $deletedAt
     */
    public function setDeletedAt(date_time $deletedAt) {
        $this->deletedAt = $deletedAt;
    }

}
