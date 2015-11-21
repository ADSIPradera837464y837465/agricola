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
    $sql = 'SELECT dus_id, usr_id, dus_cedula, dus_nombre, dus_apellidos, dus_movil,dus_correo,dus_imagen,dus_sexo,dus_create_at FROM bda_dato_usuario ORDER BY created_at ASC';
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
    $sql = 'SELECT dus_id, usr_id, dus_cedula, dus_nombre, dus_apellidos, dus_movil,dus_correo,dus_imagen,dus_sexo,dus_create_at '
            . 'FROM bda_dato_usuario '
            . 'AND dus_id = :id';
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
    $sql = 'INSERT INTO bda_dato_usuario (usr_id, dus_cedula, dus_nombre, dus_apellidos, dus_movil,dus_correo,dus_imagen,dus_sexo) VALUES (:usr_id, :dus_cedula, :dus_nombre, :dus_apellidos, :dus_movil,:dus_correo,:dus_imagen,:dus_sexo)';
    $params = array(
        ':usr_id' => $this->getUsuario(),
        ':dus_cedula' => $this->getCedula(),
        ':dus_nombre' => $this->getNombre(),
        ':dus_apellidos' => $this->getApellido(),
        ':dus_movil' => $this->getMovil(),
        ':dus_correo' => $this->getCorreo(),
        ':dus_imagen' => $this->getImagen(),
        ':dus_sexo' => $this->getSexo()
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
    $sql = 'UPDATE bda_dato_usuario SET usr_id = :usr_id, dus_cedula = :dus_cedula, dus_nombre = :dus_nombre, dus_apellidos = :dus_apellidos, dus_movil = :dus_movil,dus_correo = :dus_correo,dus_imagen = :dus_imagen, dus_sexo = :dus_sexo WHERE dus_id = :id';
    $params = array(
        ':usr_id' => $this->getUsuario(),
        ':dus_cedula' => $this->getCedula(),
        ':dus_nombre' => $this->getNombre(),
        ':dus_apellidos' => $this->getApellido(),
        ':dus_movil' => $this->getMovil(),
        ':dus_correo' => $this->getCorreo(),
        ':dus_imagen' => $this->getImagen(),
        ':dus_sexo' => $this->getSexo()
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
  public function delete() {
    $conn = $this->getConnection($this->config);
    $sql = 'DELETE FROM bda_dato_usuario WHERE dus_id = :id';
    $params = array(
        ':id' => $this->getId()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return true;
  }

}
