<?php

use FStudio\model\base\maquinaBaseTable;

/**
 * Description ofmaquinaTable
 * @author Johanna G <ladyjkaulitz@hotmail.com>
 * @package
 * @subpackage model
 * @subpackage table
 * @version 1.0.0
 */
class aguaSurcoTable extends maquinaBaseTable {

  /**
   * Obtiene todos los datos de la tabla
   * @version 1.0.0
   * @return [stdClass|boolean]
   */
  public function getAll() {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT maq_id, maq_estado, maq_valor, maq_fecha_compra,maq_numero_chasis,maq_t_asesorio,maq_horas_trabajadas,'
            . 'maq_tiempo_mantenimiento_horas'
            . ',maq_numero_serie,maq_modelo,maq_horas_actividad,maq_valor_hora,maq_created_at, maq_updated_at,  maq_deleted_at '
            . 'FROM bda_maquina ORDER BY maq_created_at ASC';
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
  public function getById($id) {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT maq_id, maq_estado, maq_valor, maq_fecha_compra,maq_numero_chasis,maq_t_asesorio,maq_horas_trabajadas,'
            . 'maq_tiempo_mantenimiento_horas'
            . ',maq_numero_serie,maq_modelo,maq_horas_actividad,maq_valor_hora,maq_created_at, maq_updated_at,  maq_deleted_at'
            . 'FROM bda_maquina WHERE deleted_at IS NULL '
            . 'AND maq_id = :maq_id';
    $params = array(
        ':maq_id' => ($id !== null) ? $id :
                $this->getById()
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
    $sql = 'INSERT INTO maquina (maq_id, maq_estado, maq_valor, maq_fecha_compra,maq_numero_chasis,maq_t_asesorio,maq_horas_trabajadas,'
            . 'maq_tiempo_mantenimiento_horas'
            . ',maq_numero_serie,maq_modelo,maq_horas_actividad,maq_valor_hora,maq_created_at, maq_updated_at,  maq_deleted_at) '
            . 'VALUES (:maq_id, :maq_estado, :maq_valor, :maq_fecha_compra, :maq_numero_chasis, :maq_t_asesorio, :maq_horas_trabajadas,'
            . ' :maq_tiempo_mantenimiento_horas'
            . ', :maq_numero_serie, :maq_modelo, :maq_horas_actividad, :maq_valor_hora, :maq_created_at,  :maq_updated_at,   :maq_deleted_at)';
    $params = array(
        ':maq_id' => $this->getById(),
        ':maq_estado' => $this->getEstado(),
        ':maq_valor' => $this->getValor(),
        ':maq_fecha_compra' => $this->getFechaCompra(),
        ':maq_numero_chasis' => $this->getNumeroChasis(),
        ':maq_t_asesorio' => $this->getTAccesorio(),
        ':maq_horas_trabajadas' => $this->getHorasTrabajadas(),
        ':maq_tiempo_mantenimiento_horas' => $this->getTiempoMantenientoHoras(),
        ':maq_numero_serie' => $this->getNumeroSerie(),
        ':maq_modelo' => $this->getModelo(),
        ':maq_horas_actividad' => $this->getHorasActividad(),
        ':maq_valor_hora' => $this->getValorHora(),
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
    $sql = 'UPDATE maquina SET maq_estado = :maq_estado, maq_valor= :maq_valor, maq_fecha_compra= :maq_fecha_compra, '
            . 'maq_numero_chasis=:maq_numero_chasis,  maq_t_asesorio=:maq_t_asesorio, maq_horas_trabajadas=:maq_horas_trabajadas,'
            . ' maq_tiempo_mantenimiento_horas= :maq_tiempo_mantenimiento_horas'
            . ', maq_numero_serie= :maq_numero_serie, maq_modelo= :maq_modelo, maq_horas_actividad= :maq_horas_actividad, '
            . 'maq_valor_hora= :maq_valor_hora'
            . ' WHERE deaas_id = :deaas_id';
    $params = array(
        ':maq_estado' => $this->getEstado(),
        ':maq_valor' => $this->getValor(),
        ':maq_fecha_compra' => $this->getFechaCompra(),
        ':maq_numero_chasis' => $this->getNumeroChasis(),
        ':maq_t_asesorio' => $this->getTAccesorio(),
        ':maq_horas_trabajadas' => $this->getHorasTrabajadas(),
        ':maq_tiempo_mantenimiento_horas' => $this->getTiempoMantenientoHoras(),
        ':maq_numero_serie' => $this->getNumeroSerie(),
        ':maq_modelo' => $this->getModelo(),
        ':maq_horas_actividad' => $this->getHorasActividad(),
        ':maq_valor_hora' => $this->getValorHora(),
        ':maq_id' => $this->getId()
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
        $sql = 'UPDATE bda_maquina SET deleted_at = now() WHERE id = :id';
        break;
      case false:
        $sql = 'DELETE FROM bda_maquina WHERE id = :id';
        break;
      default:
        throw new PDOException('Por favor indique un dato coherente para el borrado lógico o físico');
    }
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return true;
  }

}
