<?php include_once $fsConfig->getPath() . 'view/partial/head.php' ?>
<div class="container container-fluid">
  <h1>CRUD de la tabla Tipo Tercero</h1>
  <p>
    <a href="<?php echo $fsConfig->getUrl()?>index.php/tipoTercero/nuevo" class="btn btn-success">Nuevo</a>
  </p>
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>Id</th>
        <th>Descripción</th>
        <th>Acción</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($objTipoTercero as $tipoTercero):?>
      <tr>
        <td><?php echo $tipoTercero->tit_id?></td>
        <td><?php echo $tipoTercero->tit_descripcion?></td>
        <td>
          <a href="<?php echo $fsConfig->getUrl() ?>index.php/tipoTercero/ver?id=<?php echo $tipoTercero->tit_id ?>" class="btn btn-warning btn-xs">Ver</a>
          <a href="<?php echo $fsConfig->getUrl() ?>index.php/persona/editar?id=<?php echo $tipoTercero->tit_id ?>" class="btn btn-primary btn-xs">Editar</a>
          <a href="#" data-toggle="modal" data-target="#myModal<?php echo $tipoTercero->tit_id ?>" class="btn btn-danger btn-xs">Eliminar</a>
          <?php include $fsConfig->getPath() . 'view/partial/modalEliminar.php' ?>
        </td>
      </tr>
      <?php endforeach?>
    </tbody>
    <tfoot>
      
    </tfoot>
  </table>
</div>
<script src="<?php echo $fsConfig->getUrl() ?>js/eliminar.js"></script>
<?php include_once $fsConfig->getPath() . 'view/partial/foot.php' ?>