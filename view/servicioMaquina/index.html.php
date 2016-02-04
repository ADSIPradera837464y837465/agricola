<?php include_once $fsConfig->getPath() . 'view/partial/head.php' ?>
<div class="container container-fluid">
  <h1>Listar </h1>

  <p>
    <a href="<?php echo $fsConfig->getUrl() ?>index.php/servicioMaquina/nuevo"  class="btn btn-warning glyphicon glyphicon-plus" >Nuevo</a>
  </p>
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>servicio Id</th>
        <th>servicio de descripcion</th>
        <th>servicio de estado </th>
           <th>Acciones </th>
<!--        <th>Crear</th>
        <th>Actualizar</th>
        <th>Eliminar</th>-->
      </tr>
    </thead>
    <tbody>
      <?php foreach ($objServicioMaquina as $servicioMaquina): ?>
        <tr>
          <td><?php echo $servicioMaquina->id ?></td>
          <td><?php echo $servicioMaquina->descripcion ?></td>
          <td><?php echo $servicioMaquina->estado ?></td>
          <td>
            <a href="<?php echo $fsConfig->getUrl() ?>index.php/servicioMaquina/ver?id=<?php echo $servicioMaquina->id ?>" class="btn btn-warning btn-xs">Ver</a>
            <a href="<?php echo $fsConfig->getUrl() ?>index.php/servicioMaquina/editar?id=<?php echo $servicioMaquina->id ?>" class="btn btn-primary btn-xs">Editar</a>
            <a href="#" data-toggle='modal' data-target='#myModal<?php echo $servicioMaquina->id ?>' class="btn btn-danger btn-xs">eliminar</a>
            <?php include $fsConfig->getPath() . 'view/partial/modalEliminarServicioMaquina.php'; ?></td>       
        </tr>
      <?php endforeach ?>
    </tbody>
  </table>
  <div>
    <a href="<?php echo $fsConfig->getUrl() ?>index.php/servicioMaquina/reporte" target="_blank" class="btn btn-primary btn-xs">Ver Reporte</a>
  </div>
</div>
<script src="<?php echo $fsConfig->getUrl() ?>css/js/eliminar.js"></script>
<?php include_once $fsConfig->getPath() . 'view/partial/foot.php' ?>

