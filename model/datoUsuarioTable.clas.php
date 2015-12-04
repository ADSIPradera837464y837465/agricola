<?php

use FStudio\model\base\datoUsuarioBaseTable;

/**
 * Description of dba_dato_usuario
 * @author Emanuel Castillo Mosquera <corcel125@outlook.com>
 * @package FStudio
 * @subpackage model
 * @subpackage table
 * @version 1.0.0
 */
class datoUsuarioTable extends datoUsuarioBaseTable {

  /**
   * Obtiene todos los datos de la tabla
   * @version 1.0.0
   * @return mixed [stdClass | boolean]
   */
  public function getAll() {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT dus_id AS id, usr_id AS usuario_id, dus_cedula AS cedula, dus_nombre AS nombre, dus_apellidos AS apellidos, dus_movil AS movil, dus_correo AS correo, dus_imagen AS imagen, dus_sexo AS sexo, dus_created_at AS created_at, dus_updated_at AS updated_at, dus_deleted_at AS deleted_at FROM bda_dato_usuario WHERE dus_deleted_at IS NULL ORDER BY dus_created_at ASC';
    $answer = $conn->prepare($sql);
    $answer->execute();
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }

  public function getById($id = null) {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT dus_id AS id, usr_id AS usuario_id, dus_cedula AS cedula, dus_nombre AS nombre, dus_apellidos AS apellidos, dus_movil AS movil, dus_correo AS correo, dus_imagen AS imagen, dus_sexo AS sexo, dus_created_at AS created_at, dus_updated_at AS updated_at, dus_deleted_at AS deleted_at FROM bda_dato_usuario WHERE dus_deleted_at IS NULL AND id = :id';
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
    $sql = 'INSERT INTO bda_dato_usuario (usr_id, dus_cedula, dus_nombre, dus_apellidos, dus_movil,dus_correo,dus_imagen,dus_sexo) VALUES (:usr_id, :dus_cedula, :dus_nombre, :dus_apellidos, :dus_movil,:dus_correo,:dus_imagen,:dus_sexo)';
    $params = array(
        ':usuario_id' => $this->getUsuarioId(),
        ':cedula' => $this->getCedula(),
        ':nombre' => $this->getNombre(),
        ':apellidos' => $this->getApellidos(),
        ':movil' => $this->getMovil(),
        ':correo' => $this->getCorreo(),
        ':imagen' => $this->getImagen(),
        ':sexo' => $this->getSexo()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    $this->setId($conn->lastInsertId(self::_SEQUENCE));
    return true;
  }

  /**
   * Actualiza un registro de la tabla
   * @version 1.0.0
   * @return boolean
   */
  public function update() {
    $conn = $this->getConnection($this->config);
    $sql = 'UPDATE bda_dato_usuario SET usr_id = :usuario_id, dus_cedula = :cedula, dus_nombre = :nombre, dus_apellidos = :apellidos, dus_movil = :movil, dus_correo = :correo, dus_imagen = :imagen, dus_sexo = :sexo WHERE dus_id = :id';
    $params = array(
        ':usuario_id' => $this->getUsuarioId(),
        ':cedula' => $this->getCedula(),
        ':nombre' => $this->getNombre(),
        ':apellidos' => $this->getApellidos(),
        ':movil' => $this->getMovil(),
        ':correo' => $this->getCorreo(),
        ':imagen' => $this->getImagen(),
        ':sexo' => $this->getSexo(),
        ':id' => $this->getId()
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
        $sql = 'UPDATE bda_dato_usuario SET dus_deleted_at = now() WHERE dus_id = :id';
        break;
      case false:
        $sql = 'DELETE FROM bda_dato_usuario WHERE dus_id = :id';
        break;
      default:
        throw new PDOException('Por favor indique un dato coherente para el borrado lógico (true) o físico (false)');
    }
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return true;
  }

}
