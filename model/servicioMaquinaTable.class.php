<?php

use FStudio\model\base\servicioMaquinaBaseTable;

/**
 * Description of servicioMaquinaTable
 * @author yuri adriana hurtado rojas <yurodri.1996@gmail.com>
 * @package 
 * @subpackage model
 * @subpackage base
 * @version 1.0.0
 */
class servicioMaquinaTable extends servicioMaquinaBaseTable {

    /**
     * Obtiene todos los datos de la tabla
     * @version 1.0.0
     * @return [stdClass|boolean]
     */
    public function getAll() {
        $conn = $this->getConnection($this->config);
        $sql = 'SELECT ser_id, ser_descripcion, ser_estado, ser_created_at, ser_updated_at, ser_deleted-at, FROM servicioMaquina ORDER BY ser_id ASC';
        $answer = $conn->prepare($sql);
        $answer->execute();
        return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
    }

    /**
     * Retorna un elemento de la tabla buscado por un ID especifico
     * @version 1.0.0
     * @param integer $id ID a buscar
     * @return mixed [stdClass | boolean]
     */
    public function getById($id = null) {
        $conn = $this->getConnection($this->config);
        $sql = 'SELECT ser_id, ser_descripcion, ser_estado, ser_created_at, ser_updated_at,  ser_deleted-at, FROM seviciomaquina AND id = :id';
        '
            . FROM servicioMaquina'
                . 'AND ser_id = :ser_id';
        $params = array(
            ':id' => ($id !== null) ? $id : $this->getId()
        );
        $answer = $conn->prepare($sql);
        $answer->execute($params);
        return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
    }

    /**
     * Registra los datos del objeto en la tabla
     * @version 1.0.0
     * @return integer
     */
    public function save() {
        $conn = $this->getConnection($this->config);
        $sql = 'INSERT INTO servicioMaquina (ser_id, ser_descripcion, ser_estado ) VALUES (:ser_id, :ser_descripcion, :ser_estado,)';
        $params = array(
            ':ser_id' => $this->getId(),
            ':ser_descripcion' => $this->getDescripcion(),
            ':ser_estado' => $this->getEstado(),
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
        $sql = 'UPDATE servicioMaquina SET ser_id = :ser_id, ser_descripcion = :ser_descripcion, ser_estado = :ser_estado, WHERE ser_id = :ser_id';
        $params = array(
            ':ser_id' => $this->getId(),
            ':ser_descripcion' => $this->getDescripcion(),
            ':ser_estado' => $this->getEstado(),
        );
        $answer = $conn->prepare($sql);
        $answer->execute($params);
        return true;
    }

    /**
     * Borra en forma logica o fisica un registro de la tabla
     * @version 1.0.0
     * @param boolean $deleteLogical
     * @return boolean
     * @throws PDOException
     */
    public function delete() {
        $conn = $this->getConnection($this->config);
        $sql = 'DELETE FROM servicioMaquina WHERE id = :id';
        $params = array(
            ':id' => $this->getId()
        );
        $answer = $conn->prepare($sql);
        $answer->execute($params);
        return true;
    }

}
