<?php include_once $fsConfig->getPath() . 'view/partial/head.php' ?>
<div class="container container-fluid">
  <h1>Editar cargo</h1>
  <form class="form-horizontal" action="<?php echo $fsConfig->getUrl() ?>index.php/cargo/actualizar" method="POST" >
    <input value="<?php echo $objcargo[0]->id ?>" type="hidden" name="cargo[id]">
    <div class="form-group">
      <label for="descripcion" class="col-sm-2 control-label">Descripcion</label>
      <div class="col-sm-10">
        <input value="<?php echo $objcargo[0]->descripcion ?>" type="text" class="form-control" id="descripcion" name="cargo[descripcion]" placeholder="Nick Name" required autofocus="">
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <a href="<?php echo $fsConfig->getUrl()?>index.php/cargo/index" class="btn btn-warning">Cancelar</a>
        <button type="submit" class="btn btn-success">Editar</button>
      </div>
    </div>
  </form>
</div>
<?php include_once $fsConfig->getPath() . 'view/partial/foot.php' ?>