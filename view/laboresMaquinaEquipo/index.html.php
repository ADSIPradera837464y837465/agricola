
<?php include_once $fsConfig->getPath() . 'view/partial/head.php'; ?>


<div class="container container-fluid">
  <h1>labores maquina equipo </h1>

  <p>
    <a href="<?php echo $fsConfig->getUrl() ?>index.php/laboresMaquinaEquipo/nuevo"  class="btn btn-warning glyphicon glyphicon-plus" >Nuevo</a>
    <a target="_NEW" href="<?php echo $fsConfig->getUrl() ?>index.php/laboresMaquinaEquipo/reporte" class="btn btn-info glyphicon">ReporteEnPDF</a> 
  </p>


  <!-- esta es la forma correcta verificar
     if($objImplemento === null): -->

  <?php // if ($laboresMaquinaEquipo === null): ?>
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
        <th>hacienda_id</th>
        <th>tercero_id</th>
        <th>tipo_documento_id</th>
        <th>implemento_id</th>
        <th>fecha</th>
        <th>estado</th>
        <th>tiempo</th>
        <th>total_horas_trabajadas</th>
        <th>acciones</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($objLaboresMaquinaEquipo as $laboresMaquinaEquipo) : ?>
        <tr>
          <td><input type="checkbox" id="" name=""></td>            
          <td><?php echo $laboresMaquinaEquipo->hacienda_id ?></td>            
          <td><?php echo $laboresMaquinaEquipo->tercero_id ?></td>            
          <td><?php echo $laboresMaquinaEquipo->tipo_documento_id ?></td>            
          <td><?php echo $laboresMaquinaEquipo->implemento_id ?></td>            
          <td><?php echo $laboresMaquinaEquipo->fecha ?></td>            
          <td><?php echo $laboresMaquinaEquipo->estado ?></td>            
          <td><?php echo $laboresMaquinaEquipo->tiempo ?></td>            
          <td><?php echo $laboresMaquinaEquipo->total_horas_trabajadas ?></td>            
          <td>
            <a href="<?php echo $fsConfig->getUrl() ?>index.php/laboresMaquinaEquipo/ver?id=<?php echo $laboresMaquinaEquipo->id ?>" class="btn btn-warning btn-xs">Ver</a>
            <a href="<?php echo $fsConfig->getUrl() ?>index.php/laboresMaquinaEquipo/editar?id=<?php echo $laboresMaquinaEquipo->id ?>" class="btn btn-primary btn-xs">Editar</a>
            <a href="#" data-toggle="modal" data-target="#myModal<?php echo $laboresMaquinaEquipo->id ?>" class="btn btn-danger btn-xs">Eliminar</a>
            
              <?php  include $fsConfig->getPath() . 'view/partial/modalEliminarLaboresMaquinaEquipo.php'; ?>
          </td>
        </tr>
      <?php endforeach ?>
    </tbody>
  </table>
</div>

<!--<script src="<?php echo $fsConfig->getUrl() ?>css/js/eliminar.js"></script>-->
<script src="<?php  echo $fsConfig->getUrl()  ?>js/eliminar.js"></script>
<?php  include_once $fsConfig->getPath() . 'view/partial/foot.php' ?> 

<?php // endif; ?>

