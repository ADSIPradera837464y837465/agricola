<?php

use FStudio\model\base\terceroBaseTable;

/**
 * Description of terceroTable
 *
 * @author nombre completo <su@correo.com>
 * @package FStudio
 * @subpackage model
 * @subpackage table
 * @version 1.0.0
 */
class terceroTable extends terceroBaseTable {

  public function getAll() {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT ter_id AS id, ter_nombre AS nombre, ter_apellido AS apellido, ter_telefono AS telefono, ter_direccion AS direccion, ter_correo AS correo, car_id AS cargo_id, tpi_id AS tipo_id, tit_id AS tipo_tercero_id, ter_created_at AS created_at, ter_updated_at AS updated_at, ter_deleted_at AS deleted_at FROM bda_tercero WHERE ter_deleted_at IS NULL ORDER BY ter_created_at ASC';
    $answer = $conn->prepare($sql);
    $answer->execute();
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }

  public function getById($id = null) {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT ter_id AS id, ter_nombre AS nombre, ter_apellido AS apellido, ter_telefono AS telefono, ter_direccion AS direccion, ter_correo AS correo, car_id AS cargo_id, tpi_id AS tipo_id, tit_id AS tipo_tercero_id, ter_created_at AS created_at, ter_updated_at AS updated_at, ter_deleted_at AS deleted_at FROM bda_tercero WHERE ter_deleted_at IS NULL AND id = :id';
    $params = array(
        ':id' => ($id !== null) ? $id : $this->getId()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }

  public function save() {
    $conn = $this->getConnection($this->config);
    $sql = 'INSERT INTO bda_tercero (ter_nombre, ter_apellido, ter_telefono, ter_direccion, ter_correo, car_id, tpi_id, tit_id) VALUES (:nombre, :apellido, :telefono, :direccion, :correo, :cargo_id, :tipo_id, :tipo_tercero_id)';
    $params = array(
        ':nombre' => $this->getNombre(),
        ':apellido' => $this->getApellido(),
        ':telefono' => $this->getTelefono(),
        ':direccion' => $this->getDireccion(),
        ':correo' => $this->getCorreo(),
        ':cargo_id' => $this->getCargoId(),
        ':tipo_id' => $this->getTipoId(),
        ':tipo_tercero_id' => $this->getTipoTerceroId()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    $this->setId($conn->lastInsertId(self::_SEQUENCE));
    return true;
  }

  public function update() {
    $conn = $this->getConnection($this->config);
    $sql = 'UPDATE bda_tercero SET ter_nombre = :nombre, ter_apellido = :apellido, ter_telefono = :telefono, ter_direccion = :direccion, ter_correo = :correo, car_id = :cargo_id, tpi_id = :tipo_id, tit_id = :tipo_tercero_id WHERE ter_id = :id';
    $params = array(
        ':nombre' => $this->getNombre(),
        ':apellido' => $this->getApellido(),
        ':telefono' => $this->getTelefono(),
        ':direccion' => $this->getDireccion(),
        ':correo' => $this->getCorreo(),
        ':cargo_id' => $this->getCargoId(),
        ':tipo_id' => $this->getTipoId(),
        ':tipo_tercero_id' => $this->getTipoTerceroId(),
        ':id' => $this->getId()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return true;
  }

  public function delete($deleteLogical = true) {
    $conn = $this->getConnection($this->config);
    $params = array(
        ':id' => $this->getId()
    );
    switch ($deleteLogical) {
      case true:
        $sql = 'UPDATE bda_tercero SET ter_deleted_at = now() WHERE ter_id = :id';
        break;
      case false:
        $sql = 'DELETE FROM bda_tercero WHERE ter_id = :id';
        break;
      default:
        throw new PDOException('Por favor indique un dato coherente para el borrado lógico (true) o físico (false)');
    }
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return true;
  }

}
