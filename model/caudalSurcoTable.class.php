<?php

use FStudio\model\base\productoBaseTable;

/**
 * Description of caudalSurcoBaseTable
 * @author Itiani Moreno Rosero <itiani2811@gmail.com>
 * @package 
 * @subpackage model
 * @subpackage table
 * @version 1.0.0
 */
class caudalSurcoTable extends caudalSurcoBaseTable {

    /**
     * Obtiene todos los datos de la tabla
     * @version 1.0.0
     * @return mixed [stdClass | boolean]
     */
    public function getAll() {
        $conn = $this->getConnection($this->config);
        $sql = 'SELECT decs_id AS id, decs_item AS item, decs_cantidad_surco AS cantidadSurco, fore_num_documento As numDocumento, decs_created_at As createdAt, decs_updated_at As updatedAt, decs_deleted_at As deletedAt FROM  ORDER BY decs_created_at ASC';
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
    public function getById($id) {
        $conn = $this->getConnection($this->config);
        $sql = 'SELECT decs_id AS id, decs_item AS item, decs_cantidad_surco AS cantidadSurco, fore_num_documento As numDocumento, decs_created_at As createdAt, decs_updated_at As updatedAt, decs_deleted_at As deletedAt '
                . 'FROM bda_detalle_caudal_surco WHERE decs_deleted_at IS NULL '
                . 'AND decs_id = :id';
        $params = array(
            ':id' => $id
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
        $sql = 'INSERT INTO bda_detalle_caudal_surco (decs_item, decs_cantidad_surco, fore_num_documento) VALUES (:decs_item, :decs_cantidad_surco, :fore_num_documento)';
        $params = array(
            ':decs_item' => $this->getItem(),
            ':decs_cantidad_surco' => $this->getCantidadSurco(),
            ':fore_num_documento' => $this->getNumeroDocumento(),
        );
        $answer = $conn->prepare($sql);
        $answer->execute($params);
        return $conn->lastInsertId(self::_SEQUENCE);
    }

    /**
     * Actualiza un registro de la tabla
     * @version 1.0.0
     * @return boolean
     */
    public function update() {
        $conn = $this->getConnection($this->config);
        $sql = 'UPDATE bda_detalle_caudal_surco SET decs_item = :decs_item, decs_cantidad_surco = :decs_cantidad_surco, fore_num_documento = :fore_num_documento WHERE id = :id';
        $params = array(
            ':decs_item' => $this->getItem(),
            ':decs_cantidad_surco' => $this->getCantidadSurco(),
            ':fore_num_documento' => $this->getNumeroDocumento(),
        );
        $answer = $conn->prepare($sql);
        $answer->execute($params);
        return true;
    }

    /**
     * Borra en forma logica o fisica un registro de la tabla
     * @version 1.0.0
     * @param boolean $deleteLogical Especifica el borrado logico (true o false)
     * @return boolean
     * @throws PDOException
     */
    public function delete($deleteLogical = true) {
        $conn = $this->getConnection($this->config);
        $params = array(
            ':id' => $this->getId()
        );
        switch ($deleteLogical) {
            case true:
                $sql = 'UPDATE bda_detalle_caudal_surco SET decs_deleted_at = now() WHERE decs_id = :id';
                break;
            case false:
                $sql = 'DELETE FROM bda_detalle_caudal_surco WHERE decs_id = :id';
                break;
            default:
                throw new PDOException('Por favor indique un dato coherente para el borrado lógico (true) o físico (false)');
        }
        $answer = $conn->prepare($sql);
        $answer->execute($params);
        return true;
    }

}
