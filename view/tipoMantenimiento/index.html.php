<?php include_once $fsConfig - th() . 'view/partial/head.php' ?>

   
<div class="container container-fluid">
  <h1>Tipo Mantenimiento</h1>
  <a href=" <?php config:: getUrl() ?>index.php/tipoMantenimiento/nuevo" class="btn-success">Nuevo</a>
  <table border="1">
    <thead>
      <tr>
        <th><input type="checkbox" id="" name=""></th>
        <th>identificacion tipo mantenimiento</th>
        <th>descripcion tipo mantenimiento</th>
        <th>created</th>
      </tr>
    </thead>
    <tbody>

      <?php if ($objtipoMantenimiento !== false): ?>        
        <?php foreach ($objtipoMantenimiento as $tipoMantenimiento) : ?>        
          <tr>
            <td><input type="checkbox" id="" name=""></td>
            <td><?php echo $tipoMantenimiento->tma_id ?></td>           
            <td><?php echo $tipoMantenimiento->tma_descripcion ?></td>
            <td><?php echo $tipoMantenimiento->tma_created_at ?></td>
          </tr>

        <td>
          <a href="<?php echo config::getUrl() ?>index.php/tipoMantenimiento/ver?=id = <?php echo $tipoMantenimiento->id ?>" class="btn btn-info btn-xs"> Ver </a>
          <a href="<?php echo config::getUrl() ?>index.php/tipoMantenimiento/editar?=id = <?php echo $tipoMantenimiento->id ?>" class="btn btn-info btn-xs" class="btn btn-info btn-xs"> Editar</a>
          <a href="#" data-toggle="modal" data-target="#myModal <?php echo $tipoMantenimiento->id ?> " class="btn btn-info btn-xs"> Eliminar </a>
          <?php include config::getPath() . 'View/partial/modelEliminar.php'; ?>
        </td>


        </tbody>

      <?php endforeach ?>   
    <?php endif; ?>

  </table>
</div>
<script src="<?php echo config::getUrl() ?>js/eliminar.js"></script>
<?php include config::getPath() . 'view/partial/foot.php'; ?>

