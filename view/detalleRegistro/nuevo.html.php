<?php include_once $fsConfig->getPath() . 'view/partial/head.php' ?>

<div class="container container-fluid">

  <h1 class=" col-lg-offset-5 " >Ingresar datos</h1>
  <br>
  <form class="form-horizontal" action=" <?php echo $fsConfig->getUrl() ?>  index.php/detalleRegistro/crear" method="POST">
    
    <div class="form-group" class="modificar">
      <label for="relme_numero" class="col-sm-2 control-label">Numero</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="relme_numero"  name="detalleRegistro[relme_numero]"placeholder="Numero">
      </div>
    </div>

    <div class="form-group" class="modificar">
      <label for="ter_id" class="col-sm-2 control-label">Id del empleado</label>
      <div class="col-sm-10">
        <input type="text"class="form-control" id="ter_id"  name="detalleRegistro[ter_id]"placeholder="id del empleado">
      </div>
    </div>

    <div class="form-group" class="modificar">
      <label for="lab_id" class="col-sm-2 control-label">Numero de labor</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="lab_id"  name="detalleRegistro[lab_id]"placeholder="Numero de labor">
      </div>
    </div>

    <div class="form-group" class="modificar">
      <label for="sue_id" class="col-sm-2 control-label">Numero de suerte</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="sue_id"  name="detalleRegistro[sue_id]"placeholder="numero de suerte">
      </div>
    </div>

    <div class="form-group" class="modificar">
      <label for="pro_id" class="col-sm-2 control-label">Numero del producto </label>
      <div class="col-sm-10">
        <input type="pro_id" class="form-control" id="pro_id"  name="detalleRegistro[pro_id]"placeholder="Numero de producto">
      </div>
    </div>

    <div class="form-group" class="modificar">
      <label for="unm_id" class="col-sm-2 control-label">Unidad de  medida</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="unm_id"  name="detalleRegistro[unm_id]"placeholder="unidad de medida">
      </div>
    </div>

    
    <div class="form-group" class="modificar">
      <label for="maq_id" class="col-sm-2 control-label"> identificacion de Maquina</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="maq_id"  name="detalleRegistro[unm_id]"placeholder="identificacion de Maquina">
      </div>
    </div>

    <div class="form-group" class="modificar">
      <label for="der_tiempo_muerto" class="col-sm-2 control-label">Tiempo muerto</label>
      <div class="col-sm-10">
          <input type="number" class="form-control" id="der_tiempo_muerto"  name="detalleRegistro[der_tiempo_muerto]"placeholder="tiempo muerto">
      </div>
    </div>

    <div class="form-group" class="modificar">
      <label for="der_total_horas_trabajadas" class="col-sm-2 control-label">total horas trabajadas</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="der_total_horas_trabajadas"  name="detalleRegistro[der_total_horas_trabajadas]"placeholder="total horas trabajadas">
      </div>
    </div>

    <div class="form-group" >
      <label for="der_hora_inicio" class="col-sm-2 control-label">hora de inicio</label>
      <div class="col-sm-10">
        <input type="time" name="hora" class="form-control" id="der_hora_inicio"  name="detalleRegistro[der_hora_inicio]"placeholder="hora de inicio">
      </div>
    </div>


    <div class="form-group">
      <label for="der_hora_fin" class="col-sm-2 control-label">hora de fin</label>
      <div class="col-sm-10">
        <input type="time" name="hora" class="form-control" id="der_hora_fin"  name="detalleRegistro[der_hora_fin]"placeholder="hora fin">
      </div>
    </div>

    
    

<button 
  
  class="btn btn-primary col-lg-offset-5" type="button" class="btn btn-info btn-lg">
  <span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span> Guardar Cambios
</button>
    
    

    <a href="<?php echo $fsConfig->getUrl() ?>index.php/detalleRegistro/index" class="btn btn-danger col-lg-offset-0" type="button" class="btn btn-info btn-lg" ">
      <span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
      Cancelar</a>



    <?php include_once $fsConfig->getPath() . 'view/partial/foot.php' ?>
