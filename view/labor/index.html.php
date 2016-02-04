
<?php include_once $fsConfig->getPath() . 'view/partial/head.php'; ?>


<div class="container container-fluid">
  <h1>Labbor </h1>

  <p>
    <a href="<?php echo $fsConfig->getUrl() ?>index.php/labor/nuevo"  class="btn btn-warning glyphicon glyphicon-plus" >Nuevo</a>
    <a target="_NEW" href="<?php echo $fsConfig->getUrl() ?>index.php/labor/reporte" class="btn btn-info glyphicon">ReporteEnPDF</a> 
  </p>

  <!-- esta es la forma correcta verificar
     if($objLabor === null): -->

  <?php // if ($labor === null): ?>
  <!--<h2>Actualmente no existe informacion en el sistema</h2>-->
  <?php // else: ?>

  <form action="filtrar.php" method="post">
    <input type="text" id="filtrar" name="filtrar" required="" />
    <button type="submit">Filtrar </button>
  </form>
  <br>

  <table  class="table table-hover table-striped">
    <thead>
      <tr>
        <th><input type="checkbox" id="" name=""></th>    
        <th>Descripcion</th>
        <th>valor</th>
        <th>estado</th>
        <th>Accion</th>                    
      </tr>
    </thead>
    <tbody>
      <?php foreach ($objLabor as $labor) : ?>
        <tr>
          <td><input type="checkbox" id="" name=""></td>            
          <td><?php echo $labor->descripcion ?></td>            
          <td><?php echo $labor->valor ?></td>            
          <td><?php echo $labor->estado ?></td>            
          <td>
            <a href="<?php echo $fsConfig->getUrl() ?>index.php/labor/ver?id=<?php echo $labor->id ?>" class="btn btn-warning btn-xs">Ver</a>
            <a href="<?php echo $fsConfig->getUrl() ?>index.php/labor/editar?id=<?php echo $labor->id ?>" class="btn btn-primary btn-xs">Editar</a>
            <a href="#" data-toggle="modal" data-target="#myModal<?php echo $labor->id ?>" class="btn btn-danger btn-xs">Eliminar</a>
           
            <?php include $fsConfig->getPath() . 'view/partial/modalEliminarLabor.php'; ?>
          </td>
        </tr>
      <?php endforeach ?>
    </tbody>
  </table>
  
</div>


<script src="<?php echo $fsConfig->getUrl() ?>js/eliminar.js"></script>
<?php include_once $fsConfig->getPath() . 'view/partial/foot.php' ?> 

<?php // endif; ?>

