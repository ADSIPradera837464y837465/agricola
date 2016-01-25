<?php include_once $fsConfig->getPath() . 'view/partial/head.php' ?>
<div class="container container-fluid">
  <h1>Tercero</h1>
  <div class="list-group">
    <?php foreach ($objtercero as $tercero):?>
    <div href="" class="list-group-item ">
      <h4 class="list-group-item-heading">ID</h4>
      <p class="list-group-item-text"><?php echo $tercero->id ?></p>
    </div>
    <div href="" class="list-group-item ">
      <h4 class="list-group-item-heading">Nombre</h4>
      <p class="list-group-item-text"><?php echo $tercero->nombre ?></p>
    </div>
    <div href="" class="list-group-item ">
      <h4 class="list-group-item-heading">Apellido</h4>
      <p class="list-group-item-text"><?php echo $tercero->apellido ?></p>
    </div>
    <div href="" class="list-group-item ">
      <h4 class="list-group-item-heading">Teléfono</h4>
      <p class="list-group-item-text"><?php echo $tercero->telefono ?></p>
    </div>
    <div href="" class="list-group-item ">
      <h4 class="list-group-item-heading">Dirección</h4>
      <p class="list-group-item-text"><?php echo $tercero->direccion ?></p>
    </div>
    <div href="" class="list-group-item ">
      <h4 class="list-group-item-heading">Correo</h4>
      <p class="list-group-item-text"><?php echo $tercero->correo ?></p>
    </div>
    <div href="" class="list-group-item ">
      <h4 class="list-group-item-heading">Cargo</h4>
      <p class="list-group-item-text"><?php echo $tercero->cargo_id ?></p>
    </div>
    <div href="" class="list-group-item ">
      <h4 class="list-group-item-heading">Tipo Id</h4>
      <p class="list-group-item-text"><?php echo $tercero->tipo_id ?></p>
    </div>
    <div href="" class="list-group-item ">
      <h4 class="list-group-item-heading">Tipo tercero Id</h4>
      <p class="list-group-item-text"><?php echo $tercero->tipo_tercero_id ?></p>
    </div>
    <?php endforeach;?>
  <div class="text-right">
    <a href="<?php echo $fsConfig->getUrl()?>index.php/tercero/index" class="btn btn-default">Volver</a>
    </div>
</div>
<?php include_once $fsConfig->getPath() . 'view/partial/foot.php' ?>