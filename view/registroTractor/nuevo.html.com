<?php include_once $fsConfig->getPath() . 'view/partial/head.php' ?>

<div class="container container-fluid">

  <h1>Nuevo Registro</h1>
  <form class="form-horizontal" action=" <?php echo config::getUrl() ?>  index.php/registroTractor/crear" method="POST">
    <div class="form-group">
      <label for="csc_id" class="col-sm-2 control-label">Control salida caña</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="csc_id"  name="registroTractor[csc_id]"placeholder="control salida de caña">
      </div>
    </div>

      <div class="form-group">
      <label for="hora_salida" class="col-sm-2 control-label">Hora de salida</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="hora_salida"  name="registroTractor[hora_salida]"placeholder="Hora de salida">
      </div>
    </div>
    
      <div class="form-group">
      <label for="rtr_tractor" class="col-sm-2 control-label">Registro Tractor</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="rtr_tractor"  name="registroTractor[rtr_tractor]"placeholder="Registro de tractor">
      </div>
    </div>
    
      <div class="form-group">
      <label for="rtr_observacion" class="col-sm-2 control-label">Observaciones</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="rtr_observacion"  name="registroTractor[rtr_observacion]"placeholder="Observaciones">
      </div>
    </div>

    <div class="form-group">
      <label for="der_created_at" class="col-sm-2 control-label">fecha de creacion</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="der_created_at"  name="registroTractor[der_created_at]"placeholder="fecha de creacion">
      </div>
    </div>



    <?php include_once $fsConfig->getPath() . 'view/partial/foot.php' ?>

