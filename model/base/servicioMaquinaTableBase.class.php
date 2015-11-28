<?php

namespace FStudio\model\base;

use FStudio\fsModel as model;
use FStudio\myConfig as config;

/**
 * Description of servicioMaquinaTableBase
 * @author yuri adriana hurtado rojas <yurodri.1996@gmail.com>
 * @package 
 * @subpackage model
 * @subpackage base
 * @version 1.0.0
 */
class servicioMaquinaTableBase extends model {

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
     * Estado de la tabla
     * @var varchar 
     */
    const ESTADO = 'ser_estado';

    /**
     * Fecha y hora de creación del registro
     */
    const CREATE_AT = 'ser_create_at';

    /**
     * Fecha y hora de la ultima actualización del registro
     */
    const UPDATED_AT = 'ser_updated_at';

    /**
     * Fecha y hora para controlar el borrado lógico
     */
    const DELETED_AT = 'ser_deleted_at';

    /**
     * Configuracion del sistema
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
     * Fecha de creacion del servicio_maquina en el sistema 
     * Data_time 
     */
    private $createdAt;

    /**
     * Fecha de actualisacion de los datos del servicio_maquina en el sistema
     * @var Data_time 
     */
    private $updatedAt;

    /**
     * Fecha de eliminacion de los datos del servicio_maquina en el sistema
     * @var type 
     */
    private $deletedAt;

    /**
     * 
     * @param config $config
     * @param type $id
     * @param \FStudio\model\base\varchar $descripcion
     * @param \FStudio\model\base\varchar $estado
     * @param type $createdAt
     * @param \FStudio\model\base\Data_time $updatedAt
     * @param \FStudio\model\base\type $deletedAt
     */
    public function __construct(config $config, $id, varchar $descripcion, varchar $estado, $createdAt, Data_time $updatedAt, type $deletedAt) {
        $this->config = $config;
        $this->id = $id;
        $this->descripcion = $descripcion;
        $this->estado = $estado;
        $this->createdAt = $createdAt;
        $this->updatedAt = $updatedAt;
        $this->deletedAt = $deletedAt;
    }

    /**
     * Retorna la configuracion del sistema
     * @return Config
     */
    public function getConfig() {
        return $this->config;
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
        return $this->createdAt;
    }
     /**
   * retorna fecha de actualizacion de los datos del servicio_maquina
   * @return time
   */

    public function getUpdatedAt() {
        return $this->updatedAt;
    }
     /**
   * Retorna fecha de eliminacion de los datos del servicio_maquina del sistema
   * @return time
   */

    public function getDeletedAt() {
        return $this->deletedAt;
    }
     /**
   * Fija la configuracion del sistema
   * @param type $config
   */

    public function setConfig(config $config) {
        $this->config = $config;
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

    public function setDescripcion(varchar $descripcion) {
        $this->descripcion = $descripcion;
    }
      /**
   * Fija el estado de la tabla servicio_maquina
   * @param type $estado
   */

    public function setEstado(varchar $estado) {
        $this->estado = $estado;
    }
    /**
   * Fija fecha creacion del registro del servicio_maquina
   * @param type $createdAt
   */

    public function setCreatedAt($createdAt) {
        $this->createdAt = $createdAt;
    }
     /**
   * Fija la fecha de actualizacion de los datos del servicio_maquina
   * @param type $updatedAt
   */
  

    public function setUpdatedAt(Data_time $updatedAt) {
        $this->updatedAt = $updatedAt;
    }
     /**
   * Fija la fecha de eliminacion de los datos del servicio_maquina
   * @param type $deletedAt
   */

    public function setDeletedAt(type $deletedAt) {
        $this->deletedAt = $deletedAt;
    }

}
