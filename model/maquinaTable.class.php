<?php

use FStudio\model\base\maquinaBaseTable;

/**
 * Description of maquinaTable
 * 
 * @author Johanna G <ladyjkaulitz@hotmail.com>
 * @package
 * @subpackage model
 * @subpackage table
 * @version 1.0.0
 */
class maquinaTable extends maquinaBaseTable {

  /**
   * Obtiene todos los datos de la tabla
   * @version 1.0.0
   * @return [stdClass|boolean]
   */
  public function getAll() {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT maq_id AS id, maq_estado AS estado, maq_valor AS valor, maq_fecha_compra AS fecha_compra, maq_numero_chasis AS numero_chasis, maq_tipo_accesorio AS tipo_accesorio, maq_horas_trabajadas AS horas_trabajadas, maq_tiempo_mantenimiento_hora AS tiempo_mantenimiento_hora, maq_numero_serie AS numero_serie, maq_modelo AS modelo, maq_horas_actividad AS horas_actividad, maq_valor_hora AS valor_hora, maq_created_at AS created_at, maq_updated_at AS updated_at, maq_deleted_at AS deleted_at FROM bda_maquina WHERE maq_deleted_at IS NULL ORDER BY maq_created_at ASC';
    $answer = $conn->prepare($sql);
    $answer->execute();
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }

  /**
   * Retorna un elemento de la tabla buscado por un ID especifico
   * @version 1.0.0
   * @param integer $id
   * @return mixed [stdClass | boolean]
   */
  public function getById($id = null) {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT maq_id AS id, maq_estado AS estado, maq_valor AS valor, maq_fecha_compra AS fecha_compra, maq_numero_chasis AS numero_chasis, maq_tipo_accesorio AS tipo_accesorio, maq_horas_trabajadas AS horas_trabajadas, maq_tiempo_mantenimiento_hora AS tiempo_mantenimiento_hora, maq_numero_serie AS numero_serie, maq_modelo AS modelo, maq_horas_actividad AS horas_actividad, maq_valor_hora AS valor_hora, maq_created_at AS created_at, maq_updated_at AS updated_at, maq_deleted_at AS deleted_at FROM bda_maquina WHERE maq_deleted_at IS NULL AND id = :id';
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
    $sql = 'INSERT INTO bda_maquina (maq_estado, maq_valor, maq_fecha_compra, maq_numero_chasis, maq_tipo_accesorio, maq_horas_trabajadas, maq_tiempo_mantenimiento_hora, maq_numero_serie, maq_modelo, maq_horas_actividad, maq_valor_hora) VALUES (:estado, :valor, :fecha_compra, :numero_chasis, :tipo_accesorio, :horas_trabajadas, :tiempo_mantenimiento_hora, :numero_serie, :modelo, :horas_actividad, :valor_hora)';
    $params = array(
        ':estado' => $this->getEstado(),
        ':valor' => $this->getValor(),
        ':fecha_compra' => $this->getFechaCompra(),
        ':numero_chasis' => $this->getNumeroChasis(),
        ':tipo_accesorio' => $this->getTipoAccesorio(),
        ':horas_trabajadas' => $this->getHorasTrabajadas(),
        ':tiempo_mantenimiento_hora' => $this->getTiempoMantenimientoHora(),
        ':numero_serie' => $this->getNumeroSerie(),
        ':modelo' => $this->getModelo(),
        ':horas_actividad' => $this->getHorasActividad(),
        ':valor_hora' => $this->getValorHora()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    $this->setId($conn->lastInsertId(self::_SEQUENCE));
    return true;
  }

  /**
   * Actualiza o modifica un registro de la tabla
   * @version 1.0.0
   * @return boolean
   */
  public function update() {
    $conn = $this->getConnection($this->config);
    $sql = 'UPDATE bda_maquina SET maq_estado = :estado, maq_valor = :valor, maq_fecha_compra = :fecha_compra, maq_numero_chasis = :numero_chasis, maq_tipo_accesorio = :tipo_accesorio, maq_horas_trabajadas = :horas_trabajadas, maq_tiempo_mantenimiento_hora = :tiempo_mantenimiento_hora, maq_numero_serie = :numero_serie, maq_modelo = :modelo, maq_horas_actividad = :horas_actividad, maq_valor_hora = :valor_hora WHERE maq_id = :id';
    $params = array(
        ':estado' => $this->getEstado(),
        ':valor' => $this->getValor(),
        ':fecha_compra' => $this->getFechaCompra(),
        ':numero_chasis' => $this->getNumeroChasis(),
        ':tipo_accesorio' => $this->getTipoAccesorio(),
        ':horas_trabajadas' => $this->getHorasTrabajadas(),
        ':tiempo_mantenimiento_hora' => $this->getTiempoMantenimientoHora(),
        ':numero_serie' => $this->getNumeroSerie(),
        ':modelo' => $this->getModelo(),
        ':horas_actividad' => $this->getHorasActividad(),
        ':valor_hora' => $this->getValorHora(),
        ':id' => $this->getId()
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
  public function delete($deleteLogical = true) {
    $conn = $this->getConnection($this->config);
    $params = array(
        ':id' => $this->getId()
    );
    switch ($deleteLogical) {
      case true:
        $sql = 'UPDATE bda_maquina SET maq_deleted_at = now() WHERE maq_id = :id';
        break;
      case false:
        $sql = 'DELETE FROM bda_maquina WHERE maq_id = :id';
        break;
      default:
        throw new PDOException('Por favor indique un dato coherente para el borrado lógico (true) o físico (false)');
    }
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return true;
  }

}
