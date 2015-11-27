<?php

/**
 * Description of metodoRiegoTable
 * @author mariam montaño <nichesitap@hotmail.com>
 * @package
 * @subpackage model
 * @subpackage table
 * @version 1.0.0
 */


class formularioRegistroTable extends formularioRegistroBaseTable{

  
  public function getAll() {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT fore_num_documento,fore_fecha, met_rie_id, hac_id, sue_id, fore_Created_at, fore_Updated_at, fore_Deleted_at FROM formularioRegistro ORDER BY fore_Created_at ASC';
    $answer = $conn->prepare($sql);
    $answer->execute();
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }
  
  public function getById($id) {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT fore_num_documento,fore_fecha, met_rie_id, hac_id, sue_id, fore_Created_at, fore_Updated_at '
            . 'FROM formularioRegistro '
            . 'AND fore_num_documento = :fore_num_documento';
    $params = array(
        ':fore_num_documento' => $id
    );
     $answer = $conn->prepare($sql);
    $answer->execute($params);
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }
  
  public function save() {
    $conn = $this->getConnection($this->config);
    $sql = 'INSERT INTO formularioRegistro(fore_fecha, met_rie_id, hac_id, sue_id) VALUES (:fore_fecha, :met_rie_id, :hac_id, : sue_id)';
    $params = array(
        ':fore_fecha' => $this->getfore_fecha(),
        ':met_rie_id' => $this->getmet_rie_id(),
        ':hac_id' => $this->gethac_id(),
        ':sue_id' => $this->getsue_id(),
        
    );
        $answer = $conn->prepare($sql);
    $answer->execute($params);
    $this->setId($conn->lastinsertId (self::_SEQUENCE));
  }


      
 
  
  public function update() {
    $conn = $this->getConnection($this->config);
    $sql = 'UPDATE formularioRegistro SET fore_fecha =:fore_fecha, met_rie_id =:met_rie_id, hac_id =:hac_id, sue_id =:sue_id WHERE fore_num_documento';
    $params = array(
        ':fore_fecha' => $this->getfore_fecha(),
        ':met_rie_id' => $this->getmet_rie_id(),
        ':hac_id' => $this->gethac_id(),
        ':sue_id' => $this->getsue_id(),
        ':fore_num_documento' => $this->getfore_num_documento(),
       
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return true;
  }

  public function delete() {
    $conn = $this->getConnection($this->config);
    $sql = 'DELETE FROM formularioRegistro WHERE fore_num_documento = :fore_num_documento';
    $params = array(
        ':fore_num_documento' => $this->getfore_num_documento()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return true;
  }
}


