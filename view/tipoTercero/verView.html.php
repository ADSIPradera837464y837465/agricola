<?php include_once $fsConfig->getPath() . 'view/partial/head.php' ?>
<div class="container container-fluid">
  <h1>Id <?php echo 'tipo tercero' ?></h1>
  <div class="list-group">
    <div href="" class="list-group-item ">
      <h4 class="list-group-item-heading">ID</h4>
      <p class="list-group-item-text"><?php echo $objTipoTercero->tit_id ?></p>
    </div>
    <div href="" class="list-group-item ">
      <h4 class="list-group-item-heading">Descripción</h4>
      <p class="list-group-item-text"><?php echo $objTipoTercero->tit_descripcion?></p>
    </div>
  <div class="text-right">
    <a href="<?php echo $fsConfig->getUrl()?>index.php/tipoTercero/index" class="btn btn-default">Volver</a>
    </div>
</div>
<?php include_once $fsConfig->getUrl() . 'view/partial/foot.php' ?>