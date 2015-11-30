<?php

use FStudio\model\base\detalleOrdenBaseTable;

/**
 * Description of detalleOrdenTable
 * @author Daniela Barona Mosquera <mo_naok@hotmail.com>
 * @package 
 * @subpackage model
 * @subpackage base
 * @version 1.0.0
 */
class detalleOrdenTable extends detalleOrdenBaseTable {

    /**
     * Obtiene todos los datos de la tabla
     * @return [stdClass | boolean]
     */
    public function getAll() {
        $conn = $this->getConnection($this->config);
        $sql = 'SELECT deo_id, ors_id, ser_id, deo_created_at, deo_updated_at, deo_deleted_at FROM detalleOrden WHERE deo_deleted_at IS NULL ORDER BY deo_created_at ASC';
        $answer = $conn->prepare($sql);
        $answer->execute();
        return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
    }

    /**
     * Retorna un elemento de la tabla buscado por un id especifico
     * @param integer $id
     * @return [stdClass | boolean]
     */
    public function getById($id = null) {
        $conn = $this->getConnection($this->config);
        $sql = 'SELECT deo_id, ors_id, ser_id, deo_created_at, deo_updated_at, deo_deleted_at FROM detalleOrden AND id = :id';
        $params = array(
            ':id' => ($id !== null) ? $id : $this->getId()
        );
        $answer = $conn->prepare($sql);
        $answer->execute($params);
        return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
    }

    /**
     * Registra los datos del objeto en la tabla
     * @return integer
     */
    public function save() {
        $conn = $this->getConnection($this->config);
        $sql = 'INSERT INTO detalleOrden (ors_id, ser_id) VALUES (:ors_id, :ser_id)';
        $params = array(
            ':ors_id' => $this->getOrsId(),
            ':ser_id' => $this->getSerId()
        );
        $answer = $conn->prepare($sql);
        $answer->execute($params);
        $this->setId($conn->lastInsertId(self::_SEQUENCE));
        return true;
    }

    /**
     * Actualiza un registro de la tabla
     * @return boolean
     */
    public function update() {
        $conn = $this->getConnection($this->config);
        $sql = 'UPDATE detalleOrden SET ors_id = :ors_id, ser_id = :ser_id WHERE id = :id';
        $params = array(
            ':ors_id' => $this->getOrsId(),
            ':ser_id' => $this->getSerId(),
            ':id' => $this->getId()
        );
        $answer = $conn->prepare($sql);
        $answer->execute($params);
        return true;
    }

    /**
     * Borra en forma logica o fisica un registro de la tabla
     * @param boolean $deleteLogical
     * @return boolean
     * @throws PDOException
     */
    public function delete() {
        $conn = $this->getConnection($this->config);
        $sql = 'DELETE FROM detalleOrden WHERE id = :id';
        $params = array(
            ':id' => $this->getId()
        );
        $answer = $conn->prepare($sql);
        $answer->execute($params);
        return true;
    }

}
