<?php include_once $fsConfig->getPath() . 'view/partial/head.php' ?>
<div class="container container-fluid">
  <h1>Tipo id</h1>
  <div class="list-group">
    <?php foreach ($objTipoId as $tipoId):?>
    <div href="" class="list-group-item ">
      <h4 class="list-group-item-heading">ID</h4>
      <p class="list-group-item-text"><?php echo $tipoId->id ?></p>
    </div>
    <div href="" class="list-group-item ">
      <h4 class="list-group-item-heading">Descripción</h4>
      <p class="list-group-item-text"><?php echo $tipoId->descripcion ?></p>
    </div>
    <div href="" class="list-group-item ">
      <h4 class="list-group-item-heading">Descripción</h4>
      <p class="list-group-item-text"><?php echo $tipoId->created_at ?></p>
    </div>
    <?php endforeach;?>
  <div class="text-right">
    <a href="<?php echo $fsConfig->getUrl()?>index.php/tipoId/index" class="btn btn-default">Volver</a>
    </div>
</div>
<?php include_once $fsConfig->getPath() . 'view/partial/foot.php' ?>