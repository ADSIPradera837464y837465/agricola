<?php include_once $fsConfig->getPath() . 'view/partial/head.php' ?>
<div class="container container-fluid">
  <h1>CRUD de la tabla Tercero</h1>
  <p>
    <a href="<?php echo $fsConfig->getUrl() ?>index.php/tercero/nuevo" class="btn btn-success">Nuevo</a>
  </p>
  <?php if($objtercero != NULL):?>
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Acción</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($objtercero as $tercero): ?>
        <tr>
          <td><?php echo $tercero->id ?></td>
          <td><?php echo $tercero->nombre ?></td>
          <td>
            <a href="<?php echo $fsConfig->getUrl() ?>index.php/tercero/ver?id=<?php echo $tercero->id ?>" class="btn btn-warning btn-xs">Ver</a>
            <a href="<?php echo $fsConfig->getUrl() ?>index.php/tercero/editar?id=<?php echo $tercero->id ?>" class="btn btn-primary btn-xs">Editar</a>
            <a href="#" data-toggle="modal" data-target="#myModal<?php echo $tercero->id ?>" class="btn btn-danger btn-xs">Eliminar</a>
            <?php include $fsConfig->getPath() . 'view/partial/modalEliminarTercero.php' ?>
          </td>
        </tr>
      <?php endforeach ?>
    </tbody>
    <tfoot>
    </tfoot>
  </table>
  <?php else:?>
  <p>No existen registros.</p>
  <?php endif;?>
</div>
<?php include_once $fsConfig->getPath() . 'view/partial/foot.php' ?>