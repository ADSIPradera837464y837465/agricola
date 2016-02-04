<?php include_once $fsConfig->getPath() . 'view/partial/head.php' ?>

<div class="container container-fluid">
   
  <h1>Nuevo</h1>
  <form class="form-horizontal" action=" <?php echo config::getUrl() ?>  index.php/ordenServicio/crear" method="POST">
    <div class="form-group">
      <label for="ors_id" class="col-sm-2 control-label">identificacion orden servicio</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="ors_id"  name="ordenServicio[ors_id]"placeholder="identificacion orden servicio">
      </div>
    </div>

    <div class="form-group">
      <label for="maq_id" class="col-sm-2 control-label">identificacion de la maquina</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="maq_id"  name="ordenServicio[maq_id]"placeholder="identificacion de la maquina">
      </div>
    </div>  

    <div class="form-group">
      <label for="tma_id" class="col-sm-2 control-label">identificacion del tipo mantenimiento</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="tma_id"  name="ordenServicio[tma_id]"placeholder="identificacion del tipo mantenimiento">
      </div>
    </div>

    <div class="form-group">
      <label for="ter_id_elabora" class="col-sm-2 control-label">identificacion del tercero elabora</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="ter_id_elabora"  name="ordenServicio[ter_id_elabora]"placeholder="identificacion del tercero elabora">
      </div>
    </div>

    <div class="form-group">
      <label for="ter_id_realiza" class="col-sm-2 control-label">identificacion del tercero realiza </label>
      <div class="col-sm-10">
        <input type="ter_id_realiza" class="form-control" id="ter_id_realiza"  name="ordenServicio[ter_id_realiza]"placeholder="identificacion del tercero realiza">
      </div>
    </div>

    <div class="form-group">
      <label for="ors_fecha" class="col-sm-2 control-label">orden servicio fecha</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="ors_fecha"  name="ordenServicio[ors_fecha]"placeholder="orden servicio fecha">
      </div>
    </div>

    <div class="form-group">
      <label for="ors_observacion" class="col-sm-2 control-label">orden servicio observacion</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="ors_observacion"  name="ordenServicio[ors_observacion]"placeholder="orden servicio observacion">
      </div>
    </div>

    <div class="form-group">
      <label for="ors_created_at" class="col-sm-2 control-label">created</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="ors_created_at"  name="ordenServicio[ors_created_at]"placeholder="created">
      </div>
    </div>



    <?php include_once $fsConfig->getPath() . 'view/partial/foot.php' ?>

