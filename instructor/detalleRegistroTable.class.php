<?php

use FStudio\model\base\detalleRegistroBaseTable;

/**
 * Description of detalleRegistroTable
 *
 * @author nombre completo <su@correo.com>
 * @package FStudio
 * @subpackage model
 * @subpackage table
 * @version 1.0.0
 */
class detalleRegistroTable extends detalleRegistroBaseTable {

  public function getAll() {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT der_item AS item, relme_numero AS realme_numero, ter_id AS tercero_id, lab_id AS labor_id, sue_id AS suerte_id, pro_id AS producto_id, unm_id AS unidad_de_medida_id, maq_id AS maquina_id, der_tiempo_muerto AS tiempo_muerto, der_total_horas_trabajadas AS total_horas_trabajadas, der_hora_inicio AS hora_inicio, der_hora_fin AS hora_fin, der_cantidad AS cantidad, der_created_at AS created_at, der_updated_at AS updated_at, der_deleted_at AS deleted_at FROM bda_detalle_registro ORDER BY  ASC';
    $answer = $conn->prepare($sql);
    $answer->execute();
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }

  public function getById($id = null) {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT der_item AS item, relme_numero AS realme_numero, ter_id AS tercero_id, lab_id AS labor_id, sue_id AS suerte_id, pro_id AS producto_id, unm_id AS unidad_de_medida_id, maq_id AS maquina_id, der_tiempo_muerto AS tiempo_muerto, der_total_horas_trabajadas AS total_horas_trabajadas, der_hora_inicio AS hora_inicio, der_hora_fin AS hora_fin, der_cantidad AS cantidad, der_created_at AS created_at, der_updated_at AS updated_at, der_deleted_at AS deleted_at FROM bda_detalle_registro AND id = :id';
    $params = array(
        ':id' => ($id !== null) ? $id : $this->getItem()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }

  public function save() {
    $conn = $this->getConnection($this->config);
    $sql = 'INSERT INTO bda_detalle_registro (relme_numero, ter_id, lab_id, sue_id, pro_id, unm_id, maq_id, der_tiempo_muerto, der_total_horas_trabajadas, der_hora_inicio, der_hora_fin, der_cantidad, der_created_at, der_updated_at, der_deleted_at) VALUES (:realme_numero, :tercero_id, :labor_id, :suerte_id, :producto_id, :unidad_de_medida_id, :maquina_id, :tiempo_muerto, :total_horas_trabajadas, :hora_inicio, :hora_fin, :cantidad, :created_at, :updated_at, :deleted_at)';
    $params = array(
        ':realme_numero' => $this->getRealmeNumero(),
        ':tercero_id' => $this->getTerceroId(),
        ':labor_id' => $this->getLaborId(),
        ':suerte_id' => $this->getSuerteId(),
        ':producto_id' => $this->getProductoId(),
        ':unidad_de_medida_id' => $this->getUnidadDeMedidaId(),
        ':maquina_id' => $this->getMaquinaId(),
        ':tiempo_muerto' => $this->getTiempoMuerto(),
        ':total_horas_trabajadas' => $this->getTotalHorasTrabajadas(),
        ':hora_inicio' => $this->getHoraInicio(),
        ':hora_fin' => $this->getHoraFin(),
        ':cantidad' => $this->getCantidad(),
        ':created_at' => $this->getCreatedAt(),
        ':updated_at' => $this->getUpdatedAt(),
        ':deleted_at' => $this->getDeletedAt()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    $this->setItem($conn->lastInsertId(self::_SEQUENCE));
    return true;
  }

  public function update() {
    $conn = $this->getConnection($this->config);
    $sql = 'UPDATE bda_detalle_registro SET relme_numero = :realme_numero, ter_id = :tercero_id, lab_id = :labor_id, sue_id = :suerte_id, pro_id = :producto_id, unm_id = :unidad_de_medida_id, maq_id = :maquina_id, der_tiempo_muerto = :tiempo_muerto, der_total_horas_trabajadas = :total_horas_trabajadas, der_hora_inicio = :hora_inicio, der_hora_fin = :hora_fin, der_cantidad = :cantidad, der_created_at = :created_at, der_updated_at = :updated_at, der_deleted_at = :deleted_at WHERE der_item = :item';
    $params = array(
        ':realme_numero' => $this->getRealmeNumero(),
        ':tercero_id' => $this->getTerceroId(),
        ':labor_id' => $this->getLaborId(),
        ':suerte_id' => $this->getSuerteId(),
        ':producto_id' => $this->getProductoId(),
        ':unidad_de_medida_id' => $this->getUnidadDeMedidaId(),
        ':maquina_id' => $this->getMaquinaId(),
        ':tiempo_muerto' => $this->getTiempoMuerto(),
        ':total_horas_trabajadas' => $this->getTotalHorasTrabajadas(),
        ':hora_inicio' => $this->getHoraInicio(),
        ':hora_fin' => $this->getHoraFin(),
        ':cantidad' => $this->getCantidad(),
        ':created_at' => $this->getCreatedAt(),
        ':updated_at' => $this->getUpdatedAt(),
        ':deleted_at' => $this->getDeletedAt(),
        ':item' => $this->getItem()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return true;
  }



}
