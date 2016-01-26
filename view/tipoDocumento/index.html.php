
<?php include_once $fsConfig->getPath() . 'view/partial/head.php'; ?>


<div class="container container-fluid">
  <h1>Tipo documento </h1>

  <p>
    <a href="<?php echo $fsConfig->getUrl() ?>index.php/tipoDocumento/nuevo"  class="btn btn-warning glyphicon glyphicon-plus" >Nuevo</a>
    <a  target="_NEW"href="<?php echo $fsConfig->getUrl() ?>index.php/tipoDocumento/reporte" class="btn btn-info glyphicon">ReporteEnPDF</a> 
  </p>

  <!-- esta es la forma correcta verificar
     if($objImplemento === null): -->

  <?php // if ($implemento === null): ?>
  <!--<h2>Actualmente no existe informacion en el sistema</h2>-->
  <?php // else: ?>

  <form action="filtrar.php" method="post">
    <input type="text" id="filtrar" name="filtrar" required="" />
    <button type="submit">Filtrar </button>
  </form>
  <br>

  <table  class="table table-hover">
    <thead>
      <tr>
        <th><input type="checkbox" id="" name=""></th>    
        <th>Descripcion</th>
        <th>Tipo movimiento</th>
        <th>Estado</th>
        <th>Accion</th>                    
      </tr>
    </thead>
    <tbody>
      <?php foreach ($objTipoDocumento as $tipoDocumento) : ?>
        <tr>
          <td><input type="checkbox" id="" name=""></td>            
          <td><?php echo $tipoDocumento->descripcion ?></td>            
          <td><?php echo $tipoDocumento->tipo_movimiento ?></td>            
          <td><?php echo $tipoDocumento->estado ?></td>            
          <td>
            <a href="<?php echo $fsConfig->getUrl() ?>index.php/tipoDocumento/ver?id=<?php echo $tipoDocumento->id ?>" class="btn btn-warning btn-xs">Ver</a>
            <a href="<?php echo $fsConfig->getUrl() ?>index.php/tipoDocumento/editar?id=<?php echo $tipoDocumento->id ?>" class="btn btn-primary btn-xs">Editar</a>
            <a href="#" data-toggle="modal" data-target="#myModal<?php echo $tipoDocumento->id ?>" class="btn btn-danger btn-xs">Eliminar</a>
            
              <?php include $fsConfig->getPath() . 'view/partial/modalEliminarTipoDocumento.php'; ?>
          </td>
        </tr>
      <?php endforeach ?>
    </tbody>
  </table>
  
</div>

<!--<script src="<?php echo $fsConfig->getUrl() ?>css/js/eliminar.js"></script>-->
<script src="<?php echo $fsConfig->getUrl() ?>css/js/eliminar.js"></script>
<?php include_once $fsConfig->getPath() . 'view/partial/foot.php' ?> 

<?php // endif; ?>

