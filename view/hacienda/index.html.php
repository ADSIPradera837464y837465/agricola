<?php include_once $fsConfig->getPath() . 'view/partial/head.php' ?>
<div class="container container-fluid">
    <h1>Hacienda <small> ver</small></h1>
  <hr>
  <div class="">
    <div>
      <a href="<?php echo $fsConfig->getUrl() ?>index.php/hacienda/nuevo" class="btn btn-success">
        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>  Agregar una nueva hacienda</a>    
    </div>
    <form class="col-lg-3 col-lg-offset-7 form-inline">
      <label><span class="glyphicon glyphicon-search" aria-hidden="true"></span></label>
      <input name="filtro" id="filtro" class="form-control" placeholder="Buscar" >      
    </form>
  </div>
  <hr>
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>Id</th>
        <th>Descripción</th>
        <th>Ubicación</th>
        <th>Rep. Legal</th>
        <th>Creado</th>
        <th>Actualizado</th>
        <th>Opciones</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($objHacienda as  $hacienda): ?>
        <tr>
          <td><?php echo $hacienda->id ?></td>
          <td><?php echo $hacienda->descripcion ?></td>
          <td><?php echo $hacienda->ubicacion ?></td>
          <td><?php echo $hacienda->representante_legal ?></td>
          <td><?php echo $hacienda->created_at ?></td>
          <?php if (strlen($hacienda->updated_at) > 0) : ?>
            <td><?php echo $hacienda->updated_at ?></td>
          <?php else : ?>        
            <td>sin actualizar</td>
          <?php endif; ?>
          <td><a class="btn btn-primary" href="<?php echo $fsConfig->getUrl() ?>index.php/hacienda/actualizar?id=<?php echo $hacienda->id ?>">
              <span class="glyphicon glyphicon-repeat" aria-hidden="true"></span> Actualizar</a>
            <a class="btn btn-danger" href="#" data-toggle="modal" data-target="" > 
              <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>  Eliminar</a></td>
        </tr>
      <?php endforeach ?>
    </tbody>
    <tfoot>
    </tfoot>
  </table>
    
</div>
<script src="<?php echo $fsConfig->getUrl() ?>js/eliminar.js"></script>
<?php include_once $fsConfig->getPath() . 'view/partial/foot.php' ?>