<?php include_once $fsConfig->getPath() . 'view/partial/head.php' ?>
<div class="container container-fluid">
  <h1>CRUD de la tabla Tipo Id</h1>
  <p>
    <a href="<?php echo $fsConfig->getUrl() ?>index.php/tipoId/nuevo" class="btn btn-success">Nuevo</a>
  </p>
  <?php if($objTipoId != NULL):?>
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>Id</th>
        <th>Descripción</th>
        <th>Acción</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($objTipoId as $tipoId): ?>
        <tr>
          <td><?php echo $tipoId->id ?></td>
          <td><?php echo $tipoId->descripcion ?></td>
          <td>
            <a href="<?php echo $fsConfig->getUrl() ?>index.php/tipoId/ver?id=<?php echo $tipoId->id ?>" class="btn btn-warning btn-xs">Ver</a>
            <a href="<?php echo $fsConfig->getUrl() ?>index.php/tipoId/editar?id=<?php echo $tipoId->id ?>" class="btn btn-primary btn-xs">Editar</a>
            <a href="#" data-toggle="modal" data-target="#myModal<?php echo $tipoId->id ?>" class="btn btn-danger btn-xs">Eliminar</a>
            <?php include $fsConfig->getPath() . 'view/partial/modalEliminarTipoId.php' ?>
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
<script src="<?php echo $fsConfig->getUrl() ?>js/eliminar.js"></script>
<?php include_once $fsConfig->getPath() . 'view/partial/foot.php' ?>