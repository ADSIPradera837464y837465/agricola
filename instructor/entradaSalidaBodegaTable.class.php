<?php

use FStudio\model\base\entradaSalidaBodegaBaseTable;

/**
 * Description of entradaSalidaBodegaTable
 *
 * @author nombre completo <su@correo.com>
 * @package FStudio
 * @subpackage model
 * @subpackage table
 * @version 1.0.0
 */
class entradaSalidaBodegaTable extends entradaSalidaBodegaBaseTable {

  public function getAll() {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT esb_id AS id, ter_id_elabora AS tercero_id_elabora, ter_id_solicita AS tercero_id_solicita, tpd_id AS tipo_documento_id, esb_fecha AS fecha, esb_observacion AS observacion, esb_created_at AS created_at, esb_updated_at AS updated_at, esb_deleted_at AS deleted_at FROM bda_entrada_salida_bodega ORDER BY  ASC';
    $answer = $conn->prepare($sql);
    $answer->execute();
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }

  public function getById($id = null) {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT esb_id AS id, ter_id_elabora AS tercero_id_elabora, ter_id_solicita AS tercero_id_solicita, tpd_id AS tipo_documento_id, esb_fecha AS fecha, esb_observacion AS observacion, esb_created_at AS created_at, esb_updated_at AS updated_at, esb_deleted_at AS deleted_at FROM bda_entrada_salida_bodega AND id = :id';
    $params = array(
        ':id' => ($id !== null) ? $id : $this->getId()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }

  public function save() {
    $conn = $this->getConnection($this->config);
    $sql = 'INSERT INTO bda_entrada_salida_bodega (ter_id_elabora, ter_id_solicita, tpd_id, esb_fecha, esb_observacion, esb_created_at, esb_updated_at, esb_deleted_at) VALUES (:tercero_id_elabora, :tercero_id_solicita, :tipo_documento_id, :fecha, :observacion, :created_at, :updated_at, :deleted_at)';
    $params = array(
        ':tercero_id_elabora' => $this->getTerceroIdElabora(),
        ':tercero_id_solicita' => $this->getTerceroIdSolicita(),
        ':tipo_documento_id' => $this->getTipoDocumentoId(),
        ':fecha' => $this->getFecha(),
        ':observacion' => $this->getObservacion(),
        ':created_at' => $this->getCreatedAt(),
        ':updated_at' => $this->getUpdatedAt(),
        ':deleted_at' => $this->getDeletedAt()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    $this->setId($conn->lastInsertId(self::_SEQUENCE));
    return true;
  }

  public function update() {
    $conn = $this->getConnection($this->config);
    $sql = 'UPDATE bda_entrada_salida_bodega SET ter_id_elabora = :tercero_id_elabora, ter_id_solicita = :tercero_id_solicita, tpd_id = :tipo_documento_id, esb_fecha = :fecha, esb_observacion = :observacion, esb_created_at = :created_at, esb_updated_at = :updated_at, esb_deleted_at = :deleted_at WHERE esb_id = :id';
    $params = array(
        ':tercero_id_elabora' => $this->getTerceroIdElabora(),
        ':tercero_id_solicita' => $this->getTerceroIdSolicita(),
        ':tipo_documento_id' => $this->getTipoDocumentoId(),
        ':fecha' => $this->getFecha(),
        ':observacion' => $this->getObservacion(),
        ':created_at' => $this->getCreatedAt(),
        ':updated_at' => $this->getUpdatedAt(),
        ':deleted_at' => $this->getDeletedAt(),
        ':id' => $this->getId()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return true;
  }



}
