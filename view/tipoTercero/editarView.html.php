<?php include_once $fsConfig->getPath() . 'view/partial/head.php' ?>
<div class="container container-fluid">
  <h1>Editar tipo tercero</h1>
  <form class="form-horizontal" action="<?php echo $fsConfig->getUrl() ?>index.php/tipoTercero/actualizar" method="POST" >
    <input value="<?php echo $objTipoTercero[0]->id ?>" type="hidden" name="tipoTercero[id]">
    <div class="form-group">
      <label for="descripcion" class="col-sm-2 control-label">Descripción</label>
      <div class="col-sm-10">
        <input value="<?php echo $objTipoTercero[0]->descripcion ?>" type="text" class="form-control" id="descripcion" name="tipoTercero[descripcion]" placeholder="Nick Name" required autofocus>
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <a href="<?php echo $fsConfig->getUrl()?>index.php/tipoTercero/index" class="btn btn-warning">Cancelar</a>
        <button type="submit" class="btn btn-success">Editar</button>
      </div>
    </div>
  </form>
</div>
<?php include_once $fsConfig->getPath() . 'view/partial/foot.php' ?>