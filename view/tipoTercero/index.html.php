<?php include_once $fsConfig->getPath() . 'view/partial/head.php' ?>
<div class="container container-fluid">
  <h1>CRUD de la tabla Tipo Tercero</h1>
  <p>
    <a href="<?php echo $fsConfig->getUrl() ?>index.php/tipoTercero/nuevo" class="btn btn-success">Nuevo</a>
  </p>
  <?php if($objTipoTercero != NULL):?>
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>Id</th>
        <th>Descripción</th>
        <th>Acción</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($objTipoTercero as $tipoTercero): ?>
        <tr>
          <td><?php echo $tipoTercero->id ?></td>
          <td><?php echo $tipoTercero->descripcion ?></td>
          <td>
            <a href="<?php echo $fsConfig->getUrl() ?>index.php/tipoTercero/ver?id=<?php echo $tipoTercero->id ?>" class="btn btn-warning btn-xs">Ver</a>
            <a href="<?php echo $fsConfig->getUrl() ?>index.php/tipoTercero/editar?id=<?php echo $tipoTercero->id ?>" class="btn btn-primary btn-xs">Editar</a>
            <a href="#" data-toggle="modal" data-target="#myModal<?php echo $tipoTercero->id ?>" class="btn btn-danger btn-xs">Eliminar</a>
            <?php include $fsConfig->getPath() . 'view/partial/modalEliminar.php' ?>
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