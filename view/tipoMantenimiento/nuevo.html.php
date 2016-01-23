<?php include_once $fsConfig->getPath() . 'view/partial/head.php' ?>

<div class="container container-fluid">

  <h1>Nuevo</h1>
  <form class="form-horizontal" action=" <?php echo config::getUrl() ?>  index.php/tipoMantenimiento/crear" method="POST">
    <div class="form-group">
      <label for="tma_id" class="col-sm-2 control-label">identificacion tipo mantenimiento</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="tma_id"  name="tipoMantenimiento[tma_id]"placeholder="identificacion tipo mantenimiento">
      </div>
    </div>

    <div class="form-group">
      <label for="tma_descripcion" class="col-sm-2 control-label">descripcion tipo mantenimiento</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="tma_descripcion"  name="tipoMantenimiento[tma_descripcion]"placeholder="descripcion tipo mantenimiento">
      </div>
    </div>

    <div class="form-group">
      <label for="tma_created_at" class="col-sm-2 control-label">created</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="tma_created_at"  name="tipoMantenimiento[tma_created_at]"placeholder="created">
      </div>
    </div>



    <?php include_once $fsConfig->getPath() . 'view/partial/foot.php' ?>
