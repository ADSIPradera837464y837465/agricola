<?php

use FStudio\model\base\registroTractorBaseTable;

/**
 * Description of registroTractorTable
 *
 * @author yuri adriana hurtado rojas <yurodri.1996@gmail.com>
 * @package FStudio
 * @subpackage model
 * @subpackage table
 * @version 1.0.0
 */
class registroTractorTable extends registroTractorBaseTable {

  public function getAll() {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT rtr_item AS item, csc_id AS control_salida_cana, rtr_hora_salida AS hora_salida, rtr_created_at AS created_at, rtr_updated_at AS updated_at, rtr_deleted_at AS deleted_at FROM bda_registro_tractor WHERE rtr_deleted_at IS NULL ORDER BY rtr_created_at ASC';
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
    $sql = 'SELECT rtr_item AS item, csc_id AS control_salida_cana, rtr_hora_salida AS hora_salida, rtr_created_at AS created_at, rtr_updated_at AS updated_at, rtr_deleted_at AS deleted_at FROM bda_registro_tractor WHERE rtr_deleted_at IS NULL AND id = :id';
    $params = array(
        ':id' => ($id !== null) ? $id : $this->getItem()
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
    $sql = 'INSERT INTO bda_registro_tractor (csc_id, rtr_hora_salida) VALUES (:control_salida_cana, :hora_salida)';
    $params = array(
        ':control_salida_cana' => $this->getControlSalidaCana(),
        ':hora_salida' => $this->getHoraSalida()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    $this->setItem($conn->lastInsertId(self::_SEQUENCE));
    return true;
  }
   /**
   * Actualiza un registro de la tabla
   * @return boolean
   */

  public function update() {
    $conn = $this->getConnection($this->config);
    $sql = 'UPDATE bda_registro_tractor SET csc_id = :control_salida_cana, rtr_hora_salida = :hora_salida WHERE rtr_item = :item';
    $params = array(
        ':control_salida_cana' => $this->getControlSalidaCana(),
        ':hora_salida' => $this->getHoraSalida(),
        ':item' => $this->getItem()
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

  public function delete($deleteLogical = true) {
    $conn = $this->getConnection($this->config);
    $params = array(
        ':item' => $this->getItem()
    );
    switch ($deleteLogical) {
      case true:
        $sql = 'UPDATE bda_registro_tractor SET rtr_deleted_at = now() WHERE rtr_item = :item';
        break;
      case false:
        $sql = 'DELETE FROM bda_registro_tractor WHERE rtr_item = :item';
        break;
      default:
        throw new PDOException('Por favor indique un dato coherente para el borrado lógico (true) o físico (false)');
    }
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return true;
  }

}
